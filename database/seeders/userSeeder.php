<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->nama_user = 'admin';
        $user->username = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('admin');
        $user->level = 'admin';
        $user->save();

        $user = new User;
        $user->nama_user = 'lukman';
        $user->username = 'lukman';
        $user->email = 'lukman@gmail.com';
        $user->password = bcrypt('lukman123');
        $user->level = 'pembeli';
        $user->save();
    }
}
