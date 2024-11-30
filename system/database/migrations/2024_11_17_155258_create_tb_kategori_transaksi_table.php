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
        Schema::create('tb_kategori_transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kategori'); // Kolom kategori
            $table->enum('jenis_kategori', ['TABUNGAN', 'KAS','AKTIFITAS']);
            $table->double('saldo_awal');
            $table->double('tgl_awal');
            $table->double('tgl_akhir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_kategori_transaksi');
    }
};
