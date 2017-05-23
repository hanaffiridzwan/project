<?php

namespace App;
use App\Penyelia;
use App\Pelajar;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable; 

    protected $fillable = [
        'name', 'email', 'password', 'userRole'
    ];
    protected $hidden = [
        'password', 'remember_token'
    ];
    public function Tugasan()
    {
        return $this->hasMany(Tugasan::class);
    }
    public function borangPenyelian()
    {
        return $this->hasMany(borangPenyelian::class);
    }
    public function laporanPrestasi()
    {
        return $this->hasMany(laporanPrestasi::class);
    }
    public function temujanji()
    {
        return $this->hasMany(temujanji::class);
    }
    
  public function penyelia()
    {
        return $this->hasOne(Penyelia::class, 'user_id');
    }

    public function pelajar()
    {
        return $this->hasOne(Pelajar::class, 'user_id');
    }

    public function profile()
    {
        if ($this->userRole == 'pelajar')
        {
            return $this->pelajar();
        } else {
            return $this->penyelia();
        }
    }

}
