<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpTypeWorkHours extends Model
{
    public $timestamps = false;

    protected $fillable = ['emp_type', 'working_hours'];

    protected $table = 'employeejb_working_hours';
}
