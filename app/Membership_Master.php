<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership_Master extends Model
{
    public $timestamps = false;

    protected $fillable = ['country_id', 'state_id', 'city_id', 'membership_name', 'valid_days', 'actual_price',
        'discount_price', 'final_price', 'image', 'status', 'created_at', 'updated_at', 'deleted_at', 'payment_type', 'location_type',
        'emp_actual_price', 'emp_discount_type', 'emp_discount_price', 'emp_final_price', 'code_type', 'discount_type',
        'membership_type', 'reference_date'
    ];

    protected $table = 'membership_master';
}
