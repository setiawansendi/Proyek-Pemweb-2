<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
// table adalah property laravel yang didalam nya terkoneksi dengan
// nama table yang mau kita tampilkan data nya,
// tetapi hanya dapat di akses di dalam class model tersebut ataupun turunan nya

protected $fillable = ['id','tanggal','jumlah_bayar','peminjaman_id'];

//disable created_at and updated_at field
public $timestamps = false;

public function peminjaman(){
    return $this->belongsTo(Peminjaman::class);
}

// fillable adalah variable dalam model eloquent yang tugasnya
// membatasi kolom mana yang dapat di isi atau di input
}