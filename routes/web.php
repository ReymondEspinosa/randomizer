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

Route::get('/', 'MembersController@index');
Route::post('/add-member', 'MembersController@create');

Route::get('/admin', 'MembersController@indexAdmin');

Route::get('/random-pick', 'MembersController@randomPick');
Route::post('/pick-member', 'MembersController@randomPicked');