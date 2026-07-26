<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/meet-the-pigs', function () {
    return view('meet-the-pigs');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/book', function () {
    return view('book');
});

