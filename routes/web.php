<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\teacherController;

use App\Models\student;
use App\Models\teacher;

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

// Route::get('/', function () {
//     return view('middle3');
// });



// // route::view("helloview","views");

// Route::get("user/{id}",[UserController::class, 'show']);
// route::view ("users","user");
// route::view ("about","about");



// route::view("view", "views");

// route::view('middle','middle3');

// route::get("laras",[sohailController::class,'getData']);

// route::get("nothing",[UserController::class,'index']);
// route::any("sohail",[reqController::class,'reqMethod']);
// route::view("login",'views');
// route::view("hello",'Profile');

// Route::get('/logout', function () {
//     if(session()->has ('user'))
//     {
//         session()->pull('user',null);
//     }
//    return redirect('login');
// });

// route::view("loca",'local');

// Route::get('/local/{lang}', function ($lang) {
//     App::setlocale($lang);
//     return view('local');
// });

// route::get('listo',[listController::class,'list']);
// route::delete('delete/{username}',[listController::class,'delete']);
// Route::view('/',"welcome");
Route::get('welcome',[StudentController::class,"welcome"]);

// Route::get('/create',function(){
//     return view('/create');
// });
Route::view('create',"create");
Route::post('create',[StudentController::class,"addStudent"]);
Route::get('delete/{id}',[StudentController::class,"delete"]);
Route::get('edit/{id}',[StudentController::class,"showData"]);
Route::post('edit',[StudentController::class,"update"]);
Route::get('update',[StudentController::class,"Operations"]);

Route::view('tech','teacherslist');
Route::get('tech',[teacherController::class,"index"]);

Route::view('Create',"createtech");
Route::post('creat',[teacherController::class,"create"]);