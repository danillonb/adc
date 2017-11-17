<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assinatura extends Model
{
    
	protected $fillable = [
		'assinatura',
		'cargo',
		'registro',
	];

    public $timestamps = true;
}
