<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $context = ['posts' => Post::latest()->get()];
        return view('index', $context);
    }
}
