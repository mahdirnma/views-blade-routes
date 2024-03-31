<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/a',function (){
   return view('about');
});
Route::get('/b/{name}',function (string $name){
    return view('show_name',[
        "name"=>$name,
        "title"=>"my title"
    ]);
});
Route::get('/c/{check}',function (string $check){
    return view('check',[
        "check"=>$check
    ]);
});
Route::get('/posts',function (){
    $posts=[
        ["title"=>"post1","text"=>"lorem text1"],
        ["title"=>"post2","text"=>"lorem text2"],
        ["title"=>"post3","text"=>"lorem text3"]
    ];
    return view('post',[
        "posts"=>$posts
    ]);
});
