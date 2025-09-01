<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('WELCOME');
});

Route::get('/blog', function () {
    $blog = [
        ["name" => "Clark", "skill" => 75, "id" => "1"],
        ["name" => "Kent", "skill" => 99, "id" => "2"],
    ];
        return view('blog.content1', 
        [
            "notSunday" => "Hello Monday",
            "blog" => $blog
        ]);
});

Route::get('/blog/create', function () {
    return view('blog.create');
});

Route::get('/blog/{id}', function ($id) {
        return view('blog.show', ["id" => $id]);
});