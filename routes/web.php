<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/home', [PageController::class,'home']
)->name('home');
Route::get('/product', [PageController::class,'product']
)->name('product');
Route::get('/team',[PageController::class,'team'])->name('team');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/profile',[PageController::class,'profile'])->name('profile');

