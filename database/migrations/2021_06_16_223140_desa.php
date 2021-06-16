<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Desa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //  Struktur tabel anggota bpd
        Schema::create('desa', function (Blueprint $table) {
            $table->id('id_desa');
            $table->string('nama',100);
            $table->year('tahun_bentuk');
            $table->string('dasar_hukum');
            $table->string('no_kode_wilayah');
            $table->string('kecamatan',50);
            $table->string('kota',50);
            $table->string('provinsi',50);
            $table->string('kode_pos',5);
            $table->datetime('created_at')->nullable();
            $table->datetime('updated_at')->nullable(); 
            $table->datetime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Fungsi untuk menghapus tabel anggota bpd
        Schema::dropIfExists('desa');
    }
}
