<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/menu', function () {
    return view('menu'); // We will create this view next
})->name('menu');

Route::get('/reservation', function () {
    return view('reservation'); // We will create this view next
})->name('reservation');

Route::get('/contact', function () {
    return view('contact'); // We will create this view next
})->name('contact');
