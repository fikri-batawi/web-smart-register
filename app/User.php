<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $tableName    = 'users';
    protected $fillable     = [
        'username', 'phone', 'gender', 'birth_date', 'address', 'email', 'password', 'role',
    ];
}
