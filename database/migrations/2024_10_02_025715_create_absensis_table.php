<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->id(); // ID absensi
            $table->unsignedBigInteger('id_pegawai'); // ID pegawai
            $table->string('nama'); // Nama pegawai
            $table->date('tanggal'); // Tanggal absensi
            $table->time('jam_masuk'); // Jam masuk
            $table->time('jam_pulang'); // Jam pulang
            $table->string('status'); // Status kehadiran
            $table->timestamps(); // Waktu pembuatan dan update data
            
            // Anda bisa menambahkan foreign key jika diperlukan
            // $table->foreign('id_pegawai')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensis');
    }
};
