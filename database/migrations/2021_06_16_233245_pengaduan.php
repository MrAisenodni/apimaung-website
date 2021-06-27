<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pengaduan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //  Struktur tabel anggota bpd
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id('id_pengaduan');
            $table->bigInteger('id_penduduk');
            $table->bigInteger('id_angbpd')->nullable();
            $table->string('judul',100);
            $table->longText('pesan');
            $table->longText('balas_pesan')->nullable();
            $table->date('tgl_kejadian');
            $table->string('lokasi',100);
            $table->string('instansi',100);
            $table->enum('status', ['pending', 'complete']);
            $table->enum('kategori', ['penting', 'umum']);
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
        Schema::dropIfExists('pengaduan');
    }
}