<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class,'home']
)->name('home');
Route::get('/product', [PageController::class,'product']
)->name('product');
Route::get('/team',[PageController::class,'team'])->name('team');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/profile',[PageController::class,'profile'])->name('profile');
//student rout
Route::get('/students/create',[StudentController::class,'create'])->name('student.create');
Route::post('/student/create', [StudentController::class,'createSubmit'])->name('student.submit');
Route::get('/student/list', [StudentController::class,'list'])->name('student.list');
Route::get('/student/edit/{id}',[StudentController::class,'edit']);
