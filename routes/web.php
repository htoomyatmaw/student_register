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

Route::get('/', 'TemplateController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/template','TemplateController@index')->name('template');

Route::get('bodycontent','BodyContentController@index')->middleware('auth');

Route::resource('yearlist','YearListController')->middleware('auth');

Route::get('/fetchyear', 'YearListController@fetchYear');

Route::get('/registrationfee','BodyContentController@registrationFee');

Route::get('/activityfee','BodyContentController@activityFee');

Route::get('/studentlist/{id}', 'StudentListController@studentList');

Route::post('/storeStudent', 'StudentListController@storeStudent');

Route::get('/registeration/{id}','RegisterationController@registeration');

Route::post('/fetchbooklist', 'BookListController@fetchBookList');

Route::get('/enrolledinfo', 'EnrolledController@enrolledinfo');

Route::get('/authid', 'EnrolledController@authId');


