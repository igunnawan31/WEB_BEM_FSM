<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Fetch the posts from the database
        $posts = Post::all(); // You can modify the query as needed

        // Pass the posts to the view
        return view('beranda', ['posts' => $posts]);
    }
}
