<?php

namespace App\Http\Controllers;

use App\Models\Clark;
use Illuminate\Http\Request;

class ClarkController extends Controller
{
    public function content1()
    {
        $blog = Clark::orderBy('created_at', 'desc')->get();

        // Render a Blade view: resources/views/blog/content1.blade.php
        return view('blog.content1', ["blog" => $blog]);
    }
}
