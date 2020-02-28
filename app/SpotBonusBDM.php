<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpotBonusBDM extends Model
{
    public $timestamps = false;

    protected $fillable = ['spot_bonus_bdm_target', 'spot_bonus_bdm_bonus'];

    protected $table = 'employeejb_spot_bdm_bonus';
}
