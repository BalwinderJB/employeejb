<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales_Today extends Model
{
    public $timestamps = false;

    protected $fillable = ['employee_id', 'name', 'today_date', 'no_of_sales'];

    protected $table = 'employeejb_sales_today';
}
