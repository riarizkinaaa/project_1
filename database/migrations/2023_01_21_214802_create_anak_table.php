<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anak', function (Blueprint $table) {
            $table->id('id_anak');
            $table->integer('id_survior');
            $table->integer('id_pekerjaan_wali');
            $table->integer('id_pendidikan');
            $table->integer('id_kecamatan');
            $table->integer('id_desa');
            $table->integer('id_dusun');
            $table->integer('id_prestasi_formal');
            $table->integer('id_prestasi_non_formal');
            $table->integer('id_kelas_pendidikan');
            $table->string('nama_lengkap');
            $table->bigInteger('no_kk');
            $table->bigInteger('NIK');
            $table->string('alamat');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->dateTime('tgl_lahir');
            $table->integer('usia');
            $table->string('nama_wali');
            $table->string('alamat_sekolah');
            $table->integer('status_anak');
            $table->string('foto_anak');
            $table->integer('status_verifikasi');
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
        Schema::dropIfExists('anak');
    }
};
