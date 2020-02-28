<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State_Master extends Model
{
    public $timestamps = false;

    protected $fillable = ['state_code', 'state_name', 'country_id', 'status'];

    protected $table = 'state_master';
}
