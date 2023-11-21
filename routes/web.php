<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::resource('Products', ProductController::class)->only(['index', 'show', 'store','update','destroy']);

Route::resource('Products', ProductController::class);

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



































