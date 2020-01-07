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

Route::get('/registeration/{id}','RegisterationController@registeration')->middleware('auth');

Route::get('/profile/{id}', 'ProfileController@profile')->middleware('auth');

Route::get('/profileedit/{id}', 'ProfileController@profileedit')->middleware('auth');

Route::post('/profileUpdate', 'ProfileController@profileUpdate')->middleware('auth');

Route::post('/fetchbooklist', 'BookListController@fetchBookList')->middleware('auth');

Route::get('/selectenrolled/{id}', 'EnrolledController@selectenrolled');

Route::get('/viewenrolled/{id}','EnrolledController@viewenrolled');

Route::get('/secondviewenrolled/{id}','EnrolledController@secondviewenrolled');

Route::get('/thirdviewenrolled/{id}','EnrolledController@thirdviewenrolled');

Route::get('/fourthviewenrolled/{id}','EnrolledController@fourthviewenrolled');

Route::get('/fifthviewenrolled/{id}','EnrolledController@fifthviewenrolled');

Route::get('/authid', 'EnrolledController@authId')->middleware('auth');

Route::get('/authuserid', 'EnrolledController@authuserId')->middleware('auth');

Route::get('/logout', 'Auth\LoginController@logout');


