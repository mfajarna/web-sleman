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
        Schema::create('tb_peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('instansi')->nullable();
            $table->string('acara')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('surat_permohonan')->nullable();
            $table->string('ktp')->nullable();
            $table->date('dari_tanggal')->nullable();
            $table->date('sampe_tanggal')->nullable();
            $table->string('waktu_peminjaman')->nullable();
            $table->string('status')->default('Belum Diverifikasi');
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
        Schema::dropIfExists('tb_peminjaman');
    }
};
