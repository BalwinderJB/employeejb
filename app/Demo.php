<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    public $timestamps = false;

    protected $fillable = ['demo1', 'demo2'];

    protected $table = 'demo';
}
