<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAsetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_aset', function (Blueprint $table) {
            $table->id();
            $table->char('kode_aset', 20);
            $table->string('nama_aset');
            $table->string('bahan');
            $table->string('merk');
            $table->string('satuan');
            $table->double('harga');
            $table->double('qty');
            $table->double('total');
            $table->string('kondisi');
            $table->string('lokasi_simpan');
            $table->date('tgl_peroleh');
            $table->enum('jenis_aset',['TETAP','TIDAK TETAP']);
            $table->longText('keterangan');
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
        Schema::dropIfExists('tb_aset');
    }
}
