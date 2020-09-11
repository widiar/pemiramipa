<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nama', 'nim', 'ktm', 'prodi'];
    protected $primaryKey = 'nim';
    public function user()
    {
        return $this->hasOne('App\User', 'nim');
    }
}
