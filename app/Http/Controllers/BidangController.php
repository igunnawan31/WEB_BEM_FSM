<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index() {
        // Retrieve all bidang records from the database
        $bidangs = Bidang::all();

        // Pass the bidang records to the view
        return view('bidangs', compact('bidangs'));
    }

    public function show($namabidang) 
    {
        $bidang = Bidang::where('bidang', $namabidang)->firstOrFail();
        return view('bidang', compact('bidang'));
    }
}

