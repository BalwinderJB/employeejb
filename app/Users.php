<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public $timestamps = false;

    protected $fillable = ['city_id', 'country_id', 'phone_number', 'name', 'email', 'otp_code', 'password', 'final_price',
        'remember_token', 'device_id', 'created_at', 'updated_at', 'user_type', 'reference_id', 'term_condition', 'privacy_policy',
        'status', 'image', 'passcode', 'state_id', 'dob', 'address', 'pincode', 'is_rating', 'permanent_address1', 'permanent_address2',
        'permanent_address3', 'current_address1', 'current_address2', 'current_address3', 'device_type', 'employement_status',
        'blood_group', 'marital_status',
        'employeejb_venue', 'employeejb_basic_venue', 'employeejb_bdm', 'employeejb_free_app_target_venue', 'employeejb_free_shop_target_bdm',
        'employeejb_paid_app_target_venue', 'employeejb_paid_shop_target_bdm', 'employeejb_target_bonus_basic_venue_target',
        'employeejb_target_bonus_basic_venue_bonus', 'employeejb_target_bonus_bdm_target', 'employeejb_target_bonus_bdm_bonus',
        'employeejb_spot_bonus_basic_venue_target', 'employeejb_spot_bonus_basic_venue_bonus', 'employeejb_spot_bonus_bdm_target',
        'employeejb_spot_bonus_bdm_bonus', 'employeejb_phone2', 'employeejb_team_leader', 'employeejb_hr', 'employeejb_working_hours',
        'employeejb_no_of_holidays', 'employeejb_promo_code', 'employeejb_paid_app_target_venue_transaction', 'employeejb_paid_app_bdm_transaction',
    ];

    protected $table = 'users';
}
