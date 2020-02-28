<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TargetBonus extends Model
{
    public $timestamps = false;

    protected $fillable = ['target_bonus_basic_venue_target', 'target_bonus_basic_venue_bonus'];

    protected $table = 'employeejb_target_bonus';
}
