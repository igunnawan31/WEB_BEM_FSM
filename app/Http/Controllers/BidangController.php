<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index() {
        // Retrieve all bidang records from the database
        $bidangs = Bidang::all();
        return view('bidangs', compact('bidangs'));
    }

    public function show($namabidang) 
    {
        $bidang = Bidang::where('bidang', $namabidang)->firstOrFail();
        
        $ketua = $bidang->anggotas()->where(function($query) {
            $query->where('jabatan', 'like', '%Ketua%')
                  ->orWhere('jabatan', 'like', '%Wakil Ketua%')
                  ->orWhere('jabatan', 'like', '%Kepala Bidang%')
                  ->orWhere('jabatan', 'like', '%Kepala Biro%')
                  ->orWhere('jabatan', 'like', '%Wakil Kepala%');
        })->get();
        
        $anggota = $bidang->anggotas()->where(function($query) {
            $query->where('jabatan', 'not like', '%Ketua%')
                  ->where('jabatan', 'not like', '%Wakil Ketua%')
                  ->where('jabatan', 'not like', '%Kepala Bidang%')
                  ->where('jabatan', 'not like', '%Kepala Biro%')
                  ->where('jabatan', 'not like', '%Wakil Kepala%');
        })->get();

        $programkerja = $bidang->programkerjas;

        $agenda = $bidang->agendas;
        
        $firstWord = strtok(strtoupper($bidang->bidang), ' '); // Gets the first word in uppercase // Gets the first word
        $remainingWords = substr($bidang->bidang, strlen($firstWord) + 1); // Gets the rest of the string
    
        return view('bidang', compact('bidang', 'ketua', 'anggota', 'firstWord', 'remainingWords', 'programkerja', 'agenda'));
    }
}

