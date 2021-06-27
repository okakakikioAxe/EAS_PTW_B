<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_barang');
            $table->integer('harga');
            $table->integer('rating');
            $table->integer('id_kategori')->unsigned();
            $table->integer('terjual');
            $table->integer('penilaian');
            $table->integer('stok');
            $table->string('merk');
            $table->longText('deskripsi')->nullable();
            $table->string('deskripsi_singkat');
            $table->string('keterangan_varian')->nullable();
            $table->string('varian_1')->nullable();
            $table->string('varian_2')->nullable();
            $table->string('varian_3')->nullable();
            $table->string('varian_4')->nullable();
            $table->string('varian_5')->nullable();
            $table->string('keterangan_gambar')->nullable();
            $table->string('gambar_1')->nullable();
            $table->string('gambar_2')->nullable();
            $table->string('gambar_3')->nullable();
            $table->string('gambar_4')->nullable();
            $table->string('gambar_5')->nullable();
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
        Schema::dropIfExists('barang');
    }
}
