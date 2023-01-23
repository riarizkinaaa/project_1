<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PekerjaanOrtu extends Model
{
    use HasFactory;
    protected $table='pekerjaan_ortus';
    protected $primaryKey='id_pekerjaan';
    protected $fillable=[
        'pekerjaan'
    ];
}
