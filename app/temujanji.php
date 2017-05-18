<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class temujanji extends Model
{
	public $timestamp =false; //set true if using created at and updated at
	protected $table = 'temujanjis';
    protected $fillable=[ 'nama', 'aktiviti', 'masaMula', 'masaAkhir', 'pengesahan' ];
    protected $attributes = ['pengesahan' => 'Dipertimbangkan' ];
}
