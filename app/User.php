<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable implements JWTSubject
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'emp_type', 'working_hours', 'no_of_holidays', 'promo_code', 'phone',
        'phone2', 'team_leader', 'hr', 'country', 'state', 'city', 'venue', 'basic_venue', 'bdm', 'free_app_target_venue',
        'free_shop_target_bdm', 'paid_app_target_venue', 'paid_shop_target_bdm', 'target_bonus_basic_venue_target', 'target_bonus_basic_venue_bonus',
        'target_bonus_bdm_target', 'target_bonus_bdm_bonus', 'spot_bonus_basic_venue_target', 'spot_bonus_basic_venue_bonus', 'spot_bonus_bdm_target',
        'spot_bonus_bdm_bonus'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
