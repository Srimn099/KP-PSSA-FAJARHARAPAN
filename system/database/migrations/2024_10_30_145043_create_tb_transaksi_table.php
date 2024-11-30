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
        Schema::create('tb_transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('kode_trx'); // Kolom kode_pos
            $table->string('kode_kategori'); // Kolom kode_pos
            $table->enum('jenis_trx', ['DEBET', 'KREDIT']);
            $table->double('nominal_trx');
            $table->date('tgl_trx');
            $table->longText('keterangan_trx');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_transaksi');
    }
};
