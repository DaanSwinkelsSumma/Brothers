<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'fotocomments';
    protected $primaryKey = 'commentid';
    public $timestamps = false;
}
