<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ocr;
use App\Staffgauge;
use App\Location;
use App\Profile;

use App\MyLogOcr;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use Google\Cloud\Vision\VisionClient;
use Intervention\Image\ImageManagerStatic as Image;

class OcrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* example format of $requestData : http://staffgauge.ckartisan.com/api/ocr
        [
            "title" => "100",                //level of water
            "content" => [],                 //raw data (everything)
            "photo" => "https://......jpg" , //URL IMAGE
            "social_user_id" => "",          //line id
            "numbers" => [],                 //Array of only number
        ]
        */
        $requestData = $request->all();
        //KEEP LOG BEFORE DO ANYTHINGS
        MyLogOcr::create(["json" => json_encode( $requestData, JSON_UNESCAPED_UNICODE ) ]);
        if ($request->has('photo')) {
            //$requestData['photo'] =  Storage::putFile('uploads/ocr', new File($requestData['photo']));
            //$requestData['photo'] = $request->file('photo')->store('uploads/ocr', 'public');

            //FOR OCR 
            //$path = storage_path('app/public/'.$requestData['photo']);

            //GET PATH LIKE : http://............/xxx.jpg
            //$path = 'https://i.stack.imgur.com/koFpQ.png';
            //$requestData['photo'] = str_replace("\/","/", $requestData['photo']);
            $path = $requestData['photo'];
            
            //PATH FROM FIRESTORE : https://firebasestorage.googleapis.com/v0/b/royalirrigationfb.appspot.com/o/U239469c374d4e2337bbc5b4925938af8%2F10987025149678.jpg?alt=media&token=3a971dd0-12ee-42ba-9888-4eae5b29b371
            //WARNING : %2F and ?xxxxxxxxx
            //EXTRACT ONLY : xxx.jpg?alt=xxxxxxxxxxxxxxxxxxxxxx
            $filename = basename(str_replace("%2F","/", $path));
            //EXTRACT ONLY by remove ?xxxxxxxxx : xxx.jpg
            $filename = explode("?",$filename)[0];
            //NEW PATH : storage/app/public/uploads/ocr/xxx.jpg
            $new_path = storage_path('app/public/uploads/ocr/'.$filename);
            Image::make($path)->save($new_path);
            //$requestData['json_line'] = json_encode( $requestData );
            $requestData['json_line'] = basename($requestData['photo']);
            $requestData['photo'] = 'uploads/ocr/'.$filename;
            
            //echo $path;
            //$detected_text = $this->detect_text($path);

            //$requestData['title'] = $detected_text['title'];
            //$requestData['content'] = $detected_text['content'];

        }
        if ($request->has('content')) {
            $requestData['content'] = json_encode( $requestData['content'], JSON_UNESCAPED_UNICODE );
        }
        if ($request->has('numbers')) {
            $requestData['numbers'] = json_encode( $requestData['numbers'], JSON_UNESCAPED_UNICODE );
        }

        $requestData['user_id'] = 1;
        $requestData['locationid'] = 1;
        $requestData['staffgaugeid'] = 1;
        
        //ดึงข้อมูล location จาก lineid
        if ($request->has('lineid')) {
            $lineid = $requestData['lineid'];
            
            //ระวัง query นี้อาจมีผลลัพธ์ เป็น null
            $profile = Profile::where('lineid' , $lineid)->first();
            $requestData['user_id'] = $profile ? $profile->user_id : 1 ;
            
            
            //ระวัง query นี้อาจมีผลลัพธ์ เป็น null
            $location = Location::where('lineid' , $lineid)->latest()->first();

            $requestData['locationid'] = $location ? $location->id : 1 ;
            $requestData['staffgaugeid'] = $location ? $location->staffgaugeid : 1 ;
        }
        
            
        Ocr::create($requestData);
        $arr = [
            'status' => 'success'
        ];
        return  json_encode( $arr, JSON_UNESCAPED_UNICODE );

        
    }

    // update title in ocr
    function updateocrs(Request $request)
    {
        $requestData = $request->all();
        $lineid = $requestData['lineid'];
        $msgocrid = $requestData['msgocrid'];
        $title = $requestData['title'];

        // update title in ocr
        $updatetitle = Ocr::where('lineid', $lineid)
                ->where('msgocrid', $msgocrid)
                ->update(['title' => $title]);
    }


    /*public function store2(Request $request)
    {
        $requestData = $request->all();        
        $text = jsonjson_encode( $requestData, JSON_UNESCAPED_UNICODE );
        Ocr::create(["content"=>$text,"user_id"=>1]);
        //return "{'status':'success'}";
        //return redirect('ocr/lineoa');
    }*/

    function detect_text($path)
    {
        //https://onlinelearningportal.website/google-vision-api-implementation-with-laravel-5-8/
        $key_path = storage_path('../public/CKartisan-c6f07fc70d07.json');
        $vision = new VisionClient(['keyFile' => json_decode(file_get_contents($key_path), true)]); 
        
        $image = $vision->image(file_get_contents($path),
        [
            'TEXT_DETECTION'
        ]);
        
        $result = $vision->annotate($image);
        //print_r($result); exit;
        $texts = $result->text();
        $title = null;
        $description=[];
        $first = true;
        if($texts){
            foreach($texts as $key=>$text)
            {
                if($first) {$first = false; continue;}
                $description[]=$text->description();
                //GET CLEAN DATA 
                $temp = $this->cleanNumber($text->description());
                //ถ้าได้ตัวเลขน้อยกว่าเดิม ให้บันทึก
                if($temp){
                    if($title){
                        if($temp < $title){
                            $title = $temp;
                        }
                    }else{
                        $title = $temp;
                    }
                }

                //echo $text->description() ;
                //print_r($text->info());
                /*$bounds = [];
                foreach ($text->boundingPoly()['vertices'] as $vertex) {
                    $bounds[] = sprintf('(%d,%d)', $vertex['x'], $vertex['y']);
                }
                print('Bounds: ' . join(', ',$bounds) . PHP_EOL);*/
                //echo "<br>";
            }
        }
        return [
            "title" => $title,
            "content" => json_encode($description, JSON_UNESCAPED_UNICODE ),
        ];
        // fetch text from image //
        //print_r($description);    

    }

    function cleanNumber($text){
        //REMOVE E
        $text = str_replace("E","",$text);
        //REMOVE .
        $text = str_replace(".","",$text);
        //REMOVE SPACEBAR
        $text = str_replace(" ","",$text);
        //CONVERT to float
        $number = floatval($text);
        if($number){
            return $number;
            //CONVERT to int
            $number = intval($number);
            if($number){
                //divisible with 10 but not 0
                if($number % 10 == 0){
                    return $number;
                }
            }            
        }        
        return false;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
