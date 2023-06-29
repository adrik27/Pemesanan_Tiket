<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tiket;
use App\Models\Konser;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class KonserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.Konser.index', [
            'konser'    =>  Konser::latest()->paginate(5)->withQueryString()
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
        $rule = [
            'Status_id' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'kuota' => 'required',
            'sisakuota' => 'required',
            'tempat' => 'required',
            'tanggal' => 'required|date',
        ];
        $validatedData = $request->validate($rule);

        if ($request->file('image')) {
            $validatedData['image']    =   $request->file('image')->store('konser-images');
        }

        $validatedData['status']    =   'Pesan';

        // Simpan data ke dalam database
        Konser::create($validatedData);
        // $konser->save();

        // Berikan respon atau arahkan ke halaman yang diinginkan
        return redirect('/Dashboard/Konser')->with('success', 'Tambah Data Konser Berhasil Disimpan !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Konser $Konser)
    {
        return view('Dashboard.Konser.detail', [
            'ks'    =>  $Konser,
        ]);
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
        if ($Konser->image) {
            Storage::delete($Konser->image);
        }

        Konser::destroy($Konser->id);

        return redirect('/Dashboard/Konser');
    }

    public function tampilbayar()
    {
        return view('Dashboard.Pembayaran.index');
    }

    public function prosespesan(Request $request)
    {
        $user = User::where('username', Auth()->user()->username)->first();

        $konser = Konser::where('id', $request->Konser_id)->first();

        $data = [
            'kode_tiket' => substr($konser->nama, 0, 2) . '-' . rand(10000000, 99999999),
            'nama_konser' => $konser->nama,
            'tempat_konser' => $konser->tempat,
            'tgl_konser' => $konser->tanggal,
            'username' => $user->username,
            'Status' => 'Non Active',
        ];


        Tiket::create($data);

        Konser::where('id', $request->Konser_id)->decrement('kuota', 1, ['sisakuota' => DB::raw('GREATEST(kuota - 1, 0)')]);

        return redirect('/Pembayaran');
    }
}
