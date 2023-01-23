<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table='kelas';
    protected $primaryKey='id_kelas_pendidikan';
    protected $fillable=[
        'kelas_pendidikan'
    ];
}
