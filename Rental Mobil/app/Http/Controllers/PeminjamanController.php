<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Armada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_peminjaman = DB::table('peminjaman')->join('armada','peminjaman.armada_id','=','armada.id')
        ->select('peminjaman.*','armada.merk as merk_armada')
        ->get();

        $armadas = Armada::all();

// buat turunan model armada
        return view('peminjaman.index',compact('data_peminjaman','armadas'));
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
        $peminjaman = new Peminjaman();
        $peminjaman->nama_peminjam = $request->nama_peminjam;
        $peminjaman->ktp_peminjam = $request->ktp_peminjam;
        $peminjaman->keperluan_pinjam = $request->keperluan_pinjam;
        $peminjaman->mulai = $request->mulai;
        $peminjaman->selesai = $request->selesai;
        $peminjaman->biaya = $request->biaya;
        $peminjaman->armada_id = $request->armada_id;
        $peminjaman->komentar_pinjam = $request->komentar_pinjam;
        $peminjaman->status_pinjam = $request->status_pinjam;
        $peminjaman->save();
        return redirect('peminjaman/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //tambahkan detail armada
        $data = DB::table('peminjaman')->join('armada','peminjaman.armada_id','=','armada.id')
        ->select('peminjaman.*','armada.merk as merk_armada')->get();
        $data_peminjaman = $data->where('id',$id);
        return view('peminjaman.detail',compact('data_peminjaman'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit data armada
        $data_peminjaman = DB::table('peminjaman')->where('id',$id)->get();
        $armadas = DB::table('armada')->get();
        return view('peminjaman.edit', compact('data_peminjaman','armadas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //buat update data
        $peminjaman = Peminjaman::find($request->id);
        $peminjaman->nama_peminjam = $request->nama_peminjam;
        $peminjaman->ktp_peminjam = $request->ktp_peminjam;
        $peminjaman->keperluan_pinjam = $request->keperluan_pinjam;
        $peminjaman->mulai = $request->mulai;
        $peminjaman->selesai = $request->selesai;
        $peminjaman->biaya = $request->biaya;
        $peminjaman->armada_id = $request->armada_id;
        $peminjaman->komentar_pinjam = $request->komentar_pinjam;
        $peminjaman->status_pinjam = $request->status_pinjam;
        $peminjaman->save();
        return redirect('peminjaman/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('peminjaman')->where('id',$id)->delete();
        return redirect('peminjaman/index');
    }
}
