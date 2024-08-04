<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web/index');
});
Route::get('/about', function () {
    return view('web/about');
});
Route::get('/blog', function () {
    return view('web/blog');
});
Route::get('/educ', function () {
    return view('web/category/education');
});
Route::get('/life', function () {
    return view('web/category/lifestyle');
});
Route::get('/news', function () {
    return view('web/category/news');
});
Route::get('/get', function () {
    return view('web/get');
});