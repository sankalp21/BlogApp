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
//Route::get('home','PageControler@index');
Route::get('service','PageControler@service');
Route::get('about','PageControler@about');

Route::resource('posts','PostsController');

Route::resource('posts/comments','CommentController');


//Route::get('sayhello','HelloController@index');
//
//Route::get('sayhello/{fname}/{lname}','HelloController@parameter');
//
//Route::get('demo/{price}', function($price){
//    echo $price;
//})->where(['price'=>"[0-9]+"]);
//
//Route::get('pricefilter/{max}/{min?}', function($max,$min='0'){
//    echo "max= ".$max." min= ".$min;
//});
//
//Route::get('/', function () {
//    return view('welcome');
//})->middleware('test');

Route::get('/', 'PageControler@index');

Auth::routes();

Route::get('dashboard', 'DashBoardController@index');
