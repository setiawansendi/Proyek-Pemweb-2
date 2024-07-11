<?php

namespace App\Http\Controllers;

use App\Models\Jenis_Kendaraan; //tambahin ini
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Jenis_KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_jenis_kendaraan= Jenis_Kendaraan::all();
// buat turunan model kelurahan
        return view('jenis_kendaraan.index', ['data_jenis_kendaraan'=>$data_jenis_kendaraan]);
// kirim array data ke view kelurahan index menggunakan assosiatif array
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
        $jenis_kendaraan= new Jenis_Kendaraan();
        $jenis_kendaraan->nama = $request->nama;
        $jenis_kendaraan->save();
        return redirect('jenis_kendaraan/index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //buat perintah detail
        $data_jenis_kendaraan= Jenis_Kendaraan::all();
        return view('jenis_kendaraan.detail', ['data_jenis_kendaraan'=>$data_jenis_kendaraan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data_jenis_kendaraan= DB::table('jenis_kendaraan')->where('id',$id)->get();
        return view('jenis_kendaraan.edit', compact('data_jenis_kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //buat perintah update
        $jenis_kendaraan= Jenis_Kendaraan::find($request->id);
        $jenis_kendaraan->nama = $request->nama;
        $jenis_kendaraan->save();
        return redirect('jenis_kendaraan/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Jenis_Kendaraan::where('id', $id)->delete();
        return redirect('jenis_kendaraan/index');
    }
}
