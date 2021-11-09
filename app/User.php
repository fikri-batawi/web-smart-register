<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $tableName    = 'users';
    protected $fillable     = [
        'username', 'phone', 'gender', 'birth_date', 'address', 'email', 'password', 'role',
    ];
}
