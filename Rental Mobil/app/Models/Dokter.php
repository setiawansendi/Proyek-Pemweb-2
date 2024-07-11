<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'dokter';
// table adalah property laravel yang didalam nya terkoneksi dengan
// nama table yang mau kita tampilkan data nya, 
// teteapi hanya dapat diakses didalam class model tersebut ataupun turunannya

protected $fillable = ['id','nama','gender','tmp_lahir','tgl_lahir','kategori','telpon','alamat','unit_kerja_id'];
// fillable adalah variable dalam model eloquent yang tugasnya
// membatasi kolom mana yang dapat di isi atau di input
}
