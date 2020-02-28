<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership_Type_Detail extends Model
{
    public $timestamps = false;

    protected $fillable = ['membership_type_id', 'code_name', 'code_date', 'code_type', 'is_used', 'status',
        'membership_id', 'user_id', 'assign_date', 'remarks', 'created_at', 'updated_at', 'deleted_at'
    ];

    protected $table = 'membership_type_detail';
}
