<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tugasan extends Model
{
	public $timestamp =true;
	protected $table="tugasans";
    protected $fillable=[ 'namaTugasan', 'dokumen', 'created_at' ];
}
