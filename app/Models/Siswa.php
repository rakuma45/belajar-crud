<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    // public $table = 'siswa';
    // public $fillable = [
    //     'nama', 'nomor_induk', 'agama_id', 'tgl_lahir', 'alamat'
    // ];

    // public $timestamp = true;

    public function agama(){
        return $this->belongsTo(Agama::class);
    }
}
