<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index() {
        // Retrieve all bidang records from the database
        $bidangs = Bidang::all();

        $koor = $bidangs->flatMap(function($bidang) {
            return $bidang->anggotas()
                          ->where(function($query) {
                              $query->where('jabatan', 'like', '%Koordinator%')
                                    ->orWhere('jabatan', 'like', '%Ketua Tim%');
                          })
                          ->get();
        });

        $sekre = $bidangs->flatMap(function($bidang) {
            return $bidang->anggotas()
                            ->where(function($query) {
                                $query->where('jabatan', '=', 'Sekretaris 1')
                                        ->orWhere('jabatan', '=', 'Sekretaris 2');
                            })
                            ->get();
        });

        $benda = $bidangs->flatMap(function($bidang) {
            return $bidang->anggotas()
                            ->where(function($query) {
                                $query->where('jabatan', '=', 'Bendahara 1')
                                        ->orWhere('jabatan', '=', 'Bendahara 2');
                            })
                            ->get();
        });

        $ketua = $bidangs->flatMap(function($bidang) {
            return $bidang->anggotas()->where('jabatan', '=', 'Ketua Badan Eksekutif Mahasiswa FSM')->get();
        });
    
        $wakil = $bidangs->flatMap(function($bidang) {
            return $bidang->anggotas()->where('jabatan', '=', 'Wakil Ketua Badan Eksekutif Mahasiswa FSM')->get();
        });
        return view('bidangs', compact('bidangs', 'koor', 'ketua', 'wakil', 'sekre', 'benda'));
    }

    public function show($namabidang) 
    {
        $bidang = Bidang::where('bidang', $namabidang)->firstOrFail();
        
        $ketua = $bidang->anggotas()->where(function($query) {
            $query->where('jabatan', 'like', '%Ketua Bidang%')
                  ->orWhere('jabatan', 'like', '%Wakil Ketua Bidang%')
                  ->orWhere('jabatan', 'like', '%Kepala Bidang%')
                  ->orWhere('jabatan', 'like', '%Kepala Biro%')
                  ->orwhere('jabatan', 'like', '%Wakil Kepala Bidang%')
                  ->orWhere('jabatan', 'like', '%Wakil Kepala Biro%')
                  ->orWhere('jabatan', 'like', '%Ketua Tim%');
        })->get();
        
        $anggota = $bidang->anggotas()->where(function($query) {
            $query->where('jabatan', 'not like', '%Ketua Bidang%')
                  ->where('jabatan', 'not like', '%Wakil Ketua Bidang%')
                  ->where('jabatan', 'not like', '%Kepala Bidang%')
                  ->where('jabatan', 'not like', '%Kepala Biro%')
                  ->where('jabatan', 'not like', '%Wakil Kepala Bidang%')
                  ->where('jabatan', 'not like', '%Wakil Kepala Biro%');
        })->get();

        $programkerja = $bidang->programkerjas;

        $agenda = $bidang->agendas;
        
        $firstWord = strtok(strtoupper($bidang->bidang), ' '); // Gets the first word in uppercase // Gets the first word
        $remainingWords = substr($bidang->bidang, strlen($firstWord) + 1); // Gets the rest of the string
    
        return view('bidang', compact('bidang', 'ketua', 'anggota', 'firstWord', 'remainingWords', 'programkerja', 'agenda'));
    }
}

