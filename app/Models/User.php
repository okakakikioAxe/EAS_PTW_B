<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends \Eloquent implements Authenticatable
{
    use AuthenticableTrait;
    protected $table = 'user';

    protected $fillable = [
        'nama_user',
        'username', //baru
        'alamat',
        'no_telepon',
        'tanggal_lahir',
        'level', //baru'
        'email',
        'password',
    ];
    
}
