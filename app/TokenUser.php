<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TokenUser extends Model
{
    protected $table = 'tokenusers';
    protected $fillable = ['email', 'token'];
}
