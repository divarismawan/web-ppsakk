<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/arti-lambang',function(){
    return view('profiles/lambang');
});





Route::get('/blog', function () {
    return view('blog/blog');
});

Route::get('/blog/berita', function () {
    return view('blog/detail-blog');
});

Route::get('/calendar', function () {
    return view('calendar');
});




Route::prefix('admin')->group(function(){
    Route::get('/login-adm', function(){
        return view('admin/admin-dashboard');
    });
});

Route::get('/maintenance', function(){
    return view('maintenance');
});