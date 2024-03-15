<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
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


// Basic Routing
Route::get('/hello',function(){
    return 'Hello World';
});

Route::get('/world',function(){
    return 'World';
});

Route::get('/', function () {
    return ('welcome');
});

Route::get('/about', function () {
    return ('NIM    : 2214720254    Name    : Shofwah Kanaka ');
});

// Route Parameters
Route::get('/user/{name}',function($name){
    return 'My name is '.$name;
});

Route::get('/posts/{post}/comments/{comment}', 
function($postId, $commentId){
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/posts/{post}/comments/{comment}', 
function($postId, $commentId){
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/user/{name?}', function ($name='Shofwah'){
    return 'Nama saya '.$name;
});

Route::get('/article/{id}', function ($id){
    return 'Article Page with ID '.$id;
});

// Optional Parameters 

Route::get('/user/{name?}', function($name=null){
    return 'My name is ' .$name;
});

Route::get('/user/{name?}', function($name='John'){
    return 'My name is ' .$name;
});
// Route::get('/hello', [WelcomeController::class,'hello']);

// Route::get('/hello', [PageController::class,'hello']);
// Route::get('/index', [PageController::class,'index']);
// Route::get('/about', [PageController::class,'about']);
// Route::get('/articles/{$id}', [PageController::class,'articles']);


Route::get('/index', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{$id}', [ArticleController::class,'articles']);

Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index','show']);
Route::resource('photos',PhotoController::class)->except([
    'create','store','update','destroy']);