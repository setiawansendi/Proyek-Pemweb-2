<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armada extends Model
{
    use HasFactory;
    protected $table = 'armada';
// table adalah property laravel yang didalam nya terkoneksi dengan
// nama table yang mau kita tampilkan data nya,
// tetapi hanya dapat di akses di dalam class model tersebut ataupun turunan nya

protected $fillable = ['id','merk','nopol','thn_beli','deskripsi','kapasitas_kursi','rating','jenis_kendaraan_id'];

//disable created_at and updated_at field
public $timestamps = false;

public function jenis_kendaraan(){
    return $this->belongsTo(Jenis_Kendaraan::class);
}

// fillable adalah variable dalam model eloquent yang tugasnya
// membatasi kolom mana yang dapat di isi atau di input
}