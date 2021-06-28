<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // use HasFactory;
    protected $table        = 'mahasiswa';
    protected $fillable     = ['user_id', 'npm', 'tempat_lahir', 'tanggal_lahir', 'gender', 'telepon', 'alamat'];
    public    $timestamps   = false;
}
