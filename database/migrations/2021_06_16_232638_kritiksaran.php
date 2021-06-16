<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kritiksaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //  Struktur tabel anggota bpd
        Schema::create('kritiksaran', function (Blueprint $table) {
            $table->id('id_kritiksaran');
            $table->string('nama',100);
            $table->string('no_hp',13);
            $table->string('pesan');
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
        Schema::dropIfExists('kritiksaran');
    }
}
