<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Angbpd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //  Struktur tabel anggota bpd
        Schema::create('angbpd', function (Blueprint $table) {
            $table->id('id_angbpd');
            $table->string('nip')->unique();
            $table->string('nama');
            $table->enum('jenkel', ['l','p']);
            $table->enum('agama', ['islam', 'kristen', 'konghucu', 'hindu', 'buddha']);
            $table->string('alamat');
            $table->string('jabatan');
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
        Schema::dropIfExists('angbpd');
    }
}
