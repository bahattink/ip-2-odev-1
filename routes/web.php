<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\ogrenci;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/hakkimizda', [PageController::class, 'hakkimizda']);
Route::get('/bolumlerimiz', [PageController::class, 'bolumlerimiz']);
Route::get('/bize-ulasin', [ContactController::class, 'index']);
Route::post('/bize-ulasin', [ContactController::class, 'store']);
Route::get('/haberler', [NewsController::class, 'index']);
/*
Route::get('/basvuru', [HRController::class, 'index']);
Route::post('/basvuru', [HRController::class, 'store']);
*/
Route::get('/basvuru', [\App\Http\Controllers\BasvuruFormuController::class, 'index']);
Route::post('/basvuru', [\App\Http\Controllers\BasvuruFormuController::class, 'store']);

Route::get('/ogrencilerimiz', [\App\Http\Controllers\StudentController::class, 'index'])->name('student.index');
Route::get('/ogrencilerimiz/ekle', [\App\Http\Controllers\StudentController::class, 'create']);
Route::post('/ogrencilerimiz/ekle', [\App\Http\Controllers\StudentController::class, 'store']);


