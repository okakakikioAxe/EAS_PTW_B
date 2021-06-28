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
        Schema::table('transaksi', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('user')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('barang', function (Blueprint $table) {
            $table->foreign('id_kategori')->references('id')->on('kategori')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('keranjang', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('user')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_barang')->references('id')->on('barang')->onUpdate('cascade')->onDelete('cascade');
        });


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

        $User = new User;
                $User->nama_user = 'admin';
                $User->username = 'admin1';
                $User->email = 'admin@gmail.com';
                $User->tanggal_lahir = '2001-03-12';
                $User->alamat = "papar";
                $User->kelamin = "laki-laki";
                $User->password = bcrypt('admin');
                $User->level = 'admin';
                $User->save();

            $User = new User;
                $User->nama_user = 'pembeli1';
                $User->username = 'pembeli1';
                $User->email = 'pembeli1@gmail.com';
                $User->tanggal_lahir = '2001-03-13';
                $User->alamat = "kediri";
                $User->kelamin = "laki-laki";
                $User->password = bcrypt('1234');
                $User->level = 'pembeli';
                $User->save();

            $User = new User;
                $User->nama_user = 'pembeli2';
                $User->username = 'pembeli2';
                $User->email = 'pembeli2@gmail.com';
                $User->tanggal_lahir = '2001-03-14';
                $User->alamat = "kediri";
                $User->kelamin = "laki-laki";
                $User->password = bcrypt('1234');
                $User->level = 'pembeli';
                $User->save();

            $User = new User;
                $User->nama_user = 'pembeli3';
                $User->username = 'pembeli3';
                $User->email = 'pembeli3@gmail.com';
                $User->tanggal_lahir = '2001-03-15';
                $User->alamat = "surabaya";
                $User->kelamin = "perempuan";
                $User->password = bcrypt('1234');
                $User->level = 'pembeli';
                $User->save();
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
