<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpotBonus extends Model
{
    public $timestamps = false;

    protected $fillable = ['spot_bonus_basic_venue_target', 'spot_bonus_basic_venue_bonus'];

    protected $table = 'employeejb_spot_bonus';
}
