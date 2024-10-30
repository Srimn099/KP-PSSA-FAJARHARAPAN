<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPosKeuanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pos_keuangan', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->string('kode_pos'); // Kolom kode_pos
            $table->string('nama_pos'); // Kolom nama_pos
            $table->enum('jenis_pos', ['ASET LANCAR', 'ASET TIDAK LANCAR', 'HUTANG DAN ASET BERSIH']);
            $table->double('saldo_pos'); // Kolom saldo_pos
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pos_keuangan');
    }
}
