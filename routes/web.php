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

Route::get('/', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function(){
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');

	// // login admin
	// Route::get('/login', 'Auth\AdminLoginController@getlogin')->name('admin.login');
	// Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('logout', 'Auth\LoginController@logout')->name('admin.logout');

	/* Các route về sản phẩm*/
	Route::group(
		['prefix' => 'san-pham',
		'middleware'=> 'admin'
	], function() {
		Route::get('/', 'ProductController@show')->name('show_product');
		Route::get('them-san-pham', 'ProductController@getAddProduct')->name('form_add_product');
		Route::post('them-san-pham', 'ProductController@store')->name('add_product');
		Route::get('sua-san-pham/{id}','ProductController@edit')->name('edit.product');
		Route::post('xoa-san-pham', 'ProductController@delete')->name('delete.product');
		
		//xủ lý chức năng danh mục sản phẩm
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
		Route::post('xoa-nha-cung-cap', 'SupplierController@delete')->name('delete.supplier');
		
	});

	/* Các route về người dùng, người quản trị*/
	Route::group(
		['prefix' => 'nguoi-dung',
		'middleware'=> 'admin'
	], function() {
		Route::get('khach-hang', 'UserController@show')->name('show_customer');
		Route::post('them-khach-hang', 'UserController@store')->name('add.user');
		Route::post('sua-khach-hang', 'UserController@edit')->name('edit.user');
		Route::post('update-khach-hang', 'UserController@update')->name('update.user');
		Route::post('xóa-khach-hang', 'UserController@delete')->name('delete.user');

		//Xử lý chức năng quản trị viên
		Route::get('/quan-tri-vien', 'AdminController@show')->name('admin.show'); 
		Route::get('them-nguoi-quan-ly', function() { return view('admin\AddAdmin');})->name('form_add_admin');
		Route::post('them-nguoi-quan-ly', 'AdminController@store')->name('add_admin');

	});

});
// 	Route::prefix('nguoi-dung')->group(function(){
// 		//Xử lý chức năng khách hàng (user)
// 		Route::get('khach-hang', 'UserController@show')->name('show_customer');
// 		Route::post('them-khach-hang', 'UserController@store')->name('add.user');
// 		Route::post('sua-khach-hang', 'UserController@edit')->name('edit.user');
// 		Route::post('update-khach-hang', 'UserController@update')->name('update.user');
// 		Route::post('xóa-khach-hang', 'UserController@delete')->name('delete.user');

// 		//Xử lý chức năng quản trị viên
// 		Route::get('them-nguoi-quan-ly', function() { return view('admin\AddAdmin');})->name('form_add_admin');
// 		Route::post('them-nguoi-quan-ly', 'AdminController@store')->name('add_admin');
// 	});
// })->middleware('admin');

Route::get('/checkout', 'CartController@getCheckOut')->name('get.checkout');
Route::post('/checkout', 'CartController@postCheckOut')->name('post.checkout');
Route::get('test', function(){
	return view ('detail');	
});
Route::post('thong-tin-san-pham', 'HomeController@homeShowProduct')->name('home.show.product');
Route::get('danh-muc/{slug}', 'HomeController@getProductByCatalog')->name('home.show.product.by.catalog');
Route::get('nha-cung-cap/{slug}', 'HomeController@getProductBySupplier')->name('home.show.product.by.supplier');
Route::get('/cart', 'CartController@cart')->name('shopping.cart');
Route::post('/cart-add', 'CartController@addToCart')->name('add.to.cart');
Route::post('/qty-add', 'CartController@addqty')->name('add.qty');
Route::post('/qty-minus', 'CartController@minusqty')->name('minus.qty');

Route::post('/cart-remove/', 'CartController@cart_remove')->name('remove.cart');
Auth::routes();
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('get.user.login');
Route::post('/login', 'Auth\LoginController@login')->name('post.user.login');
Route::get('/logout', 'Auth\LoginController@logout')->name('get.user.logout');
Route::get('/home', 'HomeController@index');
