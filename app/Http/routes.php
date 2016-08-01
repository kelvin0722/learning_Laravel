<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
 
 //Index page/homepage
Route::get('/', function () {return view('index');});

Route::get('/view','RecordsController@showdb');
//header views
Route::get('/about', 'RecordsController@showAll');

Route::get('/contact','RecordsController@showContact');

Route::post('/insert','RecordsController@store');


Route::get('/new','RecordsController@showNew');


Route::get('contact','RecordsController@contact');
Route::get('about','RecordsController@about');


Route::get('about/{link}','RecordsController@redirect($link)');


/*
//function to show how to pass values
Route::get('about/{link}',function($link){

    return "Welcome to {$link} laravel";
});
*/