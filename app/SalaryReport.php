<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalaryReport extends Model
{
    public $timestamps = false;

    protected $fillable = ['basic_venue', 'target_achieved', 'target', 'spot', 'spot_bonus', 'target_bonus', 'gross'];

    protected $table = 'employeejb_salary_details';
}
