<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MyLog;
use App\Ocr;
use App\Location;
use App\Staffgauge;

use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use Google\Cloud\Vision\VisionClient;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;


class OcrController extends Controller
{
    public $channel_access_token = "UZmfH2bLSKTKIAWNcQ+MJiIjtwiMyCCletK/OGjy0Ybe0EUOor2lN6CZcDKknPwaD4DX93T2MeI+ocBP6+tNcU/ORteuPvaORZIvKGg5x/1ZtpY5yyjH+xyAbqSe+5BUZbuUi+KSZ3WDC283ilfCfgdB04t89/1O/w1cDnyilFU=";
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        //PREPARE DATA
        $data = [
            "address" => "......",
            "latitude" => "13.96591547579",
            "longitude" => "100.62308359891",
            "typegroup" => "",
            "lineid" => "",
            "staffgaugeid" => 1, //ASSUME
            "user_id" => 1,     //ASSUME
            //"msglocid" => $event['message']['id'],
        ];
        $data["staffgaugeid"] = $this->findNearestStaffgauge($data);

        $detected_text = $this->detectText('https://onlinelearningportal.website/wp-content/uploads/2019/07/cropped-sign_text.png');
        print_r($detected_text);
        //CREATE LOCATION        
        //$location = Location::create($data);    
        //$data["location"] = $location;             

        //FINALLY REPLY TO USER                
        //$channel_access_token = $this->channel_access_token;
        //$this->replyToUser($data,$event, $channel_access_token,"flex-location");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //SAVE LOG
        $requestData = $request->all();
        $data = [
            "title" => "Line : api/ocr",
            "content" => json_encode($requestData, JSON_UNESCAPED_UNICODE),
        ];
        MyLog::create($data);        
        
