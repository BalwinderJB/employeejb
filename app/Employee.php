<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;

    protected $fillable = ['emp_type', 'working_hours', 'no_of_holidays', 'promo_code', 'name', 'phone',
        'phone2', 'email', 'file_no', 'is_team_lead', 'team_leader', 'retailer', 'dealer', 'hr', 'country', 'state', 'city', 'venue', 'basic_venue',
        'bdm', 'free_app_target_venue', 'free_shop_target_bdm', 'paid_app_target_venue', 'paid_shop_target_bdm', 'paid_app_target_venue_transaction',
        'paid_app_bdm_transaction', 'target_bonus_basic_venue_target', 'target_bonus_basic_venue_bonus', 'target_bonus_bdm_target', 'target_bonus_bdm_bonus',
        'spot_bonus_basic_venue_target', 'spot_bonus_basic_venue_bonus', 'spot_bonus_bdm_target', 'spot_bonus_bdm_bonus'
    ];

    protected $table = 'users';
}
