<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticControllers;
use App\Http\Controllers\ComputerControllers;

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

Route::get('/', [StaticControllers::class , 'index'])->name('home.index');
Route::get('/Contact', [StaticControllers::class , 'contact'])->name('home.contact');
Route::get('/About', [StaticControllers::class , 'about'])->name('home.about');
Route::get('/Policy', [StaticControllers::class , 'policy'])->name('home.policy');
Route::get('/Test', [StaticControllers::class , 'test'])->name('home.test');

Route::resource('/computers' , ComputerControllers::class );