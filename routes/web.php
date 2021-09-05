<?php


use App\Http\Controllers\ProductController;
use App\Http\Controllers\EntryController;
use App\Http\Middleware\CheckAdmin;
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
//->middleware(['auth', CheckAdmin::class])
Route::prefix('admin')->group(function (){
    require_once __DIR__ . '/admin.php';
});

Route::get('/', function () {
    return view('clients.index');
})->name('index');
Route::get('/list', function () {
    return view('clients.list');
});
//Route::get('/form-user', function () {
//    return view('admin.users.form');
//});
Route::get('/cart', function () {
    return view('clients.shopcart');
});

Route::post('login',[EntryController::class,'login'])->name('login');
Route::get('logout',[EntryController::class,'logout'])->name('logout');
Route::get('/form',[\App\Http\Controllers\UserController::class,'create']);
Route::post('/form',[\App\Http\Controllers\UserController::class,'store']);


