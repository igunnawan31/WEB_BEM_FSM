<?php

namespace App\Http\Controllers;

use App\Models\Igpost;
use Illuminate\Http\Request;

class IgpostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $igposts = Igpost::all()->latest()->take(4)->get();
        // Retrieve posts by 'tipepostingan' directly from the database
        $kemahasiswaan = Igpost::where('tipepostingan', 'Kemahasiswaan')->latest()->take(4)->get();
        $karir = Igpost::where('tipepostingan', 'Karir dan Profesi')->latest()->take(4)->get();
        $beasiswa = Igpost::where('tipepostingan', 'Beasiswa')->latest()->take(4)->get();
        $administrasi = Igpost::where('tipepostingan', 'Administrasi')->latest()->take(4)->get();
    
        // Pass filtered collections to the view
        return view('informasi', compact('igposts', 'kemahasiswaan', 'karir', 'beasiswa', 'administrasi'));

        // return view('informasi', compact('igposts'));
    }

    /**
     * Display the specified resource.
     */
    public function show($post_foto)
    {
        // Retrieve all Igpost entries matching the specified post_foto
        // $igpost = Igpost::where('post_foto', $post_foto)->get();
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
