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

// Get hompage which allows visitors to create a message to store into the database
Route::get('/', function () {
    return view('/messages/create');
});

// Store created message into the database
Route::post('/', 'MessagesController@store');

// Delete a specific message from the database
Route::delete('/{message}', 'MessagesController@destroy');

// Get admin hompage which shows all messages in the database
Route::get('/admin', 'MessagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
