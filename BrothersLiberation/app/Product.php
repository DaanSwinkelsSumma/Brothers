<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'webshop';
    protected $primaryKey = 'productid';
    public $timestamps = false;
    protected $fillable = ['productnaam', 'productomschrijving', 'productcategorie', 'productprijs'];
}
