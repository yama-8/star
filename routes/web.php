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
use App\Http\Controllers\MonthController;
use App\Http\Controllers\diaryController;

Route::group(['middleware' =>['auth']],function(){
    Route::get('/', 'diaryController@index');
    Route::get('/calendars/create','CalendarController@create');
    Route::post('/calendars', 'CalendarController@store');
    Route::get('/diaries/create', 'diaryController@create');
    Route::post('/diaries', 'diaryController@store');
    Route::put('/diaries/{diary}', 'diaryController@update');
    Route::get('/diaries/{diary}', 'diaryController@show');
    Route::get('/diaries/{diary}/edit', 'diaryController@edit');
    Route::delete('/diaries/{diary}', 'diaryController@delete');
    Route::get('/month', 'MonthController@index');
    Route::get('/month/1' ,'MonthController@select' );
    Route::get('/month/show', 'MonthController@show');

});

   
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


