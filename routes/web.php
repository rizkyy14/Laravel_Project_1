<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CulinaryController;
use App\Http\Controllers\AutomotiveController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/RuangController', function () {
    return view('dashboard');
})->middleware(['auth'])->name(('dashboard'));

Route::get('news',[NewsController::class,'index'])->name('news');
Route::get('profiles',[ProfileController::class,'index'])->name('profiles');
Route::get('categories',[CategoriesController::class,'index'])->name('categories');
Route::get('culinary',[CulinaryController::class,'index'])->name('culinary');
Route::get('automotive',[AutomotiveController::class,'index'])->name('automotive');
