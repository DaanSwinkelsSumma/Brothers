<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = 'galerij';
    protected $primaryKey = 'fotoid';
    public $timestamps = false;
}
