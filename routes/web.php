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

Route::get('/purpose', function () {
    return view('purpose');
})->name('purpose');

Route::get('/rules', function () {
    return view('rules');
})->name('rules');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','AdminController@index')->name('admin');

Route::get('/admin/users', 'UsersController@index')->name('users');
Route::get('/admin/events', 'EventsController@index')->name('events');
Route::get('/admin/issues_questions', 'I_QController@index')->name('i_q');