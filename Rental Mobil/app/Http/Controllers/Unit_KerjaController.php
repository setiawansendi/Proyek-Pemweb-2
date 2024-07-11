<?php

namespace App\Http\Controllers;

use App\Models\Unit_Kerja;
use Illuminate\Http\Request;

class Unit_KerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_unit_kerja = Unit_Kerja::all();
// buat turunan model unit kerja
        return view('unit_kerja.index', ['data_unit_kerja'=>$list_unit_kerja]);
// kirim  array data ke view unit kerja idex menggunakan assosiatif array
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
        $unit_kerja = new Unit_kerja();
        $unit_kerja->nama = $request->nama;       
        $unit_kerja->save();
        return redirect('unit_kerja');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $list_unit_kerja = Unit_Kerja::where('id', $id)->get();
        return view('unit_kerja.edit', compact('list_unit_kerja'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $unit_kerja = Unit_Kerja::find($request->id);
        $unit_kerja->nama = $request->nama;       
        $unit_kerja->save();
        return redirect('unit_kerja');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Unit_Kerja::where('id', $id)->delete();
        return redirect('unit_kerja');
    }
}
