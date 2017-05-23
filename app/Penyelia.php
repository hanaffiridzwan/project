<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Penyelia extends Model
{
	protected $table = 'penyelias';
    protected $fillable = [
							'nama',
							'jabatan',
							'noBilik',
							'noTelefon',
							'gambar'
							];

/**
*
*/
public function user()
{
return $this->belongsTo(User::class);
}
}