<?php

namespace App\Http\Controllers;

use App\Models\DashAdmin;
use Illuminate\Http\Request;

class DashAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.Admin.index');
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
}
