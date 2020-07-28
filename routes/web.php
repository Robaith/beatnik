<?php



Route::get('/', function () {return view('pages.index');});
//auth & user
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password-change', 'HomeController@changePassword')->name('password.change');
Route::post('/password-update', 'HomeController@updatePassword')->name('password.update');
Route::get('/user/logout', 'HomeController@Logout')->name('user.logout');

//admin=======
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
        // Password Reset Routes...
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update'); 
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');


/*                              ADMIN ROUTES                                */
//Category routes :
Route::get('admin/categories', 'Admin\Category\CategoryController@index')->name('categories');
Route::post('admin/category/store', 'Admin\Category\CategoryController@store')->name('store.category');
Route::get('admin/category/delete/{id}', 'Admin\Category\CategoryController@destroy')->name('destroy.category');
Route::get('admin/category/edit/{id}', 'Admin\Category\CategoryController@edit')->name('edit.category');
Route::post('admin/category/update/{id}', 'Admin\Category\CategoryController@update')->name('update.category');

//news routes :
Route::get('admin/news', 'Admin\NewsController@index')->name('news');
Route::post('admin/news/store', 'Admin\NewsController@store')->name('store.news');
Route::get('admin/news/delete/{id}', 'Admin\NewsController@destroy')->name('destroy.news');
Route::get('admin/news/edit/{id}', 'Admin\NewsController@edit')->name('edit.news');
Route::post('admin/news/update/{id}', 'Admin\NewsController@update')->name('update.news');

//Product routes :
Route::get('admin/products', 'Admin\ProductController@index')->name('products');
Route::get('admin/product/create', 'Admin\ProductController@create')->name('product.create');
Route::post('admin/product/store', 'Admin\ProductController@store')->name('store.product');
Route::get('admin/product/delete/{id}', 'Admin\ProductController@destroy')->name('destroy.product');
Route::get('admin/product/edit/{id}', 'Admin\ProductController@edit')->name('edit.product');
Route::post('admin/product/update/{id}', 'Admin\ProductController@update')->name('update.product');


