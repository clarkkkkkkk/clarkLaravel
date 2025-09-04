<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClarkController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', [ClarkController::class, 'content1']);

Route::get('/blog/create', function () {
    return view('blog.create');
});

Route::get('/blog/{id}', function ($id) {
    return view('blog.show', ["id" => $id]);
});
