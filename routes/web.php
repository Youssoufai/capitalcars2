<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/about', 'about.about')->name('about');
Route::view('/service', 'service.service')->name('service');
Route::view('/contact', 'contact.contact')->name('contact');
