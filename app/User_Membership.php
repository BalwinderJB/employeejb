<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Membership extends Model
{
    public $timestamps = false;

    protected $fillable = ['user_id', 'membership_id', 'membership_code_id', 'purchase_date', 'valid_date', 'price', 'transaction_id',
        'transaction_status', 'created_at', 'updated_at', 'deleted_at', 'code_type'
    ];

    protected $table = 'user_membership';
}
