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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-me', 'MyPortfolioController@showAboutMe');

Route::get('/education', 'MyPortfolioController@showEducation');

Route::get('/work-experience', 'MyPortfolioController@showWorkExperience');

Route::get('/skills', 'MyPortfolioController@showSkills');

Route::get('/other-projects', function () {
    return 'Other Projects';
});

Route::get('/project-1', function () {
    return 'Project 1';
});

Route::get('/project-2', function () {
    return 'Project 2';
});

Route::get('/resume', 'MyPortfolioController@downloadResume');