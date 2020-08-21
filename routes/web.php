<?php

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

Route::get('/', function () {
    return view('admin.dashboard.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Admin Route

//
Route::prefix('admin')->group(function () {
    Route::get('/category','CategoryController@index')->name('category');
    Route::post('/category','CategoryController@addCategory');
    Route::get('/edit/category/{id}','CategoryController@editCategory')->name('editCategory');
    Route::post('/edit/category/{id}','CategoryController@updateCategory');
    Route::get('/delete/category/{id}','CategoryController@deleteCategory')->name('deleteCategory');
});


