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



Auth::routes();

Route::prefix('admin')->group(function (){
    Route::group(['middleware' => 'auth'], function (){
        Route::group(['namespace' => 'Admin'], function (){
            require_once __DIR__ . '/administrator.php';
        });
    });
});

Route::get('/', 'SiteController@index');

Route::get('/{locale}', 'LocaleController@store')
    ->where('locale','[a-z]{2}')
    ->name('set.locale');


//Route::get('/home', 'HomeController@index')->name('home');
