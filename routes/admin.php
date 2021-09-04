<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/categories/create', [CategoryController::class, 'create']);
Route::post('/categories/create', [CategoryController::class, 'store']);
Route::get('/categories', [CategoryController::class, 'list']);
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit']);
Route::post('/categories/edit{id}/', [CategoryController::class, 'save']);
