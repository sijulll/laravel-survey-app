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
Route::get('/index', function () {
    return view('Survey.index');
});
Route::get('/Logout','UserController@Logout');

Route::post('/RegisterPost','UserController@RegisterPost');
Route::post('/LoginPost','UserController@LoginPost');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//reward routes
Route::get('/reward','RewardController@index')->name('reward');

//profile
//Route::resource('user', 'UserController');
Route::get('/editprofile/edit/{id}','UserController@edit')->name('editprofile');
Route::post('/editprofile/update','UserController@update');

//Create Survei
Route::get('/CreateSurvey',function() {
    return view('Surevey.CreateSurvey');

Route::get('/surveylist','SurveyController@index')->name('surveylist');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
