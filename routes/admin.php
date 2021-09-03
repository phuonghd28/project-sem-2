<?php

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
