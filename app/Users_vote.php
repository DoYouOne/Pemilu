<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_vote extends Model
{
    protected $table = 'users_vote';
    protected $fillable = [
        'kandidat', 'jumlah'
    ];
}
