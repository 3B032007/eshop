<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Route::resource('Products', ProductController::class)->only(['index', 'show', 'store','update','destroy']);

Route::get('products',[ProductController::class,'index'])->name("products.index");
Route::get('products/{product}',[ProductController::class,'show'])->name("products.show");
Route::get('products/create',[ProductController::class,'create'])->name("products.create");
Route::post('products',[ProductController::class,'store'])->name("products.store");
Route::get('products/{product}/edit',[ProductController::class,'edit'])->name("products.edit");
Route::patch('products/{product}',[ProductController::class,'update'])->name("products.update");
Route::delete('products/{product}',[ProductController::class,'destroy'])->name("products.destroy");

Route::get('cartItems',[CartitemController::class,'index'])->name("cart_items.index");
Route::get('cartItems/{cartItem}',[CartitemController::class,'show'])->name("cart_items.show");
Route::get('cartItems/create',[CartitemController::class,'create'])->name("cart_items.create");
Route::post('cartItems',[CartitemController::class,'store'])->name("cart_items.store");
Route::get('cartItems/{cartItem}/edit',[CartitemController::class,'edit'])->name("cart_items.edit");
Route::patch('cartItems/{cartItem}',[CartitemController::class,'update'])->name("cart_items.update");
Route::delete('cartItems/{cartItem}',[CartitemController::class,'destroy'])->name("cart_items.destroy");

Route::get('orders',[OrderController::class,'index'])->name("orders.index");
Route::get('orders/{order}',[OrderController::class,'show'])->name("orders.show");
Route::get('orders/create',[OrderController::class,'create'])->name("orders.create");
Route::post('orders',[OrderController::class,'store'])->name("orders.store");
Route::get('orders/{order}/edit',[OrderController::class,'edit'])->name("orders.edit");
Route::patch('orders/{order}',[OrderController::class,'update'])->name("orders.update");
Route::delete('orders/{order}',[OrderController::class,'destroy'])->name("orders.destroy");

Route::resource('cartItems', CartItemController::class);
//product.index URL:/Products
//              HTTP方法:GET
//              串接的控制器&方法:ProductController@index

//product.show URL:Products/{Product}
//              HTTP方法:GET
//              串接的控制器&方法:ProductController@show

//product.create URL:Products/create
//              HTTP方法:GET
//              串接的控制器&方法:ProductController@create

//product.store URL:/Products
//              HTTP方法:POST
//              串接的控制器&方法:ProductController@store

//product.edit URL:Products/{Product}/edit
//              HTTP方法:get
//              串接的控制器&方法:ProductController@edit

//product.update URL:Products/{Product}
//              HTTP方法:PATCH
//              串接的控制器&方法:ProductController@update

//product.destroy URL:Products/{Product}
//              HTTP方法:DELETE
//              串接的控制器&方法:ProductController@destroy


//上述七個Products路由應該有的作用
//product.index    顯示資源清單。

//product.show     顯示指定資源。

//product.create   顯示用於建立新資源的表單。

//product.store    將新建立的資源儲存在儲存庫中。

//product.edit     顯示用於編輯指定資源的表單。

//product.update   更新儲存中的指定資源。

//product.destroy  顯示資源清單。
