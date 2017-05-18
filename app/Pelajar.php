<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Pelajar extends Model
{
	protected $table = 'pelajars';
    protected $fillable = [
							'nama',
							'noMatrik',
							'kategoriPelajar',
							'program',
							'noTelefon',
							'idDaftar',
							'gambar'
							];
							
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
