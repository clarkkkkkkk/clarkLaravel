<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('WELCOME');
});

Route::get('/blog', function () {
/*     if(now()->isSunday()){
        return view('blog.content1', ["sunday" => "Hi Sunday" ]);
    }else{
        return view('blog.content2', ["notSunday" => "Hello Monday" ]);
    } */
});


//the last function may view the "WELCOME"