<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPengelolaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pengelola', function (Blueprint $table) {
            $table->id(); // Menggunakan id() untuk auto-increment bigint UNSIGNED
            $table->string('foto');
            $table->string('no_ktp')->nullable();
            $table->string('nama');
            $table->enum('jk', ['Laki-laki', 'Perempuan']);
            $table->integer('usia');
            $table->text('alamat')->nullable();
            $table->string('jabatan');
            $table->timestamps(); // Ini akan membuat created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pengelola');
    }
}
