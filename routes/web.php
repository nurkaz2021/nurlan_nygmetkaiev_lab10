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

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/en/');

Route::group(['prefix' => '{language}'], function () {
    Route::get('/', 'NewspostController@index')->name('articles');
    Route::get('newspost/{id}', 'NewspostController@show')->name('np_show');
    Route::get('newspost', 'NewspostController@create')->name('newspost_form');
    Route::post('new_newspost', 'NewspostController@store')->name('save_newspost');
});
