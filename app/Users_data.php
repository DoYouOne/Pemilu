<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_data extends Model
{
    protected $table = 'users_data';
    protected $fillable = [
        'id_users', 'nim', 'nama', 'vote'
    ];
}
