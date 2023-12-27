<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InstructionController;
use App\Http\Controllers\UserController;

Route::middleware('guest')->group(function(){
    Route::get('/create',[UserController::class,'create'])->name('create');
    Route::post('/create',[UserController::class,'store'])->name('store');
    Route::get('/login',[UserController::class,'login'])->name('login');
    Route::post('/signup',[UserController::class,'signup'])->name('signup');
});

Route::get('/',[Controller::class,'home'])->name('home');
Route::get('/info',[Controller::class,'info'])->name('info');
Route::get('/agreement',[Controller::class,'agreement'])->name('agreement');
Route::get('/instructions',[InstructionController::class,'instruction'])->name('instructions');
Route::get('/instructions/user',[InstructionController::class,'user'])->name('user');

Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::get('/profile',[UserController::class,'index'])->name('profile.index');
Route::get('/profile/create',[UserController::class,'create'])->name('profile.create');
Route::post('/profile',[UserController::class,'store'])->name('profile.store');
Route::get('/profile/{id}',[UserController::class,'show'])->name('profile.show');
Route::get('/profile/{id}/edit',[UserController::class,'edit'])->name('profile.edit');
Route::patch('/profile/{id}',[UserController::class,'update'])->name('profile.update');
Route::delete('/profile/{id}',[UserController::class,'destroy'])->name('profile.destroy');
