<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Penduduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //  Struktur tabel penduduk
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id('id_penduduk');
            $table->string('nik')->unique();
            $table->string('nokk')->unique();
            $table->string('nama');
            $table->string('tmpt_lahir');
            $table->date('tgl_lahir');
            $table->enum('jenkel', ['l','p']);
            $table->enum('agama', ['islam', 'kristen', 'konghucu', 'hindu', 'buddha']);
            $table->string('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('kodepos');
            $table->string('pendidikan');
            $table->string('pekerjaan');
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
        // Fungsi untuk menghapus tabel penduduk
        Schema::dropIfExists('penduduk');
    }
}
