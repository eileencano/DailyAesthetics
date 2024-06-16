<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('index');

}

public function about()
    {
        return view('posts/about');

}

public function contacto()
    {
        return view('posts/contacto');

    }
}
