<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Weather;

class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $weathers = Weather::all();
        return response()->json($weathers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $report = $requestData['report_generate'];
        $exist = Weather::where('report_generate' , $report)->exists();
        if($exist){
            return response()->json(["data"=>"Existing"]);
        }
        if ($request->hasFile('Outfalls')) {
            $requestData['Outfalls'] = $request->file('Outfalls')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('kmls')) {
            $requestData['kmls'] = $request->file('kmls')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('profiles')) {
            $requestData['profiles'] = $request->file('profiles')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('profiles2')) {
            $requestData['profiles2'] = $request->file('profiles2')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('profiles3')) {
            $requestData['profiles3'] = $request->file('profiles3')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('profiles4')) {
            $requestData['profiles4'] = $request->file('profiles4')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('profiles5')) {
            $requestData['profiles5'] = $request->file('profiles5')
                ->store('uploads', 'public');
        }
        $requestData['detail'] = json_encode($requestData, JSON_UNESCAPED_UNICODE);

        $report = $requestData['report_generate'];
        $weather_bangkok = $this->getDataFromWeatherBangkok();
        $requestData['weather_bangkok'] = $weather_bangkok;
        $checkreport = Weather::firstOrCreate(['report_generate' => $report], $requestData);

        //Weather::create($requestData);
        
        //ถ้าไม่พบคำว่า "ไม่" หมายถึง มีฝนตก ให้ push message หา subscribed user 
        if( strpos($weather_bangkok , "ไม่") != false )
        {
            //echo "found !!! ";

            //หา subscribed users จาก profile

            //loop and push message
        }

        return response()->json($requestData);
    }

    public function getDataFromWeatherBangkok(){
        $homepage = file_get_contents('http://weather.bangkok.go.th/radar/RadarAnimation.aspx');
        $homepage = explode("span",$homepage)[1];
        $homepage = explode(">",$homepage)[1];
        $homepage = explode("<",$homepage)[0];
        return $homepage;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $weather = Weather::findOrFail($id);
        return response()->json($weather);
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
