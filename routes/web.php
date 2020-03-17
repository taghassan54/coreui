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



Auth::routes(['register' => false]);

Route::get('/', 'HomeController@welcome');
Route::get('/gallery', 'HomeController@gallery');
Route::get('/home', 'HomeController@index');


Route::group(['middleware' => ['auth']], function () {
    Route::resource('sliders', 'SliderController');
});


Route::resource('programmAndServices', 'ProgrammAndServiceController');

Route::resource('contactuses', 'ContactUsController');

Route::resource('posts', 'PostController');

Route::resource('events', 'EventController');

Route::resource('blogCategories', 'BlogCategoryController');

Route::resource('blogPostTags', 'BlogPostTagController');


Route::resource('footers', 'FooterController');


Route::resource('galleries', 'GalleryController');