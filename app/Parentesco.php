<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parentesco extends Model
{
    protected $fillable = [
		'parentesco',
	];


    public $timestamps = true;
}
