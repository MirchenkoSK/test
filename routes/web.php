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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::middleware('auth')->prefix('/admin')->namespace('Admin')->name('admin.')->group(function () {

    Route::get('/product', 'ProductController@index')->name('product');
    Route::get('/product/create', 'ProductController@create')->name('product.create');
    Route::post('/product/store', 'ProductController@store')->name('product.store');
    Route::get('/product/{id}', 'ProductController@show')->name('product.show');
    Route::get('/product/{id}/edit', 'ProductController@edit')->name('product.edit');
    Route::put('/product/{id}/update', 'ProductController@update')->name('product.update');
    Route::delete('/product/{id}/destroy', 'ProductController@destroy')->name('product.destroy');

});

Route::get('/home', 'HomeController@home')->name('home');

Route::get('/doc', 'DocController@doc')->name('doc');
Route::get('/doc/navbar', 'DocController@navbar')->name('doc.navbar');
Route::get('/doc/button', 'DocController@button')->name('doc.button');
Route::get('/doc/typography', 'DocController@typography')->name('doc.typography');
Route::get('/doc/table', 'DocController@table')->name('doc.table');
Route::get('/doc/form', 'DocController@form')->name('doc.form');
Route::get('/doc/nav', 'DocController@nav')->name('doc.nav');
Route::get('/doc/indicator', 'DocController@indicator')->name('doc.indicator');
Route::get('/doc/progress', 'DocController@progress')->name('doc.progress');
Route::get('/doc/container', 'DocController@container')->name('doc.container');
Route::get('/doc/dialog', 'DocController@dialog')->name('doc.dialog');
