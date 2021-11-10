<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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
Route::get('/',[StudentController::class,'index']); //index route
Route::get('/students',[StudentController::class,'index']); // index
Route::get('/students/create',[StudentController::class,'create']); // create route
Route::post('/students/store',[StudentController::class,'store']); 
Route::get('students/show/{id}',[StudentController::class,'show']);
Route::get('students/edit/{id}',[StudentController::class,'edit']);
Route::put('students/update/{id}',[StudentController::class,'update']);
Route::get('students/delete/{id}',[StudentController::class,'destroy']);