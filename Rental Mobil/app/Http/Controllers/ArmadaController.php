<?php

namespace App\Http\Controllers;

use App\Models\Jenis_Kendaraan;
use App\Models\Armada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArmadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_armada = DB::table('armada')->join('jenis_kendaraan','armada.jenis_kendaraan_id','=','jenis_kendaraan.id')
        ->select('armada.*','jenis_kendaraan.nama as nama_jenis_kendaraan')
        ->get();

        $jenis_kendaraans = Jenis_Kendaraan::all();

// buat turunan model armada
        return view('armada.index',compact('data_armada','jenis_kendaraans'));
// kirim array data ke view armada index menggunakan assosiatif array
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
        $armada = new Armada();
        $armada->merk = $request->merk;
        $armada->nopol = $request->nopol;
        $armada->thn_beli = $request->thn_beli;
        $armada->deskripsi = $request->deskripsi;
        $armada->kapasitas_kursi = $request->kapasitas_kursi;
        $armada->rating = $request->rating;
        $armada->jenis_kendaraan_id = $request->jenis_kendaraan_id;
        $armada->save();
        return redirect('armada/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //tambahkan detail armada
        $data = DB::table('armada')->join('jenis_kendaraan','armada.jenis_kendaraan_id','=','jenis_kendaraan.id')
        ->select('armada.*','jenis_kendaraan.nama as nama_jenis_kendaraan')->get();
        $data_armada = $data->where('id',$id);
        return view('armada.detail',compact('data_armada'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit data armada
        $data_armada = DB::table('armada')->where('id',$id)->get();
        $jenis_kendaraans = DB::table('jenis_kendaraan')->get();
        return view('armada.edit', compact('data_armada','jenis_kendaraans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //buat update data
        $armada = Armada::find($request->id);
        $armada->merk = $request->merk;
        $armada->nopol = $request->nopol;
        $armada->thn_beli = $request->thn_beli;
        $armada->deskripsi = $request->deskripsi;
        $armada->kapasitas_kursi = $request->kapasitas_kursi;
        $armada->rating = $request->rating;
        $armada->jenis_kendaraan_id = $request->jenis_kendaraan_id;
        $armada->save();
        return redirect('armada/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('armada')->where('id',$id)->delete();
        return redirect('armada/index');
    }
}
