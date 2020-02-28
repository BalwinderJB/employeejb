<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country_Master extends Model
{
    public $timestamps = false;

    protected $fillable = ['country_name', 'country_code', 'dial_code', 'flag', 'status', 'locale', 'currency_name', 'currency_code', '_order'];

    protected $table = 'country_master';
}
