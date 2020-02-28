<?php

namespace App\Http\Controllers;

use App\Store_Master;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Users;
use App\User_Membership;
use App\Country_Master;
use App\State_Master;
use App\City_Master;
use App\Transaction_Master;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class ReportingController extends Controller
{
    public function register_users_list()
    {
        // Fetch Current date's + Last 7 days Data
//        $users = Users::where('created_at', '>=', Carbon::today()->subDays(7)->toDate())
//            ->where('created_at', '<=', Carbon::today()->toDate())->get();

        // Fetch Data from given date to latest date.
        $today = Carbon::today();
        $from = '2019-05-22';
        $users = Users::where('created_at', '>=', $from)
            ->where('created_at', '<=', $today)->get();

        echo "<pre>"; print_r($users);
    }

    public function todays_total_memberships()
    {
        $today = Carbon::today();

        //Fetch Today's Total Memberships of particular price.
//        $from = '2019-01-01';
//        $price = 299;
//        $no_of_users = User_Membership::where('price', '=', $price)
////            ->where('created_at', '>=', $from)
//            ->where('created_at', '<=', $today)->get();
//        $totalCount = $no_of_users->count();
//        echo "Today's Total Memberships of Cost 299: ".$totalCount;

        //Fetch Today's Total memberships either of any value of price.
        $no_of_users = User_Membership::where('created_at', '=', $today)->get();

        $totalCount = $no_of_users->count();
        echo "Today's Total Memberships: ".$totalCount;

        echo "<pre>"; print_r($no_of_users);
    }

    public function dashfront()
    {
//        dd('this is dashfront function of reporting controller.');
        $today = Carbon::today();
        $apps = Users::select('name')->get();
        $totalapps = $apps->count();
//        dd($totalapps);
//        $apps = Users::where('created_at', '<=', $today)->get();
        $totalapps = $apps->count();

        $price = 299;
        $user_memberships299 = User_Membership::where('price', '=', $price)
            ->where('created_at', '<=', $today)->get();
        $totalmemberships299 = $user_memberships299->count();

        $other_memberships = User_Membership::where('price', '<>', $price)
            ->where('created_at', '<=', $today)->get();
        $totalothermemberships = $other_memberships->count();

        $state_wise_membership299 = DB::table('users')
            ->join('user_membership', 'users.id', '=', 'user_membership.user_id')
            ->where('user_membership.price',$price)
            ->select('users.state_id', \DB::raw('COUNT(users.state_id) as state_count'))
            ->groupBy('users.state_id')
            ->paginate(12);
//            ->get();

//        dd($state_wise_membership299."\n");

        $state_wise_membership_others = DB::table('users')
            ->join('user_membership', 'users.id', '=', 'user_membership.user_id')
            ->where('user_membership.price','<>',$price)
            ->select('users.state_id', \DB::raw('COUNT(users.state_id) as state_count'))
            ->groupBy('users.state_id')
            ->paginate(12);
//            ->get();

//        dd($state_wise_membership_others."\n");

        $membership_transactions = DB::table('users')
            ->join('user_membership', 'users.id', '=', 'user_membership.user_id')
//            ->select('users.state_id', \DB::raw('COUNT(users.state_id) as state_count'))
            ->select('users.state_id', \DB::raw("SUM(price) as price"))
            ->groupBy('users.state_id')
//            ->paginate(12);
            ->get();
//        dd($membership_transactions."\n");


        $states = State_Master::pluck("state_name","id");

        $state_wise_apps = DB::table('users')
            ->join('state_master', 'users.state_id', '=', 'state_master.id')
            ->select('users.state_id', \DB::raw('COUNT(users.state_id) as state_count'))
//            ->select('state_master.state_name')
            ->groupBy('users.state_id')
//            ->get();
            ->paginate(12);

//        dd($state_wise_apps);


        $state_wise_stores_apps = DB::table('store_master')
            ->join('state_master', 'store_master.state_id', '=', 'state_master.id')
            ->select('store_master.state_id', \DB::raw('COUNT(store_master.state_id) as state_count'))
            ->groupBy('store_master.state_id')
            ->paginate(12);
//            ->get();
//        dd($state_wise_stores."\n");

        $state_wise_stores_memberships299 = DB::table('store_master')
            ->join('state_master', 'store_master.state_id', '=', 'state_master.id')
            ->join('membership_type', 'membership_type.id', '=', 'store_master.membership_type')
            ->where('membership_type.customer_final_price', '=', $price)
            ->select('store_master.state_id', \DB::raw('COUNT(store_master.state_id) as state_count'))
            ->groupBy('store_master.state_id')
            ->paginate(12);
//            ->get();
//        dd($state_wise_stores_memberships299);

        $state_wise_stores_other_memberships = DB::table('store_master')
            ->join('state_master', 'store_master.state_id', '=', 'state_master.id')
            ->join('membership_type', 'membership_type.id', '=', 'store_master.membership_type')
            ->where('membership_type.customer_final_price', '<>', $price)
            ->select('store_master.state_id', \DB::raw('COUNT(store_master.state_id) as state_count,COUNT(store_master.state_id) * 1199 as state_amount'))
//            ->select(DB::raw('(state_count * $price) as orderRate'))
            ->groupBy('store_master.state_id')
            ->paginate(12);
//            ->get();
//        dd($state_wise_stores_other_memberships);

        $store_membership_transactions = DB::table('store_master')
            ->join('state_master', 'store_master.state_id', '=', 'state_master.id')
            ->join('membership_type', 'membership_type.id', '=', 'store_master.membership_type')
            ->select('store_master.state_id', \DB::raw("SUM(membership_type.customer_final_price) as price"))
            ->groupBy('store_master.state_id')
//            ->paginate(12);
            ->get();
//        dd($store_membership_transactions."\n");

        return view('dashfront', compact('totalapps', 'totalmemberships299','states', 'totalothermemberships',
            'state_wise_apps', 'state_wise_membership299', 'state_wise_membership_others', 'membership_transactions',
            'state_wise_stores_apps', 'state_wise_stores_memberships299','state_wise_stores_other_memberships','store_membership_transactions'));
    }

    //REPORT STORE TRANSACTIONS
    //1. view membership button
    public function state_wise_app_detail($id)
    {
        $particular_state_wise_apps_detail = Store_Master::where('state_id',$id)->paginate(10);
        return view('particular_state_apps_detail',compact('particular_state_wise_apps_detail'));
    }

    public function viewfull_store_data($id)
    {
        $viewfull_particular_state_wise_apps_detail = Store_Master::where('id',$id)->get();
        $country_state_city = Store_Master::find($id);

        $country = $country_state_city['country_id'];
        $state = $country_state_city['state_id'];
        $city = $country_state_city['city_id'];

        $cuntry = Country_Master::where('id',$country)->pluck("country_name");
        $stat = State_Master::where('id',$state)->pluck("state_name");
        $cty = City_Master::where('id',$city)->pluck("city_name");

        $viewfull_memberships = DB::table('store_master')
            ->join('membership_type', 'membership_type.id', '=', 'store_master.membership_type')
            ->select('membership_type.type_name')
            ->first();

        return view('viewfull-particular-state-apps-detail',compact('viewfull_particular_state_wise_apps_detail','cuntry','stat','cty','viewfull_memberships'));
    }
    //1. view membership button

    //2. view transaction button
    public function state_wise_store_transaction_detail($id)
    {
        $transaction = Transaction_Master::select('transaction_master.store_id','store_master.private_store_name','store_master.private_person_name','store_master.private_number_1', \DB::raw("COUNT(transaction_master.store_id) as store_count,SUM(transaction_master.price) as price"))
            ->join('store_master', 'store_master.id', '=', 'transaction_master.store_id')
            ->where('store_master.state_id', '=', $id)
            ->groupBy('transaction_master.store_id','store_master.private_store_name','store_master.private_person_name','store_master.private_number_1')
            ->paginate(10);
//        dd($transaction);

        return view('particular_state_store_transaction_details',compact('transaction'));
    }

    public function view_store_transaction($id)
    {
        //Customers of particular state having requested store_id(store_deal_code_detail DB)
        //From store_id->pick->user_id to get details of user from USER DB
        //From store_id->pick->transaction_id to get details of transaction from TRANSACTION_MASTER DB

//        dd('Hiii this is view store transactions function.');

        $trans_action = Transaction_Master::select('transaction_master.store_id','transaction_master.created_at','transaction_master.transaction_id','transaction_master.price','users.name','users.phone_number')
            ->join('users', 'users.id', '=', 'transaction_master.user_id')
            ->where('transaction_master.store_id', '=', $id)
            ->groupBy('transaction_master.store_id','transaction_master.created_at','transaction_master.transaction_id','transaction_master.price','users.name','users.phone_number')
            ->paginate(10);

        return view('viewfull-particular-state-store-transaction-details',compact('trans_action'));


    }
    //2. view transaction button

    //3. view customer button
    public function state_wise_store_customer_detail($id)
    {
        $cust_omer = Transaction_Master::select('transaction_master.store_id','store_master.private_store_name','store_master.private_person_name','store_master.private_number_1',
            \DB::raw("COUNT(transaction_master.user_id) as user"))
            ->join('store_master', 'store_master.id', '=', 'transaction_master.store_id')
//            ->join('users', 'users.id', '=', 'transaction_master.user_id')
            ->where('store_master.state_id', '=', $id)
            ->groupBy('transaction_master.store_id','store_master.private_store_name','store_master.private_person_name','store_master.private_number_1')
            ->paginate(10);
//            ->get();
//        dd($cust_omer);

        return view('particular_state_store_customer_details',compact('cust_omer'));

//        $cust_omer = Transaction_Master::select('transaction_master.store_id','transaction_master.user_id','store_master.private_store_name','store_master.private_person_name','store_master.private_number_1',
//            \DB::raw("COUNT(transaction_master.store_id) as store_count,COUNT(transaction_master.user_id) as user"))
//            ->join('store_master', 'store_master.id', '=', 'transaction_master.store_id')
//            ->where('store_master.state_id', '=', $id)
//            ->groupBy('transaction_master.store_id','transaction_master.user_id','store_master.private_store_name','store_master.private_person_name','store_master.private_number_1')
//            ->paginate(10);
    }

    public function view_store_customer($id)
    {
        dd('Hiii... This is View Store Customer Function.');

        $custo_mer = Transaction_Master::select('transaction_master.store_id','transaction_master.created_at','transaction_master.transaction_id','transaction_master.price','users.name','users.phone_number')
            ->join('users', 'users.id', '=', 'transaction_master.user_id')
            ->where('transaction_master.user_id', '=', $id)
            ->groupBy('transaction_master.store_id','transaction_master.created_at','transaction_master.transaction_id','transaction_master.price','users.name','users.phone_number')
            ->paginate(10);

        return view('viewfull-particular-state-store-customer-details',compact('custo_mer'));
    }
    //3. view customer button

    //REPORT STORE TRANSACTIONS


    public function viewfull($id)
    {
        return redirect('viewfull');
//        dd("Welcome ".$id);

//        $particular_state_data = Users::where('state_id','=', $id)->select('name')->get();
//        dd($particular_state_data);

    }

    public function total_active_apps_till_today()
    {
        $today = Carbon::today();
        $apps = Users::where('created_at', '<=', $today)->get();
        $totalCount = $apps->count();
        echo "Total Active Apps Till Today: ".$totalCount;
    }

    public function total_memberships_of_299_till_today()
    {
        $today = Carbon::today();
        $price = 299;
        $no_of_users = User_Membership::where('price', '=', $price)
            ->where('created_at', '<=', $today)->get();

        $totalCount = $no_of_users->count();
        echo "Total Memberships of Cost 299 Till Today: ".$totalCount;
    }

    public function active_memberships_of_299_till_today()
    {
        $today = Carbon::today();
        $price = 299;
        $no_of_users = User_Membership::where('price', '=', $price)
            ->where('created_at', '<=', $today)->get();

        $totalCount = $no_of_users->count();
        echo "Total Active Memberships of Cost 299 Till Today: ".$totalCount;
    }

    public function total_other_memberships_till_today()
    {
        $today = Carbon::today();
        $price = 299;
        // Find All memberships Grand Total
//        $no = User_Membership::get();
//        echo $no->count();
        $no_of_users = User_Membership::where('price', '<>', $price)
            ->where('created_at', '<=', $today)->get();

        $totalCount = $no_of_users->count();
        echo "Total Other Memberships Till Today: ".$totalCount;
    }

    public function active_other_memberships_till_today()
    {
        $today = Carbon::today();
        $price = 299;
        $no_of_users = User_Membership::where('price', '<>', $price)
//            ->where('created_at', '>=', $from)
            ->where('created_at', '<=', $today)->get();
        $totalCount = $no_of_users->count();
        echo "Total Other Active Memberships Till Today: ".$totalCount;
    }

    public function statewise_record()
    {
//        dd('Hiii this is statewise record function.');

        $query = DB::table('users')
            ->join('state_master', 'users.state_id', '=', 'state_master.id')
            ->join('country_master', 'users.country_id', '=', 'country_master.id')
            ->select('country_master.country_name', 'state_master.state_name','name')
            ->get();

        $count = $query->count();
        echo "Counter: ".$count;
        echo "<pre>"; print_r($query);
    }

    public function statewise_view_all(Request $request)
    {
        $getData = DB::table('users')
            ->join('state_master', 'users.state_id', '=', 'state_master.id')
            ->join('country_master', 'users.country_id', '=', 'country_master.id')
            ->join('order_membership', 'order_membership.user_id', '=', 'users.id')
            ->select('country_master.country_name', 'state_master.state_name','name', 'order_membership.tracking_id', 'order_membership.amount')
            ->get();

        $count = $getData->count();
        echo "Counter: ".$count;

        echo "<pre>";
        print_r($getData);
    }



    // Filter Date Function
    public function date_filter_data(Request $request)
    {
        if($request->ajax())
        {
            if($request->from_date != '' && $request->to_date != '')
            {
                $data = DB::table('users')
                    ->whereDate('created_at', array($request->from_date, $request->to_date))
                    ->get();
            }
            else
            {
                $data = DB::table('users')->orderBy('id', 'desc')->get();
            }
            echo json_encode($data);
        }
    }

    public function fetch()
    {
//        $getData = DB::table('users')
//            ->join('state_master', 'users.state_id', '=', 'state_master.id')
//            ->join('country_master', 'users.country_id', '=', 'country_master.id')
//            ->join('order_membership', 'order_membership.user_id', '=', 'users.id')
//            ->select('country_master.country_name', 'state_master.state_name','name', 'order_membership.tracking_id', 'order_membership.amount')
//            ->groupBy('state_master.state_name')
//            ->get();
//        dd($getData);
        return view('dashfront');
    }



//    public function fetch()
//    {
////        $getData = DB::table('users')
////            ->join('state_master', 'users.state_id', '=', 'state_master.id')
////            ->join('country_master', 'users.country_id', '=', 'country_master.id')
////            ->join('order_membership', 'order_membership.user_id', '=', 'users.id')
////            ->select('country_master.country_name', 'state_master.state_name','name', 'order_membership.tracking_id', 'order_membership.amount')
////            ->groupBy('state_master.state_name')
////            ->get();
////        dd($getData);
//        return view('dashfront');
//    }
//
//    public function fetchData()
//
//    {
//        return view('statewise-fetch');
//    }

}
