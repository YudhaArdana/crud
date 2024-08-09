<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class M_Mahasiswa extends Model
{
    use SoftDeletes;

    protected $table = 'mahasiswa'; //memilih tabel mahasiswa
    protected $fillable = [
        'nim',
        'nama',
        'alamat',
        'no telp'
    ]; //field yg akan digunakan

    protected $hidden;
}
