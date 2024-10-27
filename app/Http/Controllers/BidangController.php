<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function namabidang() {
        // Retrieve all bidang records from the database
        $bidangs = Bidang::all();

        // Pass the bidang records to the view
        return view('divisi', ['bidangs' => $bidangs]);
    }
}

