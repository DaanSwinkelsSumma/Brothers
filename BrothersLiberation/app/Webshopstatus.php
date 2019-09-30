<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Webshopstatus extends Model
{
    protected $table = 'webshopstatus';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['status'];
}
