<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class borangPenyelian extends Model
{
    protected $fillable = [
		'nama', 'noMatrik', 'kategoriPelajar', 'program', 'namaPenyelia', 'laporanPerjumpaan', 'tarikhPerjumpaan', 'perjalananObjektif',  'objektif', 'tarikhPerjumpaanSeterusnya' ];
}
// public function User()
// {
// 	return $this->belongTo(us)
// }