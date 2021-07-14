<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Surat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //  Struktur tabel surat online
        Schema::create('surat', function (Blueprint $table) {
            $table->id('id_surat');
            $table->bigInteger('id_penduduk');
            $table->bigInteger('id_angbpd')->nullable();
            $table->enum('jenis', ['sku', 'sktm', 'skm', 'skbpm', 'sklahir', 'skmati', 'skbn', 'skp', 'skht']);
            $table->longText('pesan');
            $table->string('fpengantar');
            $table->string('fktp');
            $table->string('fkk');
            // Berkas Pendukung
            $table->string('fusaha')->nullable();
            $table->string('fnikah')->nullable();
            $table->string('fketlahir')->nullable();
            $table->string('fktpmati')->nullable();
            $table->string('fketmati')->nullable();
            $table->string('fbuktipbb')->nullable();
            // ./Berkas Pendukung
            $table->enum('status', ['pending', 'complete']);
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
        // Fungsi untuk menghapus tabel surat
        Schema::dropIfExists('surat');
    }
}
