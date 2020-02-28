<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership_Type extends Model
{
    public $timestamps = false;

    protected $fillable = ['type_name', 'number_of_codes', 'emp_original_price', 'emp_discount_price', 'emp_discount_type', 'emp_final_price',
        'customer_original_price', 'customer_discount_price', 'customer_discount_type', 'customer_final_price', 'created_at', 'updated_at', 'deleted_at'
    ];

    protected $table = 'membership_type';
}
