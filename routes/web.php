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

Route::get('/', function () {
	return view('home');
});

Route::get('gio-hang', function(){
	return view('shopping-cart');
})->name('cart');

Route::get('dang-nhap', function(){
	return view('login');
})->name('login');
Route::prefix('admin')->group(function(){
	//login admin
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/logout', 'Auth\AdminLoginController@ogout')->name('admin.logout');

    Route::get('/test', function(){
    	return view('admin/test');
    });
    
    Route::get('/', 'AdminController@index')->name('admin.dashboard');


	/* Các route về sản phẩm*/
	Route::prefix('san-pham')->group(function(){
		//Xử lý chức năng cho sản phẩm
		Route::get('/', 'ProductController@show')->name('show_product');
		//show form thêm sản phẩm
		Route::get('them-san-pham', function() {return view('admin\AddProduct');})->name('form_add_product');
		//xử lý thêm sản phẩm
		Route::post('them-san-pham', 'ProductController@store')->name('add_product');
		//show danh mục sản phẩm
		Route::get('them-danh-muc-san-pham', 'CatalogController@show')->name('show_catalog');
		Route::post('them-danh-muc-san-pham', 'CatalogController@store')->name('add_catalog');
		Route::post('sua-danh-muc-san-pham', 'CatalogController@edit')->name('edit_catalog');
		Route::post('update-danh-muc-san-pham', 'CatalogController@update')->name('update_catalog');
		Route::post('xoa-danh-muc-san-pham', 'CatalogController@delete')->name('delete_catalog');
		//Xử lý chức năng nhà cung câp
			Route::get('nha-cung-cap', 'SupplierController@show')->name('show_supplier');

			Route::post('them-moi-nha-cung-cap', 'SupplierController@store')->name('add_supplier');

			Route::post('sua-nha-cung-cap', 'SupplierController@edit')->name('edit_supplier');

			Route::post('update-nha-cung-cap', 'SupplierController@update')->name('update_supplier');

			Route::post('xoa-nha-cung-cap', 'SupplierController@delete')->name('delete_supplier');
		
	});

	/* Các route về người dùng, người quản trị*/
	Route::prefix('nguoi-dung')->group(function(){
		//show danh sách thành viên
		Route::get('khach-hang', 'UserController@show')->name('show_customer');

		Route::get('them-nguoi-quan-ly', function() { return view('admin\AddAdmin');})->name('form_add_admin');
		Route::post('them-nguoi-quan-ly', 'AdminController@store')->name('add_admin');
	});
});

Route::get('/checkout', 'CartController@getCheckOut');
Route::post('/checkout', 'CartController@postCheckOut');

Route::get('xem-gio-hang', function(){
	return view('shopping-cart');
})->name('shopping_cart');
Auth::routes();
