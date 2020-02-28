<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TravelExpenses extends Model
{
    public $timestamps = false;

    protected $fillable = ['emp_id', 'date', 'amount', 'comments', 'image'];

    protected $table = 'employeejb_travel_expenses';
}
