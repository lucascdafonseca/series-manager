<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SeriesController::class, 'index']);
Route::get('/series', [SeriesController::class, 'index'])->name('series.index');
Route::get('/series/create', [SeriesController::class, 'create']);
Route::post('/series/store', [SeriesController::class, 'store']);
Route::delete('/series/delete/{id}',[SeriesController::class, 'delete'])->name('series.delete');