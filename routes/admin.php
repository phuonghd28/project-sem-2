<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ListOrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return redirect()->route('listUser');
});
Route::prefix('orders')->group(function (){
    Route::get('', [ListOrderController::class, 'list'])->name('listOrder');
    Route::post('delete/{id}',[ListOrderController::class,'delete'])->name('deleteOrder');
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

Route::prefix('products')->group(function () {
    Route::get('create', [ProductController::class, 'create'])->name('createProduct');
    Route::post('create', [ProductController::class, 'store'])->name('storeProduct');
    Route::get('',[ProductController::class, 'list'])->name('listProduct');
    Route::get('edit/{id}',[ProductController::class, 'edit'])->name('editProduct');
    Route::put('edit/{id}',[ProductController::class, 'save'])->name('saveProduct');
    Route::get('delete/{id}',[ProductController::class, 'delete'])->name('deleteProduct');
});
