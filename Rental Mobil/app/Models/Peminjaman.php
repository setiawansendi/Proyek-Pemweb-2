<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
// table adalah property laravel yang didalam nya terkoneksi dengan
// nama table yang mau kita tampilkan data nya,
// tetapi hanya dapat di akses di dalam class model tersebut ataupun turunan nya

protected $fillable = ['id','nama_peminjam','ktp_peminjam','keperluan_pinjam','mulai','selesai','biaya','armada_id','komentar_peminjam','status_pinjam'];

//disable created_at and updated_at field
public $timestamps = false;

public function armada(){
    return $this->belongsTo(Armada::class);
}

// fillable adalah variable dalam model eloquent yang tugasnya
// membatasi kolom mana yang dapat di isi atau di input
}