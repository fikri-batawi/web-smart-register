<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $tableName    = 'registers';
    protected $fillable     = [
        'user_id', 'nik', 'status',
    ];
}
