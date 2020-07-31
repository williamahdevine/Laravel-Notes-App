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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notes', 'NotesController@index')->name('notes.index')->middleware('auth');
Route::get('/notes/create', 'NotesController@create')->name('notes.create')->middleware('auth');
Route::post('/notes', 'NotesController@store')->name('notes.store')->middleware('auth');
Route::get('/notes/{id}', 'NotesController@show')->name('notes.show')->middleware('auth');
Route::delete('/notes/{id}', 'NotesController@destroy')->name('notes.destroy')->middleware('auth');

// Route::get('/notes/editaccount', 'NotesController@editaccount')->name('notes.editaccount')->middleware('auth');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
