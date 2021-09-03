<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('admin.master');
});

Route::get('/users/table', function () {
   return view('admin.users.table');
});
Route::get('/form', function () {
    return view('admin.users.form');
});

Route::get('/users/create',[UserController::class,'create']);
Route::post('/users/create',[UserController::class,'store']);
Route::get('/users',[UserController::class,'list']);
Route::get('/users/edit/{id}', [UserController::class, 'edit']);
Route::post('/users/edit/{id}', [UserController::class, 'save']);
Route::get('/users/delete/{id}', [UserController::class, 'delete']);

