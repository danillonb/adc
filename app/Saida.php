<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saida extends Model
{
	protected $fillable = [
		'saida',
	];

    public $timestamps = true;
}
