<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TargetBonusBDM extends Model
{
    public $timestamps = false;

    protected $fillable = ['target_bonus_bdm_target', 'target_bonus_bdm_bonus'];

    protected $table = 'employeejb_target_bdm_bonus';
}
