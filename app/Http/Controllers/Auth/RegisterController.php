<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
//            'emp_type' => $data['emp_type'],
//            'working_hours' => $data['working_hours'],
//            'no_of_holidays' => $data['no_of_holidays'],
//            'promo_code' => $data['promo_code'],
//            'phone' => $data['phone'],
//            'phone2' => $data['phone2'],
//            'team_leader' => $data['team_leader'],
//            'hr' => $data['hr'],
//            'country' => $data['country'],
//            'state' => $data['state'],
//            'city' => $data['city'],
//            'venue' => $data['venue'],
//            'basic_venue' => $data['basic_venue'],
//            'bdm' => $data['bdm'],
//            'free_app_target_venue' => $data['free_app_target_venue'],
//            'free_shop_target_bdm' => $data['free_shop_target_bdm'],
//            'paid_app_target_venue' => $data['paid_app_target_venue'],
//            'paid_shop_target_bdm' => $data['paid_shop_target_bdm'],
//            'target_bonus_basic_venue_target' => $data['target_bonus_basic_venue_target'],
//            'target_bonus_basic_venue_bonus' => $data['target_bonus_basic_venue_bonus'],
//            'target_bonus_bdm_target' => $data['target_bonus_bdm_target'],
//            'target_bonus_bdm_bonus' => $data['target_bonus_bdm_bonus'],
//            'spot_bonus_basic_venue_target' => $data['spot_bonus_basic_venue_target'],
//            'spot_bonus_basic_venue_bonus' => $data['spot_bonus_basic_venue_bonus'],
//            'spot_bonus_bdm_target' => $data['spot_bonus_bdm_target'],
//            'spot_bonus_bdm_bonus' => $data['spot_bonus_bdm_bonus'],
        ]);
    }
}
