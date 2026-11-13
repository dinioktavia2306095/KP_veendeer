<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('index');

Route::redirect('/index.php', '/')->name('index.legacy');

Route::view('/menu', 'menu')->name('menu');
Route::view('/menu.php', 'menu')->name('menu.legacy');
Route::view('/full-menu', 'full-menu')->name('full-menu');

Route::view('/facilities', 'facilities')->name('facilities');
Route::view('/facilities.php', 'facilities')->name('facilities.legacy');

Route::view('/gallery', 'gallery')->name('gallery');
Route::view('/gallery.php', 'gallery')->name('gallery.legacy');

Route::view('/event', 'event')->name('event');
Route::view('/event.php', 'event')->name('event.legacy');

Route::view('/contact', 'contact')->name('contact');
Route::view('/contact.php', 'contact')->name('contact.legacy');
