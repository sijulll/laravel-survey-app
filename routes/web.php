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

//reward routes
Route::get('/reward/{id}','RewardController@index')->name('reward.list');

//profile
Route::put('/editprofile/edit/{id}','UserController@edit')->name('profile.edit');
Route::post('/editprofile/update','UserController@update')->name('profile.update');
Route::get('/userdt',['middleware'=>'auth','uses'=>'UserController@userdetail'])->name('userdt.show');
Route::post('/userdt/store','UserController@store')->name('userdt.store');


//Survei
Route::get('/createsurvey','SurveyController@show')->name('survey.create');
Route::get('/surveylist','SurveyController@index')->name('survey.list');



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');