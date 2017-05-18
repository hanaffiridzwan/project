<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporanPrestasi extends Model
{
    protected $fillable=[ 'namaPelajar', 'namaPenyelia', 'tarikh', 'tajukKajian', 'kemajuan', 'dapatan', 'huraianAktiviti', 'pelan', 'komen' , 'komenPenyelia', 'KemajuanPelajar', 'pelanKajian' ];
}
// public function user() {
// 	return $this->belongTo(User::class);
// }