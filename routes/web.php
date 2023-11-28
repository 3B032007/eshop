<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartItemController;

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

Route::get('Products',[ProductController::class,'index'])->name("products.index");
Route::get('Products/{Product}',[ProductController::class,'show'])->name("products.show");
Route::get('Products/create',[ProductController::class,'create'])->name("products.create");
Route::post('Products',[ProductController::class,'store'])->name("products.store");
Route::get('Products/{Product}/edit',[ProductController::class,'edit'])->name("products.edit");
Route::patch('Products/{Product}',[ProductController::class,'update'])->name("products.update");
Route::delete('Products/{Product}',[ProductController::class,'destroy'])->name("products.destroy");

Route::get('CartItems',[CartitemController::class,'index'])->name("cart_items.index");
Route::get('CartItems/{CartItem}',[CartitemController::class,'show'])->name("cart_items.show");
Route::get('CartItems/create',[CartitemController::class,'create'])->name("cart_items.create");
Route::post('CartItems',[CartitemController::class,'store'])->name("cart_items.store");
Route::get('CartItems/{CartItem}/edit',[CartitemController::class,'edit'])->name("cart_items.edit");
Route::patch('CartItems/{CartItem}',[CartitemController::class,'update'])->name("cart_items.update");
Route::delete('CartItems/{CartItem}',[CartitemController::class,'destroy'])->name("cart_items.destroy");

Route::resource('CartItems', CartItemController::class);
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
