<?php


use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@show')->name('home');

Route::get('news', 'NewsController@show')->name('news');

Route::group(['prefix' => 'projects'], function () {
    Route::get('', 'ProjectsController@show')
        ->name('projects_show');
});

// Api Routes
Route::group(['namespace' => 'api', 'prefix' => 'api/v1'],
    function()
{
    // Members API Routes
    Route::get('members/{id?}', 'ApiMembersController@show');
    // Profile API Routes
    Route::get('profile/{id?}', 'ApiProfileController@show');
    Route::post('profile/{id?}', 'ApiProfileController@update');

    // Testing the relationships
    Route::get('profile/projects/{projectId}', 'ApiProfileController@updateProjects');
});

Route::get('profile', 'ProfileController@show')
  ->name('profile');


Route::get('members', function () {
    return view('members.members');
})->name('members');

Route::get('about', 'AboutController@show')->name('about');

Route::group(['middleware' => 'web'], function () {
    Route::get('fileUpload', function () {
        return view('fileUpload');
    });
    Route::post('fileUpload', ['as'=>'fileUpload','uses'=>'FileUploadController@fileUpload']);
});

Auth::routes();


