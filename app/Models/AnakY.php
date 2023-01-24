<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnakY extends Model
{
    use HasFactory;
    protected $table='anak_y_s';
    protected $primaryKey='id_anak';
    protected $fillable =[
        'id_anak',
        'id_survior',
        'id_pekerjaan_wali',
        'id_pendidikan',
        'id_kecamatan',
        'id_desa',
        'id_dusun',
        'id_prestasi_formal',
        'id_non_prestasi_formal',
        'id_kelas_pendidikan',
        'nama_lengkap',
        'nomor_kk',
        'nomor_nik',
        'alamat',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'usia',
        'nama_wali',
        'alamat_sekolah',
        'status_anak',
        'foto_anak',
        'status_verifikasi',
        'latitude',
        'longitude',
        'tahun'

    ];
}
