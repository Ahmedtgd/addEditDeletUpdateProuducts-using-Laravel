<?php

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
use App\Product;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact/{id}/{name}',"adminController@contact");

Route::get('/product',"ProductController@VeiwProduct"); //HTTP/controlres/productcontrolers ln 9 +app/product.php ln 9
Route::post('add',"ProductController@AddProduct");
Route::get('add',"ProductController@AddProduct");
Route::get('add/{id}',function ($id){
$product=Product::find($id);
$product->delete();
return redirect("product");
});
Route::get('edit/{id}',"ProductController@EditProduct");
Route::post('edit/{id}',"ProductController@EditProduct");

