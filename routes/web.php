<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/RuangController', function () {
    return view('dashboard');
})->middleware(['auth'])->name(('dashboard'));

Route::get('news',[NewsController::class,'index'])->name('news');
