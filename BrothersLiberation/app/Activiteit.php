<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activiteit extends Model
{
    protected $table = 'agenda';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['omschrijving', 'datum', 'starttijd', 'eindtijd'];
}
