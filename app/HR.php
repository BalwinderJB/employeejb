<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HR extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'email', 'phone', 'address', 'salary'];

    protected $table = 'employeejb_hr';
}
