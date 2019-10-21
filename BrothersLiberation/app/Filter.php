<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    protected $table = 'webshop';
    protected $primaryKey = 'productcategorie';
    public $timestamps = false;
}
