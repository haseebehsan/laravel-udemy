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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::group(['prefix' => 'pages'], function(){

    Route::get('/about/{name?}', function ($name = null) {
        return view('pages.about', ['name' => $name]);
    })->name('about');

    Route::get('/blog', function () {
        return view('pages.blog');
    })->name('blog');

    Route::get('/contact', function () {
        return view('pages.contact');
    })->name('contact');


});

Route::group(['prefix' => 'do'], function(){
   Route::get('/{action}/{name?}', [
       'uses' => 'NiceActionController@getNiceAction',
       'as' => 'niceaction'
       ]); 
       
       
    
    Route::post('/', [
        'uses' => 'NiceActionController@postNiceAction',
        'as' => 'benice'
        ]);
});




