<?php

namespace App\Http\Controllers;

use App\Models\DashAdmin;
use App\Models\Tiket;
use Illuminate\Http\Request;

class DashAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('query');
        return view('Dashboard.Admin.index', [
            'tiket' => Tiket::where('kode_tiket', 'LIKE', "%$query%")->paginate(5)->withQueryString()
        ]);
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
     * Display the specified resource.
     */
    public function show(DashAdmin $dashAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DashAdmin $dashAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DashAdmin $dashAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DashAdmin $dashAdmin)
    {
        //
    }

    public function proseskonfirmasi(Request $request)
    {


        Tiket::where('id', $request->id)->update(['Status' => 'Active']);

        return redirect('/Dashboard/Admin')->with('success', 'Konfirmasi Sukses');
    }
}
