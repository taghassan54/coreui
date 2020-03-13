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
// Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@welcome');
Route::get('/home', 'HomeController@index');


Route::group(['middleware' => ['auth']], function () {
    Route::resource('sliders', 'SliderController');
});


Route::resource('programmAndServices', 'ProgrammAndServiceController');

Route::resource('contactuses', 'ContactUsController');