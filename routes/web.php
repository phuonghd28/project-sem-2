<?php


use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EntryController;

use App\Http\Controllers\ShoppingCartController;

use App\Http\Controllers\UploadImageController;
use App\Http\Middleware\CheckAdmin;
use App\Models\Product;
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

Route::get('/products', function () {
    $data = Product::all();
    return view('clients.list', ['products' => $data]);
})->name('products');



Route::post('login',[EntryController::class,'login'])->name('login');
Route::get('logout',[EntryController::class,'logout'])->name('logout');
Route::get('register',[EntryController::class,'register'])->name('register');

Route::get('add/{id}', [ShoppingCartController::class, 'add']);
Route::get('listCart', [ShoppingCartController::class, 'show'])->name('listCart');
Route::get('remove/{rowId}', [ShoppingCartController::class, 'remove']);
Route::get('update', [ShoppingCartController::class, 'update']);
Route::get('destroy', [ShoppingCartController::class, 'destroy']);
Route::post('orders/save', [OrderController::class, 'save'])->name('saveOrder');
Route::get('orders/{id}', [OrderController::class, 'detail'])->name('detailOrder');

Route::post('/paypal/create-payment', [PaypalController::class, 'createPayment']);
Route::post('/paypal/execute-payment', [PaypalController::class, 'executePayment']);
Route::get('/api/ward/{id}', [ShoppingCartController::class, 'api']);

