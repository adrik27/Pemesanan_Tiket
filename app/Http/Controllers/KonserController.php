<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use Illuminate\Http\Request;

class KonserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.Konser.index', [
            'konser'    =>  Konser::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.Konser.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Status_id' => 'required',
            'nama' => 'required',
            'tempat' => 'required',
        ]);

        // Buat objek User baru
        $konser = new Konser();
        $konser->nama = $validatedData['nama'];
        $konser->tempat = $validatedData['tempat'];
        $konser->Status_id = 1;

        // Simpan data ke dalam database
        $konser->save();

        // Berikan respon atau arahkan ke halaman yang diinginkan
        return redirect('/Dashboard/Konser')->with('success', 'Tambah Data Konser Berhasil Disimpan !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Konser $Konser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Konser $Konser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Konser $Konser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Konser $Konser)
    {
        Konser::destroy($Konser->id);

        return redirect('/Dashboard/Konser');
    }

    public function prosespesan()
    {
        // 
    }
}
