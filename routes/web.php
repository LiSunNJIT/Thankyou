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

Route::get('/', 'Pagescontroller@index')->name('index');

Route::get('/about', 'Pagescontroller@about')->name('about');

Route::get('/contact', 'Pagescontroller@contact')->name('contact');

Route::post('/contact', 'Pagescontroller@store')->name('contact.store');

Route::get('/thanks/{name}', 'Pagescontroller@thanks')->name('thanks');
