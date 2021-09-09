<?php


use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\UserController;
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

Route::prefix('admin')->middleware(['auth', CheckAdmin::class])->group(function (){
    require_once __DIR__ . '/admin.php';
});

Route::get('/', function () {
    return view('clients.index');
})->name('index');
Route::get('/list', function () {
    return view('clients.list');
});
Route::get('/404', function () {
    return view('clients.404');
});
Route::get('/blog', function () {
    return view('clients.blog');
});
Route::get('/contact', function () {
    return view('clients.contact');
});
Route::get('/about', function () {
    return view('clients.abouts');
});
Route::get('/cart', function () {
    return view('clients.shopcart');
});
Route::get('/shop-details', function () {
    return view('clients.shop-details');
});


Route::post('login',[EntryController::class,'login'])->name('login');
Route::get('logout',[EntryController::class,'logout'])->name('logout');

Route::get('/form',[UserController::class,'create']);
Route::post('/form',[UserController::class,'store']);


