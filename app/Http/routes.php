<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::resource('item', 'ItemController');

//    audio

    Route::get('/audio/create', function(){
        return view('audio.create');
    });

    Route::get('/audio/browse', function(){
        return view('audio.index');
    });

//    video

    Route::get('/video/create', function(){
        return view('video.create');
    });

    Route::get('/video/browse', function(){
        return view('video.index');
    });

//    image

    Route::get('/image/create', function(){
        return view('image.create');
    });

    Route::get('/image/browse', function(){
        return view('image.index');
    });

//    document

    Route::get('/document/create', function(){
        return view('document.create');
    });

    Route::get('/document/browse', function(){
        return view('document.index');
    });

//    collection

    Route::get('/collection/create', function(){
        return view('collection.create');
    });

    Route::get('/collection/browse', function(){
        return view('collection.index');
    });

    Route::get('/collection/dashboard', function(){
        return view('collection.dashboard');
    });

});
