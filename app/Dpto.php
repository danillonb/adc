<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dpto extends Model
{
    
	protected $fillable = [
		'departamento',
		'igreja',
		'lider',
	];

    public $timestamps = true;
}
