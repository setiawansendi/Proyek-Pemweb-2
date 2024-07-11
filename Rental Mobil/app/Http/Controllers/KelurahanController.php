<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_kelurahan = Kelurahan::all();
// buat turunan model pasien
        return view('kelurahan.index', ['data_kelurahan'=>$list_kelurahan]);
// kirim  array data ke view Kelurahan idex menggunakan assosiatif array
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
        $kelurahan = new kelurahan();
        $kelurahan->nama = $request->nama;       
        $kelurahan->kec_id = $request->kec_id;       
        $kelurahan->save();
        return redirect('kelurahan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Kelurahan::all();
        
        $list_kelurahan = $data->where('id',$id);
        return view('kelurahan.detail', compact('list_kelurahan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $list_kelurahan = Kelurahan::where('id', $id)->get();
        return view('kelurahan.edit', compact('list_kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kelurahan = Kelurahan::find($request->id);
        $kelurahan->nama = $request->nama;       
        $kelurahan->kec_id = $request->kec_id;       
        $kelurahan->save();
        return redirect('kelurahan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kelurahan::where('id', $id)->delete();
        return redirect('kelurahan');
    }
}
