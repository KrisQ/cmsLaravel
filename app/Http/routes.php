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

Route::get('/about', function(){
  return "Hi I am about page";
});

Route::get ('/contact', function(){
  return "Contact page";
});

Route::get('/post/{id}/{name}', function($id, $name){
  return "this is post #".$id." and name is ".$name;
});

Route::get('/admin/posts', array('as' => 'admin.home',  function(){
  $url = route('admin.home');
  return "This is url is ".$url;
}));

//Route group
Route::group(['middleware'=>['web']], function(){

});
