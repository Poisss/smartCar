<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InstructionController;
use App\Http\Controllers\UserController;

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
Route::get('/',[Controller::class,'home'])->name('home');
Route::get('/info',[Controller::class,'info'])->name('info');
Route::get('/agreement',[Controller::class,'agreement'])->name('agreement');
Route::get('/instructions',[InstructionController::class,'instruction'])->name('instructions');
Route::get('/instructions/user',[InstructionController::class,'user'])->name('user');

Route::get('/create',[UserController::class,'create'])->name('create');
Route::post('/create',[UserController::class,'store'])->name('store');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/signup',[UserController::class,'signup'])->name('signup');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
