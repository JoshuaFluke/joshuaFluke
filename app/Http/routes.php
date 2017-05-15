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

//Route::get('/', function () {
//    return view('welcome');
//
//});
//
//Route::get('/about', function () {
//    //return my bio
//    return "Hi about page";
//
//});
//
//Route::get('/contact', function () {
//    return "Get in touch!";
//
//});
//
//Route::get('/post/{id}', function ($id){
//
//    return "This is post number" . $id;
//});
//
//Route::get('admin/posts/example',array('as'=>'admin.home',function (){
//
//
//    //creates a nickname to use
//    //php artisan route:list in cli to see
//    $url = route('admin.home');
//
//    return "this url is" . $url;
//
//}));


//goes to index function in controller
Route::get('/post/{id}', 'PostsController@index');