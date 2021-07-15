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
            $table->enum('jenis', ['skpanjangktp', 'skbuatktp', 'skpindah', 'skdatang', 'sklahir', 'skmati', 'skubahkk', 'sdtinggal', 'skrt', 'skdu', 'sku', 'spimb', 'spnikah', 'spnikahcp', 'spnikahdj', 'spskkm', 'spskck']);
            $table->longText('pesan');
            $table->string('fpengantar');
            $table->string('fktp');
            $table->string('fkk');
            // Berkas Pendukung
            $table->string('file1')->nullable();
            $table->string('file2')->nullable();
            $table->string('file3')->nullable();
            $table->string('file4')->nullable();
            $table->string('file5')->nullable();
            $table->string('filesk')->nullable();
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
