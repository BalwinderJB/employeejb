<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use App\Store_Master;

class EmployeeController extends Controller
{
    public function index()
    {

    }

    public function myCustomers()
    {
        $data = User::where('employee_id',auth::user()->id)->get();

//        dd($data);
        return view('Employee.my_customers',compact('data'));
    }

    public function myStores()
    {

//        $data = Store_Master::where('employee_id',auth::user()->id)->get();


        $data = Store_Master::where('employee_id',auth::user()->id)
            ->join('state_master', 'store_master.state_id', '=', 'state_master.id')
            ->join('city_master', 'store_master.city_id', '=', 'city_master.id')
            ->select('store_master.*','state_master.state_name','city_master.city_name','store_master.id as store_id')
            ->paginate(10);



        return view('Employee.my_store',compact('data'));

    }

    public function verify_shops()
    {
//        dd('Hii this is VERIFY SHOPS FUNCTION.');

        $shops = Store_Master::where('store_master2.is_paid', '=', 1)
            ->where('store_master2.status', '=', 2)
            ->join('state_master', 'store_master2.state_id', '=', 'state_master.id')
            ->join('city_master', 'store_master2.city_id', '=', 'city_master.id')
            ->select('store_master2.*','state_master.state_name','city_master.city_name','store_master2.id as store_id')
            ->paginate(10);

        return view('verify-shop',compact('shops'));
    }

    public function profile()
    {
        $data  = User::where('id',auth::user()->id)->get();

        return view('Employee.profile',compact('data'));
    }

}
