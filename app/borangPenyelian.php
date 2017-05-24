<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class borangPenyelian extends Model
{
    protected $fillable = [
		'nama', 'noMatrik', 'kategoriPelajar', 'program', 'namaPenyelia', 'laporanPerjumpaan', 'tarikhPerjumpaan', 'perjalananObjektif',  'objektif', 'tarikhPerjumpaanSeterusnya' ];
		  protected $attributes = ['pengesahan' => 'belum Disahkan' ];
}
// public function User()
// {
// 	return $this->belongTo(us)
// }