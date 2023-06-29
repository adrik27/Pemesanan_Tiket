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
        $rule = [
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
        ];
        // Validasi data yang diterima dari request
        $validatedData = $request->validate($rule);

        // membuatkan folder untuk image
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('profil-images');
        }
        // mengisi role berisi 2(User)
        $validatedData['role'] = 2;

        // Simpan data ke dalam database 
        User::create($validatedData);

        // Berikan respon atau arahkan ke halaman yang diinginkan
        return redirect('/login');
    }
}
