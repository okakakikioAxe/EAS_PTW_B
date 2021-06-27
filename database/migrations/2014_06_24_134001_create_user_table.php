<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto')->nullable();
            $table->string('nama_user',40);
            $table->string('alamat')->nullable();
            $table->string('no_telepon',15)->nullable();
            $table->string('kelamin')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('username',40);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('level');



            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
