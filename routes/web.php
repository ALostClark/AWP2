<?php

use App\Card;
use App\SocialMedia;
use App\User;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function() {
    Route::get('/courses', 'CourseController@index')->name('all_courses');
    Route::get('/courses/create', 'CourseController@create')->name('create_course');
    Route::post('/courses/create', 'CourseController@store')->name('create_course');
    Route::get('/courses/update/{course}', 'CourseController@edit')->name('edit_course');
    Route::post('/courses/update/{course}', 'CourseController@update')->name('edit_course');
    Route::post('/courses/delete/{course}', 'CourseController@destroy')->name('delete_course');
    Route::get('/courses/cardify/{course}', 'CardController@fromCourse')->name('cardify_course');

    Route::get('/employments', 'EmploymentController@index')->name('all_employments');
    Route::get('/employments/create', 'EmploymentController@create')->name('create_employment');
    Route::post('/employments/create', 'EmploymentController@store')->name('create_employment');
    Route::get('/employments/update/{employment}', 'EmploymentController@edit')->name('edit_employment');
    Route::post('/employments/update/{employment}', 'EmploymentController@update')->name('edit_employment');
    Route::post('/employments/delete/{employment}', 'EmploymentController@destroy')->name('delete_employment');
    Route::get('/employments/cardify/{employment}', 'CardController@fromEmployment')->name('cardify_employment');

    Route::get('/locations', 'LocationController@index')->name('all_locations');
    Route::get('/locations/create', 'LocationController@create')->name('create_location');
    Route::post('/locations/create', 'LocationController@store')->name('create_location');
    Route::get('/locations/update/{location}', 'LocationController@edit')->name('edit_location');
    Route::post('/locations/update/{location}', 'LocationController@update')->name('edit_location');
    Route::post('/locations/delete/{location}', 'LocationController@destroy')->name('delete_location');

    Route::get('/projects', 'ProjectController@index')->name('all_projects');
    Route::get('/projects/create', 'ProjectController@create')->name('create_project');
    Route::post('/projects/create', 'ProjectController@store')->name('create_project');
    Route::get('/projects/update/{project}', 'ProjectController@edit')->name('edit_project');
    Route::post('/projects/update/{project}', 'ProjectController@update')->name('edit_project');
    Route::post('/projects/delete/{project}', 'ProjectController@destroy')->name('delete_project');
    Route::get('/projects/cardify/{project}', 'CardController@fromProject')->name('cardify_project');

    Route::get('/user/update', 'UserController@edit')->name('edit_user');
    Route::post('/user/update', 'UserController@update')->name('edit_user');
    Route::post('/user/profile/update', 'UserController@updateProfileIcon')->name('update_profile_icon');

    Route::get('/socialmedia', 'SocialMediaController@index')->name('all_socialmedia');
    Route::get('/socialmedia/create', 'SocialMediaController@create')->name('create_socialmedia');
    Route::post('/socialmedia/create', 'SocialMediaController@store')->name('create_socialmedia');
    Route::get('/socialmedia/update/{socialmedia}', 'SocialMediaController@edit')->name('edit_socialmedia');
    Route::post('/socialmedia/update/{socialmedia}', 'SocialMediaController@update')->name('edit_socialmedia');
    Route::post('/socialmedia/delete/{socialmedia}', 'SocialMediaController@destroy')->name('delete_socialmedia');

    Route::get('/cards', 'CardController@index')->name('all_cards');
    Route::get('/cards/increment/{card}', 'CardController@increment')->name('increment_card');
    Route::get('/cards/decrement/{card}', 'CardController@decrement')->name('decrement_card');
    Route::post('/cards/delete/{card}', 'CardController@delete')->name('delete_card');

});

Route::get('/', function () { return view('pages/home', ['user' => User::find(1), 'social_media' => SocialMedia::all(), 'cards' => Card::orderBy('order')->get()]); })->name('home');

Route::get('/courses/{course}', 'CourseController@show')->name('view_course');
Route::get('/employments/{employment}', 'EmploymentController@show')->name('view_employment');
Route::get('/locations/{location}', 'LocationController@show')->name('view_location');
Route::get('/projects/{project}', 'ProjectController@show')->name('view_project');

Auth::routes(['register' => false]);
