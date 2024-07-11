<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_pembayaran = DB::table('pembayaran')->join('peminjaman','pembayaran.peminjaman_id','=','peminjaman.id')
        ->select('pembayaran.*','peminjaman.nama_peminjam as nama_peminjam_peminjaman')
        ->get();

        $peminjamans = Peminjaman::all();

// buat turunan model armada
        return view('pembayaran.index',compact('data_pembayaran','peminjamans'));
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
        $pembayaran = new Pembayaran();
        $pembayaran->tanggal = $request->tanggal;
        $pembayaran->jumlah_bayar = $request->jumlah_bayar;
        $pembayaran->peminjaman_id = $request->peminjaman_id;
        $pembayaran->save();
        return redirect('pembayaran/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //tambahkan detail armada
        $data = DB::table('pembayaran')->join('peminjaman','pembayaran.peminjaman_id','=','peminjaman.id')
        ->select('pembayaran.*','peminjaman.nama_peminjam as nama_peminjam_peminjaman')->get();
        $data_pembayaran = $data->where('id',$id);
        return view('pembayaran.detail',compact('data_pembayaran'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit data pembayaran
        $data_pembayaran = DB::table('pembayaran')->where('id',$id)->get();
        $peminjamans = DB::table('peminjaman')->get();
        return view('pembayaran.edit', compact('data_pembayaran','peminjamans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //buat update data
        $pembayaran = Pembayaran::find($request->id);
        $pembayaran->tanggal = $request->tanggal;
        $pembayaran->jumlah_bayar = $request->jumlah_bayar;
        $pembayaran->peminjaman_id = $request->peminjaman_id;
        $pembayaran->save();
        return redirect('pembayaran/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('pembayaran')->where('id',$id)->delete();
        return redirect('pembayaran/index');
    }
}
