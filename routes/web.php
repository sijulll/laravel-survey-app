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
Route::get('/index','UserController@show')->name('surevey.index');
Route::get('/logout','UserController@Logout')->name('user.logout');
Route::post('/registerpost','UserController@RegisterPost')->name('user.register');
Route::post('/loginpost','UserController@LoginPost')->name('user.login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//reward routes
Route::get('/reward','RewardController@index')->name('reward.list');

//profile
Route::get('/editprofile/edit/{id}','UserController@edit')->name('profile.edit');
Route::post('/editprofile/update','UserController@update')->name('profile.update');

//Survei
Route::get('/createsurvey','SurveyController@show')->name('survey.create');
Route::get('/surveylist','SurveyController@index')->name('survey.list');
