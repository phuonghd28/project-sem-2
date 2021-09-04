<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return redirect()->route('listUser');
});

Route::prefix('users')->group(function(){
    Route::get('create',[UserController::class,'create'])->name('createUser');
    Route::post('create',[UserController::class,'store'])->name('storeUser');
    Route::get('',[UserController::class,'list'])->name('listUser');
    Route::get('edit/{id}', [UserController::class, 'edit'])->name('editUser');
    Route::put('edit/{id}', [UserController::class, 'save'])->name('saveUser');
    Route::get('delete/{id}', [UserController::class, 'delete'])->name('deleteUser');
});

Route::prefix('categories')->group(function () {
    Route::get('create', [CategoryController::class, 'create'])->name('createCategory');
    Route::post('create', [CategoryController::class, 'store'])->name('storeCategory');
    Route::get('', [CategoryController::class, 'list'])->name('listCategory');
    Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('editCategory');
    Route::put('edit/{id}', [CategoryController::class, 'save'])->name('saveCategory');
    Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('deleteCategory');
});

