<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Integer;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anak_y_s', function (Blueprint $table) {
            $table->id('id_anak');
            $table->Integer('id_survior');
            $table->Integer('id_pekerjaan_wali');
            $table->Integer('id_pendidikan');
            $table->Integer('id_kecamatan');
            $table->Integer('id_desa');
            $table->Integer('id_dusun');
            $table->Integer('id_prestasi_formal');
            $table->Integer('id_non_prestasi_formal');
            $table->Integer('id_non_kelas_pendidikan');
            $table->string('nama_lengkap');
            $table->bigInteger('nomor_kk');
            $table->bigInteger('nomor_nik');
            $table->string('alamat');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->dateTime('tgl_lahir');
            $table->integer('usia');
            $table->string('nama_wali');
            $table->string('alamat_sekolah');
            $table->integer('status_anak');
            $table->string('foto_anak');
            $table->integer('status anak');
            $table->integer('tahun');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anak_y_s');
    }
};
