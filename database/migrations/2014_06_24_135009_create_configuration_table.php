<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class CreateConfigurationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rekening', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('user')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_bank')->references('id')->on('bank')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('barang', function (Blueprint $table) {
            $table->foreign('id_kategori')->references('id')->on('kategori')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('keranjang', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('user')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_barang')->references('id')->on('barang')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_transaksi')->references('id')->on('transaksi')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('pesan', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('user')->onUpdate('cascade')->onDelete('cascade');
        });

        DB::table('bank')->insert([
            ['nama_bank' => 'mandiri', 'ppn' => 0.5],
            ['nama_bank' => 'bca', 'ppn' => 0.6],
            ['nama_bank' => 'bri', 'ppn' => 0.4], 
            ['nama_bank' => 'bni', 'ppn' => 0.5],
        ]);

        //DB::table('user')->insert([
        //    ['nama' => 'admin', 
        //    'username' => 'admin',
        //    'email' => 'admin',
        //    'password' => 'admin',
        //    'admin' => 1,
        //    ]
        //]);
        /*$user = new User;
        $user->nama_user = 'admin';
        $user->username = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = 'admin';
        $user->level = 'admin';
        $user->save();*/

        DB::table('kategori')->insert([
            ['nama_kategori' => 'Pakaian Pria'],
            ['nama_kategori' => 'Pakaian Wanita'],
            ['nama_kategori' => 'Hoodie'],
            ['nama_kategori' => 'Jaket'],
            ['nama_kategori' => 'Pakaian Bayi'],
            ['nama_kategori' => 'Pakaian Olahraga'],
            ['nama_kategori' => 'Sepatu Pria'],
            ['nama_kategori' => 'Sepatu Wanita'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
