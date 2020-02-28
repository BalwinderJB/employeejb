<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store_Deal extends Model
{
    public $timestamps = false;

    protected $fillable = ['store_id', 'deal_type', 'deal_name', 'quantity', 'valid_type', 'number_of_days', 'from_date',
        'to_date', 'till_date', 'use_per_day', 'valid_people', 'from_time', 'to_time',
        'payment_type', 'days_type', 'valid_days', 'actual_price', 'discount_type', 'discount_price', 'final_price',
        'handling_fees', 'coins_given', 'coins_used', 'deal_image', 'deal_description', 'deal_help', 'created_at', 'updated_at', 'deleted_at',
        'status', 'price_type', 'is_free_bies', 'is_special_combo', 'is_buy_1_get_1', 'is_50_percent_off_on_second', 'is_buy_2_get_1', 'is_food',
        'is_flat_rupee_off', 'is_percent_off', 'is_combo', 'is_buy_3_get_1', 'is_other'
    ];

    protected $table = 'store_deal';
}
