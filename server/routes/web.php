<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/sample', function () {
    return view('contents/sample');
});

Route::get('/', function () {
    return view('contents/index');
});

Route::get('/wiki', function () {
    return view('contents/wiki');
});

Route::get('/blog', function () {
    return view('contents/blog');
});

Route::get('/setting', function () {
    return view('contents/setting');
});

Route::get('/search', function () {
    return view('contents/search');
});

Route::get('/admin', function () {
    return view('admin/adminIndex');
});
