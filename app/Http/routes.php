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
    return view('welcome');
});
Route::get('test_mail',function(){
	\Mail::raw('Laravel with Mailgun is easy!', function($message) {
		$message->to('rameshsrii@yopmail.com')->subject('This is a demo!');
	});
});