<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users;
use App\User_Membership;
use DB;
use App\Sales_Today;

class HrController extends Controller
{

    public function daily_sales()
    {
        $data = Sales_Today::where('employee_id',18419)->get();

        $data = Sales_Today::join('user_membership', 'employeejb_sales_today.employee_id', '=', 'user_membership.user_id')
            ->select('purchase_date','no_of_sales','name','employeejb_sales_today.employee_id')
            ->where('transaction_id',1)
            ->get()->toArray();


        $data1 = User_Membership::select('purchase_date')
                ->select(DB::raw('SUM(price) as total_amount'))
                ->where('user_id', 18422)->get()->toArray();

        dd($data);
    }


    public function assigned_details()
    {
        //Total Apps and Active Apps
        //$id = Auth::user->id();
        $id = 1;
        $apps = Users::where('employee_id', '=', $id)->get();
        $totalapps = $apps->count();
        //Total Apps and Active Apps

        //Employee Salary
        $eid = 18419;
        $e_salary = Users::select('employeejb_basic_venue','employeejb_bdm','employeejb_free_app_target_venue',
            'employeejb_free_shop_target_bdm','employeejb_paid_app_target_venue', 'employeejb_paid_shop_target_bdm')
            ->where('id', '=', $eid)->get();
        //Employee Salary

        //299 Membership Users
        $price = 299;
        $user_memberships299 = User_Membership::where('price', '=', $price)
            ->where('employee_id', '=', $id)->get();
        $totalmemberships299 = $user_memberships299->count();
        //299 Membership Users

        //Other Memberships Users
        $other_memberships = User_Membership::where('price', '<>', $price)
            ->where('employee_id', '=', $id)
            ->get();
        $totalothermemberships = $other_memberships->count();
        //Other Memberships Users

        //Other Memberships Transaction's Total Amount
        $other_memberships_transaction_amount = User_Membership::select(DB::raw("SUM(price) as price"))
            ->where('price', '<>', $price)
            ->where('employee_id', '=', $id)
            ->get();
        //Other Memberships Transaction's Total Amount

//        //Calculate Spot Bonus And Target Bonus Block
//        $bonus = Users::select('employeejb_free_app_target_venue','employeejb_free_shop_target_bdm',
//            'employeejb_paid_app_target_venue', 'employeejb_paid_shop_target_bdm')
//            ->where('id', '=', $eid)->get();
//        dd($bonus);
        //Calculate Spot Bonus And Target Bonus Block

        $data = Sales_Today::join('user_membership', 'employeejb_sales_today.employee_id', '=', 'user_membership.user_id')
            ->select('no_of_sales','name','employeejb_sales_today.employee_id as emp_id',\DB::raw('COUNT(price) as transaction,SUM(price) as total_count'))
//            ->select(DB::raw('COUNT(no_of_sales) as sales,SUM(price) as total_count'))

            ->where('user_membership.transaction_id',1)
            ->groupBy('employeejb_sales_today.name','no_of_sales','employeejb_sales_today.employee_id')
            ->paginate(5);
//        dd($data);

//        $free_sales = Sales_Today::join('user_membership', 'employeejb_sales_today.employee_id', '=', 'user_membership.user_id')
//            ->select(DB::raw('COUNT(price) as transaction,SUM(price) as total_count'))
//            ->where('transaction_id',1)
//            ->groupby('employeejb_sales_today.employee_id')
//            ->get();

//        dd($free_sales);
        return view('salary-admin', compact('totalapps','totalmemberships299','totalothermemberships',
            'other_memberships','e_salary','eid','other_memberships_transaction_amount','data'));
    }
}
