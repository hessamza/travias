<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('test','TestController@index');*/




Route::get('geonames/{fcodeName}',function($fcodeName){
$client=new \Guzzle\Service\Client('https://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=resclient');
    $response=$client->get("geonames/$fcodeName")->send();
    dd($response->json());
});


Route::any('/','HomeController@Index');
Route::resource('test', 'TestController');