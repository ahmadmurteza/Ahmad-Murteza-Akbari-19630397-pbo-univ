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

    public function user() 
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function nilai() 
    {
        return $this->belongsTo(Nilai::class, 'mahasiswa_id', 'id');
    }
}
