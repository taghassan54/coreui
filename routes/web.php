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
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
Route::get('per',function(){
/*     $permission = Permission::create(['name' => 'All Content']);
    $permission = Permission::create(['name' => 'Gallery content']);
    $permission = Permission::create(['name' => 'Settings']);
    $permission = Permission::create(['name' => 'Our Partners content']);
    $permission = Permission::create(['name' => 'FSQO Community content']);
    $permission = Permission::create(['name' => 'Blogs content']);
    $permission = Permission::create(['name' => 'News & Events content']);
    $permission = Permission::create(['name' => 'Library & Publications content']);
    $permission = Permission::create(['name' => 'About Us content']); */
 /*    $permission = Permission::create(['name' => '']); */

});


Auth::routes(['register' => false]);

Route::get('/', 'HomeController@welcome');
Route::get('/singlepost/{post}', 'PostController@singlepost');
Route::get('/gallery', 'HomeController@gallery');
Route::get('/fsqo-club', 'HomeController@club');
Route::get('/blogs', 'HomeController@blogs');

Route::get('/admin-login',function(){
    if(auth()->check())
    return redirect()->route('home');
    else
    return view('auth.login');
});
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function () {
    Route::resource('sliders', 'SliderController');



Route::resource('programmAndServices', 'ProgrammAndServiceController');

Route::resource('contactuses', 'ContactUsController');

Route::resource('posts', 'PostController');

Route::resource('events', 'EventController');

Route::resource('blogCategories', 'BlogCategoryController');

Route::resource('blogPostTags', 'BlogPostTagController');


Route::resource('footers', 'FooterController');


Route::resource('galleries', 'GalleryController');




Route::resource('countriys', 'CountriyController');

Route::resource('cities', 'CityController');

Route::resource('contactInfos', 'ContactInfoController');

Route::resource('ageRanges', 'AgeRangesController');

Route::resource('nationalities', 'NationalityController');

Route::resource('universities', 'UniversityController');

Route::resource('specializations', 'SpecializationController');

Route::resource('fsooFields', 'FsooFieldController');

Route::resource('partners', 'PartnersController');

Route::resource('joinAs', 'JoinAsController');

Route::resource('ourTeams', 'OurTeamController');

Route::resource('privacyPolicies', 'PrivacyPolicyController');

Route::resource('privacyPolicies', 'PrivacyPolicyController');

Route::resource('frequentlyAskedQuestions', 'FrequentlyAskedQuestionController');

Route::resource('memberships', 'MembershipController');

Route::resource('news', 'NewsController');

Route::resource('users', 'UserController')->middleware('auth');


});





Route::resource('permissions', 'PermissionController');

Route::resource('roles', 'RoleController');
