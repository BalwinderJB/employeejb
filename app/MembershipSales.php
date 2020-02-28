<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembershipSales extends Model
{
    public $timestamps = false;

    protected $fillable = ['card_number', 'amount', 'discount', 'membership_price', 'free_bies', 'comment', 'rating'];

    protected $table = 'employeejb_membership_sales';
}
