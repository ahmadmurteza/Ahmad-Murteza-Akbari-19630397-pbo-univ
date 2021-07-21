<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makul extends Model
{
    // use HasFactory;
    protected $table        = 'makul';
    protected $fillable     = ['kd_makul', 'nama_makul', 'sks'];
    public    $timestamps   = false;

    public function nilai() 
    {
        return $this->belongsTo(Nilai::class, 'makul_id', 'id');
    }
}
