<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

################### Article Route ####################
Route::group(['middleware'=>'auth:'],function (){
    Route::get('/home', 'MainPagesController@index')->name('home');
    ### Create Articals
    Route::get('/writearticle', 'MainPagesController@writearticle')->name('write_article');
    Route::post('/storearticle', 'MainPagesController@storearticle')->name('store_article');
    ### Show  Articals
    Route::get('/getarticle', 'MainPagesController@getarticle')->name('getarticle');
});



