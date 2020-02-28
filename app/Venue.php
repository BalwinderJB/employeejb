<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    public $timestamps = false;

    protected $fillable = ['name'];

    protected $table = 'employeejb_venue_master';
}