        //GET ONLY FIRST EVENT
        $event = $requestData["events"][0];
        switch($event["type"]){
            case "message" : 
                $this->messageHandler($event);
                break;
            case "postback" : 
                $this->postbackHandler($event);
                break;
        }
    }

    public function messageHandler($event)
    {
        switch($event["message"]["type"]){
            case "image" :                 
                $this->imageHandler($event);
                break;
            case "location" :                 
                $this->locationHandler($event);
                break;
            case "text" :                 
                $this->textHandler($event);
                break;
        }   

    }

    public function textHandler($event)
    {
        switch( strtolower($event["message"]["text"]) )
        {
            case "line quick reply" :                 
                $this->quickReplyHandler($event);
                break;

            
        }   
    }

    public function quickReplyHandler($event)
    {
        $channel_access_token = $this->channel_access_token;
        $this->replyToUser(null, $event, $channel_access_token, "quickReply");
    }

    public function imageHandler($event)
    {
        //USE TO VERIFY YOURSELF
        //$channel_access_token = "PAWHiPcSKPa2aHS8...................H+QdB04t89/1O/w1cDnyilFU=";
        $channel_access_token = $this->channel_access_token;

        //LOAD REMOTE IMAGE AND SAVE TO LOCAL
        $binary_data  = $this->getImageFromLine($event["message"]["id"], $channel_access_token);                
        $filename = $this->random_string(50).".png";
        $new_path = storage_path('app/public/uploads/ocr/'.$filename);
        Image::make($binary_data)->save($new_path);
                        
        //ANALYSE IMAGE WITH GOOGLE VISION API
        $detected_text = $this->detectText($new_path);
        
        //CREATE OCR
        $data = [
            "title" => $detected_text['title'],
            "content" => $detected_text['content'],
            "numbers" => $detected_text['numbers'],
            "photo" => "uploads/ocr/".$filename,
            "user_id" => "1",  //ASSUME
            "lineid" => $event["source"]["userId"],
            //"staffgaugeid" => "1",
            //"locationid" => "1",
            "msgocrid" => $event["message"]["id"],
        ];
        $location = Location::where('lineid',$data['lineid'])->whereDate('created_at', DB::raw('CURDATE()') )->orderBy('created_at','desc')->first();
        if($location)
        {
            $data["staffgaugeid"] = $location->staffgaugeid;
            $data["locationid"] = $location->id;
            $ocr = Ocr::create($data);     
            //FINALLY REPLY TO USER      
            $data["ocr"] = $ocr;                  
            $this->replyToUser($data,$event, $channel_access_token,"flex-image");
        }
        else
        {
            //NO LOCATIONS
            //$data["staffgaugeid"] = $location->staffgaugeid;
            //$data["locationid"] = $location->id;
            $ocr = Ocr::create($data);     
            //FINALLY REPLY TO USER      
            $data["ocr"] = $ocr;                  
            $this->replyToUser($data,$event, $channel_access_token,"quickReply-only-location");
        }
        

    }

    public function locationHandler($event)
    {
        //PREPARE DATA
        $data = [
            "address" => $event['message']['address'],
            "latitude" => $event['message']['latitude'],
            "longitude" => $event['message']['longitude'],
            "typegroup" => $event['source']['type'],
            "lineid" => $event['source']['userId'],
            "staffgaugeid" => 1, //ASSUME
            "user_id" => 1,     //ASSUME
            "msglocid" => $event['message']['id'],
        ];
        $data["staffgaugeid"] = $this->findNearestStaffgauge($data);
        //CREATE LOCATION        
        $location = Location::create($data);    
        $data["location"] = $location;             

        //FINALLY REPLY TO USER                
        $channel_access_token = $this->channel_access_token;
        $this->replyToUser($data,$event, $channel_access_token,"flex-location");

    }

    public function findNearestStaffgauge($data)
    {
        $staffgauges = Staffgauge::get();

        $nearest_staffgauge_id = null;
        $min_distance = null;

        foreach($staffgauges as $item)
        {
            $dLat = $item->latitudegauge - $data["latitude"];
            //echo "<br> dLat : {$dLat} , {$item->latitudegauge} , {$data["latitude"]}";
            $dLon = $item->longitudegauge - $data["longitude"];
            //echo "<br> dLat : {$dLon} , {$item->longitudegauge} , {$data["longitude"]}";
            $d = sqrt($dLat*$dLat + $dLon*$dLon);

            if($min_distance == null)
            {
                $nearest_staffgauge_id = $item->id;
                $min_distance = $d;
            }
            else if($d < $min_distance )
            {
                $nearest_staffgauge_id = $item->id;
                $min_distance = $d;
            }
            //echo "<br>Best : [{$nearest_staffgauge_id} , {$min_distance}] , Current : [{$item->id} , {$d}] ";
        }
        return $nearest_staffgauge_id;
    }

    public function detectText($path)
    {
        //https://onlinelearningportal.website/google-vision-api-implementation-with-laravel-5-8/
        
        //CALL GOOGLE VISION OBJECT AND DO TEXT DETECTION
        $key_path = storage_path('../public/CKartisan-c6f07fc70d07.json');
        $vision = new VisionClient(['keyFile' => json_decode(file_get_contents($key_path), true)]);         
        $image = $vision->image(file_get_contents($path), [ 'TEXT_DETECTION' ] );        
        $result = $vision->annotate($image);
        //print_r($result); exit;
        $texts = $result->text();

        //FIND OUT WATER LEVEL
        $title = "-";
        $description=[];
        $numbers=[];
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
                    /*
                    if($title){
                        if($temp < $title){
                            $title = $temp;
                        }
                    }else{
                        $title = $temp;
                    }
                    */
                    $title = $temp;
                    $numbers[] = $temp;
                }
            }
        }
        return [
            "title" => $title,
            "content" => json_encode($description, JSON_UNESCAPED_UNICODE ),
            "numbers" => json_encode($numbers, JSON_UNESCAPED_UNICODE ),
        ];
        // fetch text from image //
        //print_r($description);    

    }

    public function cleanNumber($text){
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

    public function replyToUser($data, $event, $channel_access_token, $message_type)
    {
        
        switch($message_type)
        {
            case "flex-image": 
                
                $ocr = $data["ocr"];
                //$template_path = storage_path('../public/json/flexbubble-test.json');  
                $template_path = storage_path('../public/json/flexbubble-reply.json'); 
                //$template_path = storage_path('../public/json/text-reply.json');       
                $string_json = file_get_contents($template_path);
                $image_url = url('/storage')."/".$data["photo"];

                //1
                $string_json = str_replace("<image>",$image_url,$string_json);
                //2
                $string_json = str_replace("<message_id>",$event["message"]["id"],$string_json);
                
                //3
                $string_json = str_replace("<content>","-",$string_json);
                
                //4
                $numbers = join(",",json_decode($data["numbers"]));
                if(empty($numbers)){ $numbers = "-";}
                $string_json = str_replace("<numbers>",$numbers,$string_json); 
                
                $string_json = str_replace("<title>",$data["title"],$string_json); 
                    
                //5
                $n = $data['title'];        
                if(is_numeric($n)){            
                    $levels = [$n-10,$n-5,$n+5,$n+10,$n-2,$n-4,$n-6,$n-8];
                }else{
                    $levels = ["-","-","-","-","-","-","-","-"];
                }
                $string_json = str_replace("<min0>",$levels[0],$string_json);
                $string_json = str_replace("<min1>",$levels[1],$string_json);
                $string_json = str_replace("<min2>",$levels[2],$string_json);
                $string_json = str_replace("<min3>",$levels[3],$string_json);
                $string_json = str_replace("<min4>",$levels[4],$string_json);
                $string_json = str_replace("<min5>",$levels[5],$string_json);
                $string_json = str_replace("<min6>",$levels[6],$string_json);
                $string_json = str_replace("<min7>",$levels[7],$string_json);
                
                //6
                $string_json = str_replace("<lineid>",$event["source"]["userId"],$string_json);
                //7
                $string_json = str_replace("<login>",$image_url,$string_json);
                //8
                $string_json = str_replace("<user_manual>",$image_url,$string_json);
                //9
                $string_json = str_replace("<msgocrid>",$event["message"]["id"],$string_json);
                //10
                $string_json = str_replace("<staffgauge_name>",$ocr->staffgauge->addressgauge." [{$ocr->staffgauge->id}]" ,$string_json);
                
                $messages = [ json_decode($string_json, true) ]; 
                break;
            case "flex-location": 
                $location = $data["location"];
                $template_path = storage_path('../public/json/flexbubble-location-reply.json');   
                $string_json = file_get_contents($template_path);                
                //1
                $string_json = str_replace("<message_id>",$event["message"]["id"],$string_json);
                //2
                $string_json = str_replace("<address>",$data["address"],$string_json);
                //3
                $string_json = str_replace("<latitude>",$data["latitude"],$string_json);
                //4
                $string_json = str_replace("<longitude>",$data["longitude"],$string_json);
                //5
                $string_json = str_replace("<staffgauge_name>",$location->staffgauge->addressgauge." [{$location->staffgauge->id}]" ,$string_json);
                //6
                $string_json = str_replace("<created_at>",$location->created_at,$string_json);
                $messages = [ json_decode($string_json, true) ]; 
                break;
            case "quickReply": 
                $template_path = storage_path('../public/json/quick-reply.json');   
                $string_json = file_get_contents($template_path);
                $messages = [ json_decode($string_json, true) ]; 
                break;
            case "quickReply-only-location": 
                $template_path = storage_path('../public/json/quick-reply-only-location.json');   
                $string_json = file_get_contents($template_path);
                $messages = [ json_decode($string_json, true) ]; 
                break;
        }        

        $body = [
            "replyToken" => $event["replyToken"],
            "messages" => $messages,
        ];

        $opts = [
            'http' =>[
                'method'  => 'POST',
                'header'  => "Content-Type: application/json \r\n".
                            'Authorization: Bearer '.$channel_access_token,
                'content' => json_encode($body, JSON_UNESCAPED_UNICODE),
                //'timeout' => 60
            ]
        ];
                            
        $context  = stream_context_create($opts);
        //https://api-data.line.me/v2/bot/message/11914912908139/content
        $url = "https://api.line.me/v2/bot/message/reply";
        $result = file_get_contents($url, false, $context);

        //SAVE LOG
        $data = [
            "title" => "https://api.line.me/v2/bot/message/reply",
            "content" => json_encode($result, JSON_UNESCAPED_UNICODE),
        ];
        MyLog::create($data);
        return $result;

    }

    public function getImageFromLine($id, $channel_access_token){
        $opts = array('http' =>[
                'method'  => 'GET',
                //'header'  => "Content-Type: text/xml\r\n".
                'header' => 'Authorization: Bearer '.$channel_access_token,
                //'content' => $body,
                //'timeout' => 60
            ]
        );
                            
        $context  = stream_context_create($opts);
        //https://api-data.line.me/v2/bot/message/11914912908139/content
        $url = "https://api-data.line.me/v2/bot/message/{$id}/content";
        $result = file_get_contents($url, false, $context);
        return $result;
    }

    public function random_string($length) {
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'));
    
        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }
    
        return $key;
    }

    public function postbackHandler($event)
    {
        
        $queryString = $event['postback']['data'];
        parse_str($queryString, $new_data);

        // update title in ocr
        
        $ocr = Ocr::where('lineid', $new_data['lineid'])
                ->where('msgocrid', $new_data['msgocrid'])
                ->first();

        $ocr->title = $new_data['title'];        
        $ocr->save();        
        
        //REPLY
        //CREATE OCR
        $data = [
            "title" => $ocr->title,
            "content" => $ocr->content,
            "numbers" => $ocr->numbers,
            "photo" => $ocr->photo,
        ];
        //Ocr::create($data);

        //FINALLY REPLY TO USER       
        $data["ocr"] = $ocr;          
        $channel_access_token = $this->channel_access_token;
        $event['message'] = ['id' => ''.$new_data['msgocrid'] ];
        $this->replyToUser($data,$event, $channel_access_token,"flex-image");
        
        
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