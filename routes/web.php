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

/*Route::get('/', function () {
    return view('welcome');
});*/

date_default_timezone_set('Asia/Tbilisi');

Route::get('/', 'HomeController@index')->name('home');
Route::post('/question/check-binary', 'HomeController@checkBinary')->name('check_binary');
Route::post('/question/check-multiple', 'HomeController@checkMultiple')->name('check_multiple');

//Route::resource('settings', 'SettingsController');
Route::get('/settings', 'SettingsController@index')->name('settings');
Route::get('/settings/update', 'SettingsController@changeMode');
        