<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\subscriptionpolicyController;
use  App\Http\Controllers;







Route::get('/', function () {
    return view('index');
});

Route::get('/contact', 'App\Http\Controllers\ContactController@contact')->name('contact');
Route::get('/downpdf', 'App\Http\Controllers\downController@downpdf')->name('downpdf');
Route::post('/contact', 'App\Http\Controllers\ContactController@contactPost')->name('contactPost');
Route::get('/terms', 'App\Http\Controllers\termsController@terms')->name('terms');

Route::get('/policies', 'App\Http\Controllers\policiesController@policies')->name('policies');

Route::get('/subscriptionpolicy', 'App\Http\Controllers\subscriptionpolicyController@subscriptionpolicy')->name('subscriptionpolicy');
Route::get('/moneybackpolicy', 'App\Http\Controllers\moneybackpolicyController@moneybackpolicy')->name('moneybackpolicy');

//----pdf and email route-----

Route::get('/pdfdown',function(){
	return view('pdflink');
});


Route::post('/attachmail/send', 'App\Http\Controllers\emailController@send')->name('attachmail/send');
Route::get('/attachmail/download', 'App\Http\Controllers\emailController@download')->name('attachmail/download');

