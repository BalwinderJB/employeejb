<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerAdd extends Model
{
    public $timestamps = false;

    protected $fillable = ['cust_name', 'cust_number'];

    protected $table = 'employeejb_customers';
}
