<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function index()
    {
        // Fetch the posts from the database (replace with your actual query)
        $posts = Post::all(); // Assuming you have a Post model
        // Pass the posts to the view
        return view('your-view-name', ['posts' => $posts]);
    }

    protected $fillable = [
        'post_foto',
        'deskripsi_foto',
    ];

    
}
