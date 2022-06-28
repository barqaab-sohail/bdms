<?php

use Illuminate\Support\Facades\Route;


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


Route::get('/dashboard','HomeController@index')->middleware('auth')->name('dashboard');

Auth::routes();

//Submission Routes
Route::group(['prefix' => 'hrms', 'middleware' => ['auth','XssSanitizer'], 'namespace'=>'Submission'], function(){
	
	Route::get('/submission/eoiReference','SubmissionController@eoiReference');
	Route::get('/submission/submissionNo/{id}','SubmissionController@submissionNo');
	Route::get('/submission/search','SubmissionController@search')->name('submission.search');
	Route::get('/submission/search/result','SubmissionController@result')->name('submission.result');
	Route::resource('/submission', 'SubmissionController');
	Route::resource('/submissionPartner', 'PartnerController');
	Route::resource('/submissionDate', 'DateAndTimeController');
	Route::resource('/submissionContact', 'SubContactController');
	Route::resource('/submissionScope', 'SubScopeController');
	Route::resource('/submissionPosition', 'SubPositionController');
	Route::resource('/submissionCompetitor', 'SubCompetitorController');
	Route::resource('/submissionDocument', 'SubDocumentController');
	

});


Route::get('code/','Auth\RegisterController@create')->name('opt.create');
Route::post('code/','Auth\RegisterController@register')->name('opt.request');
Route::post('code/','Auth\RegisterController@store')->name('opt.store');



//General Routes
Route::group(['middleware' => ['auth','XssSanitizer']], function(){
	Route::get('/country/states/{id?}', 'CountryController@getStates')->name('states');
	Route::get('/country/cities/{id?}', 'CountryController@getCities')->name('cities');
	Route::post('/client','Submission\SubmissionController@addClient')->name('addClient');
	Route::post('/partner','Submission\SubmissionController@addPartner')->name('addPartner');


});

