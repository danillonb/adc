<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ministerial extends Model
{
    protected $fillable = [
        'funcao',
        'descricao',
    ];

    public $timestamps = true;
}
