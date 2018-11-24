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

Route::group(['middleware'=>['web']],function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/admin-panel','HomeController@showAdminPanel');
    Route::get('admin-manage-business','HomeController@showManageBsns');
    Route::get('browse','HomeController@browseCategories');
    Route::get('/shop','HomeController@showShopLayout');
});

//Auth::routes();


