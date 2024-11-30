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
        Schema::create('tb_histori_saldo_trx', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kategori');
            $table->string('kode_trx');
            $table->double('debet');
            $table->double('kredit');
            $table->double('saldo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_histori_saldo_trx');
    }
};
