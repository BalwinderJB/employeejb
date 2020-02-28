<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City_Master extends Model
{
    public $timestamps = false;

    protected $fillable = ['city_code', 'city_name', 'status', 'state_id', 'country_id'];

    protected $table = 'city_master';
}
