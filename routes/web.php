<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/', function () {
    return view('index');
});
*/
Route::get('/', 'WeatherController@show_latest');
Route::get('/test', 'WeatherController@show_test');
Route::resource('weather', 'WeatherController');
Route::resource('ocr', 'OcrController');
Route::resource('profile', 'ProfileController');
Route::resource('dashboard', 'DashboardController');
Route::resource('location', 'LocationController');
Route::resource('staffgauge', 'StaffgaugeController');
Route::post('/ocr/lineoa', 'OcrController@store2');
Route::resource('log-ocr', 'LogOcrController');
Route::resource('my-log-ocr', 'MyLogOcrController');


Route::get('/test-script', function (){
    return view('weather/test-script');
});
Route::get('/fetch', function (){
    
    $homepage = getDataFromWeatherBangkok();
    echo $homepage;
    //echo $homepage;
    //return view('weather/test-script');
});

function getDataFromWeatherBangkok(){
    $homepage = file_get_contents('http://weather.bangkok.go.th/radar/RadarAnimation.aspx');
    $homepage = explode("span",$homepage)[1];
    $homepage = explode(">",$homepage)[1];
    $homepage = explode("<",$homepage)[0];
    return $homepage;
}
Route::resource('my-log', 'MyLogController');