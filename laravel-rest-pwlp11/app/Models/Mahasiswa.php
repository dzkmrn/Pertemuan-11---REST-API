<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table="mahasiswas"; //Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas 
    public $timestamps= false;
    protected $primaryKey = 'NIM'; // Memanggil isi DB dengan primarykey
    public $incrementing = false;

    protected $fillable = [
        'NIM',
        'Nama',
        'kelas_id',
        'Jurusan',
        'Email',
        'No_Handphone',
    ];
}
