<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/balance', function () {
    return view('balance');
});
Route::get('/chat', function () {
    return view('chat');
});
Route::get('/settings', function () {
    return view('settings');
});
Route::get('/teachers', function () {
    return view('teachers');
});
Route::get('/teachers/view', function () {
    return view('teachers-view');
});