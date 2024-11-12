<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Bidang;
use App\Models\Igpost;
use App\Models\Anggota;
use App\Models\ProgramKerja;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;

class BerandaController extends Controller
{
    public function index()
    {
        // Count each entity
        $programCount = ProgramKerja::all()->count();
        $bidangCount = Bidang::all()->count();
        $anggotaCount = Anggota::all()->count();
        $posts = Post::all();
        $igposts = Igpost::latest()->take(4)->get();
        // Pass the counts to the view
        
        return view('beranda', compact('programCount', 'bidangCount', 'anggotaCount', 'posts', 'igposts'));
    }
}
