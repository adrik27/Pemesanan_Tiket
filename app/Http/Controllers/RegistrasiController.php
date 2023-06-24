<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    public function create()
    {
        return view('authen.regis');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari request
        $validatedData = $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        // Buat objek User baru
        $user = new User();

        $user->role = 2;
        $user->nama = $validatedData['nama'];
        $user->username = $validatedData['username'];
        $user->password = Hash::make($validatedData['password']);

        // Simpan data ke dalam database
        $user->save();

        // Berikan respon atau arahkan ke halaman yang diinginkan
        return redirect('/login');
    }
}
