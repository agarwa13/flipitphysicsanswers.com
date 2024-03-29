<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@show');

Route::get('/home', 'HomeController@show');

/**
 * Resource Controllers
 */
Route::post('/question/{slug}/solution','QuestionController@solve');
Route::resource('/course','CourseController');
Route::resource('/subject','SubjectController');
Route::resource('/chapter','ChapterController');
Route::resource('/question','QuestionController');