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

Route::view('/', 'welcome') ->name('welcome'); //shorter version in case that you have a page which only shows something

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
Route::get('/admin','AdminController@index')->name('admin'); //Todo: This route must not be accessible without successfulluly passing registration via Auth middleware

Route::get('/admin/users', 'UsersController@index')->name('users');//Todo: This route must not be accessible without successfulluly passing registration via Auth middleware
Route::get('/admin/events/create', 'EventsController@create')->name('create_events');//Todo: This route must not be accessible without successfulluly passing registration via Auth middleware
Route::get('/admin/events/list', 'EventsController@index')->name('list_events');//Todo: This route must not be accessible without successfulluly passing registration via Auth middleware
Route::POST('/admin/events', 'EventsController@store')->name('store_events');//Todo: This route must not be accessible without successfulluly passing registration via Auth middleware
Route::get('/admin/events/{event}', 'EventsController@show')->name('show_event');
Route::get('/events/actions/create/{event}', 'ActionsController@create')->name('create_actions');
Route::POST('/events/actions/create', 'ActionsController@store')->name('store_actions');

Route::redirect('/action/create', '/events/actions/create');
//Route::redirect('/admin/events/{event}', '/admin/actions/create/{event}');

//Route to an universal Time and Date Picker Todo: try to make this universal so that it can be used as a template for other routes/sites
//Route::get('/admin/datepicker', function () {
//    return view('/admin/admin_datepicker');
//    });