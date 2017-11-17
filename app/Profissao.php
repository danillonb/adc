<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissao extends Model
{
	protected $fillable = [
		'profissao',
	];

    public $timestamps = true;
}
