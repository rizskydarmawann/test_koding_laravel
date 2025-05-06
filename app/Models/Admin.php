<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'email',
        'tanggal_lahir',
        'jenis_kelamin',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getNamaLengkapAttribute()
    {
        return $this->nama_depan . ' ' . $this->nama_belakang;
    }
}