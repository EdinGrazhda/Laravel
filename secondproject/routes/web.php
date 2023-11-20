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

Route::get('/post/{id}',function($id){
    return "id number is :$id";
});
Route::get('user/{name?}',function($name=null){
    return $name;
});

Route::get('admin/{name?}',function($name='Arianit'){
    return $name;
});
Route::get('user/{name?}',function($name=null){
    return $name;
})->where('name','[a-zA-ZeE]+');

Route::get('user1/{id?}',function($id=null){
    return "id is :".$id;
})->where('id','[0-9]+');

Route::get('user2/{id?}/{name?}',function($id,$name){
    return "id is :".$id . " name is :".$name;
})->where('id','[0-9]+','name','[a-zA-ZeE]+');