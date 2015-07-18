<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);

Route::get('/about-us', ['as' => 'about', 'uses' => 'HomeController@about']);

Route::get('/contact-us', ['as' => 'contact', 'uses' => 'HomeController@contact']);

Route::post('/contact-us', ['as' => 'contactAction', 'uses' => 'AjaxController@contact']);

Route::get('/books', ['as' => 'books', 'uses' => 'HomeController@books']);

Route::get('/book/{book_id}', ['as' => 'book', 'uses' => 'HomeController@book']);

Route::get('/admin', ['as' => 'admin', 'uses' => 'Admin\AdminController@index']);

Route::get('/admin/logout', ['as' => 'admin_logout', 'uses' => 'Admin\AdminController@logout']);

Route::get('/admin/dashboard', ['as' => 'admin_dashboard', 'uses' => 'Admin\AdminController@dashboard']);

Route::get('/admin/category/dashboard', ['as' => 'admin_list_category', 'uses' => 'Admin\AdminController@listCategory']);

Route::get('/admin/category/add', ['as' => 'admin_add_new_category', 'uses' => 'Admin\AdminController@addCategory']);

Route::post('/admin/category/add', ['as' => 'admin_create_new_category', 'uses' => 'Admin\AdminController@createCategory']);

Route::get('/admin/category/add/{category_id}', ['as' => 'admin_edit_category', 'uses' => 'Admin\AdminController@addCategory']);

Route::get('/admin/category/delete/{category_id}', ['as' => 'admin_delete_category', 'uses' => 'Admin\AdminController@deleteCategory']);

Route::get('/admin/book/dashboard', ['as' => 'admin_list_book', 'uses' => 'Admin\AdminController@listBook']);

Route::get('/admin/book/add', ['as' => 'admin_add_new_book', 'uses' => 'Admin\AdminController@addBook']);

Route::post('/admin/book/add', ['as' => 'admin_create_new_book', 'uses' => 'Admin\AdminController@createBook']);

Route::get('/admin/book/add/{book_id}', ['as' => 'admin_edit_book', 'uses' => 'Admin\AdminController@addBook']);

Route::get('/admin/book/delete/{book_id}', ['as' => 'admin_delete_book', 'uses' => 'Admin\AdminController@deleteBook']);

Route::get('/admin/book_type/dashboard', ['as' => 'admin_list_book_type', 'uses' => 'Admin\AdminController@listBookType']);

Route::get('/admin/book_type/add', ['as' => 'admin_add_new_book_type', 'uses' => 'Admin\AdminController@addBookType']);

Route::post('/admin/book_type/add', ['as' => 'admin_create_new_book_type', 'uses' => 'Admin\AdminController@createBookType']);

Route::get('/admin/book_type/add/{book_type_id}', ['as' => 'admin_edit_book_type', 'uses' => 'Admin\AdminController@addBookType']);

Route::get('/admin/book_type/delete/{book_type_id}', ['as' => 'admin_delete_book_type', 'uses' => 'Admin\AdminController@deleteBookType']);