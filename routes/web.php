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
Route::get('/presentation', 'PresentationController@presentation')->name('presentation');
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::get('/pdf', 'PdfController@pdf');
Route::get('/divers', 'DiversController@divers')->name('divers');
Route::get('/security', 'SecurityController@security')->name('security');

Auth::routes();
Route::get('/news', 'Newscontroller@news')->name('news');

Route::get('/home', 'HomeController@index')->name('home');
