<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employee;
use App\Country_Master;
use App\State_Master;
use App\City_Master;
use App\TargetBonus;
use App\SpotBonus;
use App\Venue;
use App\EmpTypeWorkHours;
use App\Demo;
use App\TargetBonusBDM;
use App\SpotBonusBDM;
use App\User;
use App\TravelExpenses;
use App\HR;
USE App\SalaryReport;
USE App\CustomerAdd;
USE App\MembershipSales;
USE App\Users;
use Illuminate\Support\Facades\DB;
use App\User_Membership;
use App\Sales_Today;
use App\Store_Master;
use Illuminate\Support\Carbon;

class EmployeeController extends Controller
{
    public function getStateList(Request $request)
    {
        $states = State_Master::where("country_id",$request->country_id)
            ->pluck("state_name","id");
        return response()->json($states);
    }

    public function getCityList(Request $request)
    {
        $cities = City_Master::where("state_id",$request->state_id)
            ->pluck("city_name","id");
        return response()->json($cities);
    }

    public function getCountryList_target_spot_venue()
    {
        $country_master = Country_Master::pluck("country_name","id");
        $targ_bon = TargetBonus::all();
        $targ_bon_bdm = TargetBonusBDM::all();
        $spot_bon = SpotBonus::all();
        $spot_bon_bdm = SpotBonusBDM::all();
        $venue_venue = Venue::pluck("name","id");
        $emp_emp_type = EmpTypeWorkHours::pluck("emp_type","id");
        $hr = HR::pluck("name","id");
        return view('add-employee', compact('targ_bon', 'targ_bon_bdm', 'spot_bon', 'spot_bon_bdm', 'venue_venue', 'emp_emp_type', 'hr', 'country_master'));
    }

    // EMPLOYEE
    public function add_employee(Request $request)
    {
//        $this->validate($request, ['working_hours' => 'required|numeric',
//            'email' => 'required|unique:employee|email',
//            'no_of_holidays' => 'required|numeric',
//            'phone' => 'required|numeric|unique:employee',
//            'promo_code' => 'required',
//            'emp_name' => 'required',
//            'phone2' => 'numeric',
//            'team_leader' => 'required',
//            'hr' => 'required',
//            'country' => 'required',
//            'state' => 'required',
//            'city' => 'required',
//            'venue' => 'required',
//            'basic_venue' => 'required',
//            'bdm' => 'required',
//            'free_app_target_venue' => 'required',
//            'free_shop_target_bdm' => 'required',
//            'paid_app_target_venue' => 'required',
//            'paid_shop_target_bdm' => 'required',
//
//        ]);

//         Just One Check
//        $user = User::selectRaw('REPLACE(`phone`, \'+91\', \'\') phone')
//            ->whereRaw('LENGTH(`phone`) > 10')
//            ->get();
//        dd($user);

        $employee = Users::create($request->all());

        if($employee) {
            echo "Employee Insertion Done.";
            return redirect('/list-employee');
        }
        else {
            echo "Error in Insertion";
        }
    }

    public function employees_list()
    {
        $emp_list = Users::orderBy('id', 'desc')->paginate(10);
        return view('list-employee',compact('emp_list'));
    }


    public function delete_emp($id)
    {
//        dd("Hii this is Employee delete block.");
        $del_find = Employee::find($id);
        $del_find->delete();

        return redirect('/list-employee');
    }

    public function updateview($id)
    {
        $data['data'] = Employee::find($id);

//        $country_master=Country_Master::where('id',$id)->with('user')->first();

        $country_master = Country_Master::pluck("country_name","id");
        $targ_bon = TargetBonus::all();
        $targ_bon_bdm = TargetBonusBDM::all();
        $spot_bon = SpotBonus::all();
        $spot_bon_bdm = SpotBonusBDM::all();
        $venue_venue = Venue::pluck("name","id");
        $emp_emp_type = EmpTypeWorkHours::pluck("emp_type","id");
        return view('edit-employee', compact('data','targ_bon', 'targ_bon_bdm', 'spot_bon', 'spot_bon_bdm', 'venue_venue', 'emp_emp_type', 'country_master'));

//        return view('edit-employee', $datas);
    }


    public function update(Request $request,$id)
    {
//        dd('Hii.. This is update data block');
//        echo "<pre>"; print_r($request->all());

//        $this->validate($request, ['working_hours' => 'required|numeric',
//            'email' => 'required|unique:employee|email',
//            'no_of_holidays' => 'required|numeric',
//            'phone' => 'required|numeric|unique:employee',
//            'promo_code' => 'required',
//            'emp_name' => 'required',
//            'phone2' => 'numeric',
//            'team_leader' => 'required',
//            'hr' => 'required',
//            'country' => 'required',
//            'state' => 'required',
//            'city' => 'required',
//            'venue' => 'required',
//            'basic_venue' => 'required',
//            'bdm' => 'required',
//            'free_app_target_venue' => 'required',
//            'free_shop_target_bdm' => 'required',
//            'paid_app_target_venue' => 'required',
//            'paid_shop_target_bdm' => 'required',
//
//        ]);

        Employee::find($id)->update([
            'emp_type' => $request['emp_type'],
            'working_hours' => $request['working_hours'],
            'no_of_holidays' => $request['no_of_holidays'],
            'promo_code' => $request['promo_code'],
            'name' => $request['name'],
            'phone' => $request['phone'],
            'phone2' => $request['phone2'],
            'email' => $request['email'],
            'file_no' => $request['file_no'],
            'is_team_lead' => $request['is_team_lead'],
            'team_leader' => $request['team_leader'],
            'retailer' => $request['retailer'],
            'dealer' => $request['dealer'],
            'hr' => $request['hr'],
            'country' => $request['country'],
            'state' => $request['state'],
            'city' => $request['city'],
            'venue' => $request['venue'],
            'basic_venue' => $request['basic_venue'],
            'bdm' => $request['bdm'],
            'free_app_target_venue' => $request['free_app_target_venue'],
            'free_shop_target_bdm' => $request['free_shop_target_bdm'],
            'paid_app_target_venue' => $request['paid_app_target_venue'],
            'paid_shop_target_bdm' => $request['paid_shop_target_bdm'],
            'paid_app_target_venue_transaction' => $request['paid_app_target_venue_transaction'],
            'paid_app_bdm_transaction' => $request['paid_app_bdm_transaction'],
            'target_bonus_basic_venue_target' => $request['target_bonus_basic_venue_target'],
            'target_bonus_basic_venue_bonus' => $request['target_bonus_basic_venue_bonus'],
            'target_bonus_bdm_target' => $request['target_bonus_bdm_target'],
            'target_bonus_bdm_bonus' => $request['target_bonus_bdm_bonus'],
            'spot_bonus_basic_venue_target' => $request['spot_bonus_basic_venue_target'],
            'spot_bonus_basic_venue_bonus' => $request['spot_bonus_basic_venue_bonus'],
            'spot_bonus_bdm_target' => $request['spot_bonus_bdm_target'],
            'spot_bonus_bdm_bonus' => $request['spot_bonus_bdm_bonus'],
        ]);

        return redirect('/list-employee');
    }
    // EMPLOYEE

    //VENUE
    public function venueview()
    {
        $venue = Venue::all();
        return view('add-venue', compact('venue'));
    }

    public function venue_add(Request $request)
    {
        $ad = Venue::create($request->all());
        if($ad)
        {  echo ""; }
        else
        {  echo "";  }

        return redirect('/add-venue');
    }

    public function delete_venue($id)
    {
        $del_demo = Venue::find($id);
        $del_demo->delete();

        return redirect('/add-venue');
    }

    public function update_venue_view($id)
    {
        $data['data'] = Venue::find($id);
        $venue = Venue::all();
        return view('add-venue', compact('venue','data'));
    }

    public function update_venue(Request $request,$id)
    {
        Venue::find($id)->update([
            'name' => $request['name'],
        ]);

        return redirect('/add-venue');
    }
    //VENUE

    //VIEW
    public function assign_pick_view()
    {
        return view('assign-pick');
    }

    public function print_view()
    {
        return view('print-by-options');
    }

    public function assign_page_view()
    {
        return view('assign-page-view');
    }
    //VIEW

    //TRAVELING EXPENSES
    public function travel_expenses_view()
    {
        $travel = TravelExpenses::all();
        return view('add-travel-expenses', compact('travel'));
    }

    public function travel_expenses_add(Request $request)
    {
        if($files=$request->file('image')){
            $name=$files->getClientOriginalName();
            $files->move('images/travel',$name);
            TravelExpenses::insert([
                'date' => $request->date,
                'amount' => $request->amount,
                'comments' => $request->comments,
                'image' => $name,
                'emp_id' => $request->emp_id,
            ]);
        }
        return redirect('/add-travel-expenses');
    }

    public function delete_travel_expenses($id)
    {
        $del_demo = TravelExpenses::find($id);
        $del_demo->delete();

        return redirect('/add-travel-expenses');
    }

    public function update_travel_expenses_view($id)
    {
        $data['data'] = TravelExpenses::find($id);
        $travel = TravelExpenses::all();
        return view('add-travel-expenses', compact('travel','data'));
    }

    public function update_travel_expenses(Request $request,$id)
    {
        if($files=$request->file('image')){
            $name=$files->getClientOriginalName();
            $files->move('images/travel',$name);
            TravelExpenses::find($id)->update([
                'date' => $request['date'],
                'amount' => $request['amount'],
                'comments' => $request['comments'],
                'image' => $name,
                'emp_id' => $request['emp_id'],
            ]);
        }

        return redirect('/add-travel-expenses');
    }
    //TRAVELING EXPENSES

    //HR
    public function hr_view()
    {
        $hr = HR::all();
        return view('add-hr', compact('hr'));
    }

    public function hr_add(Request $request)
    {
        $hr = HR::create($request->all());

        return redirect('/add-hr');
    }

    public function delete_hr($id)
    {
        $del_demo = HR::find($id);
        $del_demo->delete();

        return redirect('/add-hr');
    }

    public function update_hr_view($id)
    {
        $data['data'] = HR::find($id);
        $hr = HR::all();
        return view('add-hr', compact('hr','data'));
    }

    public function update_hr(Request $request,$id)
    {
        HR::find($id)->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'salary' => $request['salary'],
        ]);

        return redirect('/add-hr');
    }
    //HR


    //EMPLOYEE TYPE
    public function emptypeview()
    {
        $emty = EmpTypeWorkHours::all();
        return view('add-employee-type', compact('emty'));
    }

    public function emptype_add(Request $request)
    {
        $ad = EmpTypeWorkHours::create($request->all());
        if($ad)
        {  echo ""; }
        else
        {  echo "";  }

        return redirect('/add-employee-type');
    }

    public function delete_emptype($id)
    {
        $del_demo = EmpTypeWorkHours::find($id);
        $del_demo->delete();

        return redirect('/add-employee-type');
    }

    public function update_emptype_view($id)
    {
        $data['data'] = EmpTypeWorkHours::find($id);
        $emty = EmpTypeWorkHours::all();
        return view('add-employee-type', compact('emty','data'));
    }

    public function update_emptype(Request $request,$id)
    {
        EmpTypeWorkHours::find($id)->update([
            'emp_type' => $request['emp_type'],
            'working_hours' => $request['working_hours'],
        ]);

        return redirect('/add-employee-type');
    }
    //EMPLOYEE TYPE

    //DEMO
    public function demoview()
    {
        $demo = Demo::all();
        return view('demo', compact('demo'));
    }

    public function demoadd(Request $request)
    {
        $ad = Demo::create($request->all());
        if($ad)
        {  echo ""; }
        else
        {  echo "";  }

        return redirect('/demo');
    }

    public function delete_demo($id)
    {
        $del_demo = Demo::find($id);
        $del_demo->delete();

        return redirect('/demo');
    }

    public function update_demoview($id)
    {
        $data['data'] = Demo::find($id);
        $demo = Demo::all();
        return view('demo', compact('demo','data'));
    }

    public function update_demo(Request $request,$id)
    {
        Demo::find($id)->update([
            'demo1' => $request['demo1'],
            'demo2' => $request['demo2'],
        ]);

        return redirect('/demo');
    }
    //DEMO

    //TARGET BASIC VENUE
    public function target_basic_venue_view()
    {
        $target = TargetBonus::all();
        return view('target-bonus', compact('target'));
    }

    public function target_basic_venue_add(Request $request)
    {
        $ad = TargetBonus::create($request->all());
        if($ad)
        {  echo ""; }
        else
        {  echo "";  }

        return redirect('/target-bonus');
    }

    public function delete_target_basic_venue($id)
    {
        $del_demo = TargetBonus::find($id);
        $del_demo->delete();

        return redirect('/target-bonus');
    }

    public function update_targetbasicvenue_view($id)
    {
        $data['data'] = TargetBonus::find($id);
        $target = TargetBonus::all();
        return view('target-bonus', compact('target','data'));
    }

    public function update_targetbasicvenue(Request $request,$id)
    {
        TargetBonus::find($id)->update([
            'target_bonus_basic_venue_target' => $request['target_bonus_basic_venue_target'],
            'target_bonus_basic_venue_bonus' => $request['target_bonus_basic_venue_bonus'],
        ]);

        return redirect('/target-bonus');
    }
    //TARGET BASIC VENUE

    //TARGET BDM
    public function target_bdm_view()
    {
        $target = TargetBonusBDM::all();
        return view('target-bonus-bdm', compact('target'));
    }

    public function target_bdm_add(Request $request)
    {
        $ad = TargetBonusBDM::create($request->all());
        if($ad)
        {  echo ""; }
        else
        {  echo "";  }

        return redirect('/target-bonus-bdm');
    }

    public function delete_target_bdm($id)
    {
        $del_demo = TargetBonusBDM::find($id);
        $del_demo->delete();

        return redirect('/target-bonus-bdm');
    }

    public function update_targetbdm_view($id)
    {
        $data['data'] = TargetBonusBDM::find($id);
        $target = TargetBonusBDM::all();
        return view('target-bonus-bdm', compact('target','data'));
    }

    public function update_targetbdm(Request $request,$id)
    {
        TargetBonusBDM::find($id)->update([
            'target_bonus_bdm_target' => $request['target_bonus_bdm_target'],
            'target_bonus_bdm_bonus' => $request['target_bonus_bdm_bonus'],
        ]);

        return redirect('/target-bonus-bdm');
    }
    //TARGET BDM

    //SPOT BASIC VENUE
    public function spot_basic_venue_view()
    {
        $spot = SpotBonus::all();
        return view('spot-bonus', compact('spot'));
    }

    public function spot_basic_venue_add(Request $request)
    {
        $ad = SpotBonus::create($request->all());
        if($ad)
        {  echo ""; }
        else
        {  echo "";  }

        return redirect('/spot-bonus');
    }

    public function delete_spot_basic_venue($id)
    {
        $del_demo = SpotBonus::find($id);
        $del_demo->delete();

        return redirect('/spot-bonus');
    }

    public function update_spotbasicvenue_view($id)
    {
        $data['data'] = SpotBonus::find($id);
        $spot = SpotBonus::all();
        return view('spot-bonus', compact('spot','data'));
    }

    public function update_spotbasicvenue(Request $request,$id)
    {
        SpotBonus::find($id)->update([
            'spot_bonus_basic_venue_target' => $request['spot_bonus_basic_venue_target'],
            'spot_bonus_basic_venue_bonus' => $request['spot_bonus_basic_venue_bonus'],
        ]);

        return redirect('/spot-bonus');
    }
    //SPOT BASIC VENUE

    //SPOT BDM
    public function spot_bdm_view()
    {
        $spot = SpotBonusBDM::all();
        return view('spot-bonus-bdm', compact('spot'));
    }

    public function spot_bdm_add(Request $request)
    {
        $ad = SpotBonusBDM::create($request->all());
        if($ad)
        {  echo ""; }
        else
        {  echo "";  }

        return redirect('/spot-bonus-bdm');
    }

    public function delete_spot_bdm($id)
    {
        $del_demo = SpotBonusBDM::find($id);
        $del_demo->delete();

        return redirect('/spot-bonus-bdm');
    }

    public function update_spotbdm_view($id)
    {
        $data['data'] = SpotBonusBDM::find($id);
        $spot = SpotBonusBDM::all();
        return view('spot-bonus-bdm', compact('spot','data'));
    }

    public function update_spotbdm(Request $request,$id)
    {
        SpotBonusBDM::find($id)->update([
            'spot_bonus_bdm_target' => $request['spot_bonus_bdm_target'],
            'spot_bonus_bdm_bonus' => $request['spot_bonus_bdm_bonus'],
        ]);

        return redirect('/spot-bonus-bdm');
    }
    //SPOT BDM

    //SALARY REPORT
    public function salary_report_view()
    {
        $salary_report = SalaryReport::all();
        return view('salary-report', compact('salary_report'));
    }

    public function salary_report_add(Request $request)
    {
        $ad = SalaryReport::create($request->all());
        if($ad)
        {  echo ""; }
        else
        {  echo "";  }

        return redirect('/salary-report');
    }

    public function delete_salary_report($id)
    {
        $del_demo = SalaryReport::find($id);
        $del_demo->delete();

        return redirect('/salary-report');
    }

    public function update_salary_report_view($id)
    {
        $data['data'] = SalaryReport::find($id);
        $salary = SalaryReport::all();
        return view('salary-report', compact('salary','data'));
    }

    public function update_salary_report(Request $request,$id)
    {
        SalaryReport::find($id)->update([
            'basic_venue' => $request['basic_venue'],
            'bdm' => $request['bdm'],
            'target' => $request['target'],
            'spot' => $request['spot'],
        ]);

        return redirect('/salary-report');
    }
    //SALARY REPORT

    //VERIFY USER
    public function membership_sale(Request $request)
    {
        $this->validate($request,[
            'emp_id' => 'required|numeric',
            'card_number'=>'required|numeric|digits_between:8,8|unique:employeejb_membership_sales',
            'amount' => 'required|numeric',
            'discount' => 'required|numeric',
            'membership_price' => 'required|numeric',
            'free_bies' => 'required',
            'comment' => 'required',
            'rating' => 'required|numeric',
        ]);

        $membershipsale = MembershipSales::insert([
            'emp_id' => $request->emp_id,
            'card_number' => $request->card_number,
            'amount' => $request->amount,
            'discount' => $request->discount,
            'membership_price' => $request->membership_price,
            'free_bies' => $request->free_bies,
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);

        if($membershipsale) {
            return response()->json(['status' => '200 OK', 'response' => 'true', 'success' =>'Good, You sale a membership.']);
        }
        else
        {
            return response()->json(['status' => '401 Unauthorized', 'response' => 'false', 'failure' =>'Whoops! There is some Error.']);
        }
    }


    public function verify_user(Request $request)
    {
        $this->validate($request,['cust_name'=>'required|alpha|min:3',
            'cust_number' => 'required|numeric|digits_between:10,10',
        ]);

        $cust_number = $request['cust_number'];

        $verify = CustomerAdd::where('cust_number',$cust_number)->exists();

        if($verify) {
            return response()->json(['status' => '200 OK', 'response' => 'true', 'success' => 'This number already exists.']);
//            return response()->json(['status' => '200 OK', 'response' => 'true', 'success' => 'This number already exists.', 'result' => $verify]);
        }
        else
        {
            CustomerAdd::insert([
                'cust_name' => $request->cust_name,
                'cust_number' => $request->cust_number,
            ]);

            return response()->json(['status' => '200 OK', 'response' => 'true', 'success' =>'Customer Added Succesfully.']);
        }
    }
    //VERIFY USER


    //SALARY ADMIN
    public function uncleared()
    {
//        dd('Hii this is uncleared function of employeecontroller.');
        for($m=1; $m<=12; $m++) {
            $month = date('F', mktime(0,0,0,$m, 1, date('Y')));
            echo $month. '<br>';
        }
    }


    public function salary_calculate()
    {
        $emp_id = 18419;
        $mytime = now()->timezone('Asia/Calcutta');
        $date_today =  $mytime->toDateString();
//        $date_today =  '2020-01-30';

        $queryy = (new Users())
            ->select('name', 'phone_number', 'created_at')
            ->where('employee_id', $emp_id)
            ->whereDate('created_at', $date_today)
            ->get();
        $recordCount = count($queryy);
        echo "\nRecord Counter: ".$recordCount;

        if($queryy=='[]')
        {
            echo "No Data Available of Today Date.";
        }
        else
        {
            echo "Today's Customer Data <pre>".$queryy;

            if($recordCount==1)
            {
                $ins_today_sale = Sales_Today::insert([
                    'employee_id' => $emp_id,
                    'name' => 'Testing',
                    'today_date' => $date_today,
                    'no_of_sales' => $recordCount,
                ]);

                if($ins_today_sale)
                {
                    echo "Today's first record is inserted.";
                }
                else
                {
                    echo "Error in Insertion of Today's first Record";
                }
            }
            else
            {
                $update_today_sale = DB::table('employeejb_sales_today')
                    ->where('employee_id', $emp_id)
                    ->where('today_date', $date_today)
                    ->update(['no_of_sales' => $recordCount]);

                if($update_today_sale)
                {
                    echo "Update Today's record GOOD.";
                }
                else
                {
                    echo "OHHHHH!!! There is some problem in Updation.";
                }
            }
        }
    }

//    public function assigned_details()
//    {
//        //Total Apps and Active Apps
//        //$id = Auth::user->id();
//        $id = 1;
//        $apps = Users::where('employee_id', '=', $id)->get();
//        $totalapps = $apps->count();
//        //Total Apps and Active Apps
//
//        //Employee Salary
//        $eid = 18419;
//        $e_salary = Users::select('employeejb_basic_venue','employeejb_bdm','employeejb_free_app_target_venue',
//            'employeejb_free_shop_target_bdm','employeejb_paid_app_target_venue', 'employeejb_paid_shop_target_bdm')
//            ->where('id', '=', $eid)->get();
//        //Employee Salary
//
//        //299 Membership Users
//        $price = 299;
//        $user_memberships299 = User_Membership::where('price', '=', $price)
//            ->where('employee_id', '=', $id)->get();
//        $totalmemberships299 = $user_memberships299->count();
//        //299 Membership Users
//
//        //Other Memberships Users
//        $other_memberships = User_Membership::where('price', '<>', $price)
//            ->where('employee_id', '=', $id)
//            ->get();
//        $totalothermemberships = $other_memberships->count();
//        //Other Memberships Users
//
//        //Other Memberships Transaction's Total Amount
//        $other_memberships_transaction_amount = User_Membership::select(DB::raw("SUM(price) as price"))
//            ->where('price', '<>', $price)
//            ->where('employee_id', '=', $id)
//            ->get();
//        //Other Memberships Transaction's Total Amount
//
////        //Calculate Spot Bonus And Target Bonus Block
////        $bonus = Users::select('employeejb_free_app_target_venue','employeejb_free_shop_target_bdm',
////            'employeejb_paid_app_target_venue', 'employeejb_paid_shop_target_bdm')
////            ->where('id', '=', $eid)->get();
////        dd($bonus);
//        //Calculate Spot Bonus And Target Bonus Block
//
//
//        return view('salary-admin', compact('totalapps','totalmemberships299','totalothermemberships',
//            'other_memberships','e_salary','eid','other_memberships_transaction_amount'));
//    }
    //SALARY ADMIN


    //ADD FREE SHOPKEEPER
    public function add_free_shopkeeper()
    {
        $country_master = Country_Master::pluck("country_name","id");

        return view('add-shopkeeper', compact('country_master'));
    }
    //ADD FREE SHOPKEEPER

    //VERIFY SHOPS
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

    public function update_logo_banner(Request $request,$id)
    {
        $logo = $request->logo;
        $banner = $request->banner;

        if($logo=='') {}
        else
        {
            if ($files = $request->file('logo')) {
                $name = $files->getClientOriginalName();
                $files->move('images/shop_logos', $name);   $design = '';
                Store_Master::find($id)->update([
                    'logo' => $name,
                    'design_issue_comments' => $design,
                ]);
            }
        }

        if($banner=='') {}
        else {
            if ($files = $request->file('banner')) {
                $name = $files->getClientOriginalName();
                $files->move('images/shop_banners', $name); $design = '';
                Store_Master::find($id)->update([
                    'banner' => $name,
                    'design_issue_comments' => $design,
                ]);
            }
        }

        $data = Store_Master::find($id);
        $logo = $data['logo'];
        $banner = $data['banner'];
        echo 'Logo is: '.$logo;
        echo 'banner is: '.$banner;

        if($logo=='' || $banner=='')
        {
            if($logo=='')
            { echo 'LOGO FIELD IS EMPTY.'; }
            if($banner=='')
            { echo 'BANNER FIELD IS EMPTY.'; }
        }
        else
        {
            $is_approve = 1; $current_time = now();
            Store_Master::find($id)->update([
                    'is_design_uploaded' => $is_approve,
                    'design_uploaded_on' => $current_time,
                ]);
            echo "Designer uploaded updated.";
        }

        return redirect('/verify-shops');
    }

    public function update_agreement(Request $request,$id)
    {
//        dd('HIIII.... this is UPDATE AGREEMENT FUNCTIOn');
        $physical_agreement = $request->physical_agreement;
        $term_condition = $request->term_condition;

        if($physical_agreement=='') {}
        else
        {
            if ($files = $request->file('physical_agreement')) {
                $name = $files->getClientOriginalName();
                $files->move('images/shop_agreements', $name);  $content = '';
                Store_Master::find($id)->update([
                    'physical_agreement' => $name,
                    'content_issue_comments' => $content,
                ]);
            }
        }

        if($term_condition=='') {}
        else
        {
            if ($files = $request->file('term_condition')) {
                $name = $files->getClientOriginalName();
                $files->move('images/shop_TnCs', $name);    $content = '';
                Store_Master::find($id)->update([
                    'term_condition' => $name,
                    'content_issue_comments' => $content,
                ]);
            }
        }

        $data = Store_Master::find($id); echo $data;
        $physicl_agreement = $data['physical_agreement'];
        $term_condition = $data['term_condition'];

        if($physicl_agreement=='' || $term_condition=='')
        {
            if($physicl_agreement=='')
            { echo 'Agreement FIELD IS EMPTY.'; }
            if($term_condition=='')
            { echo 'Terms n Conditions FIELD IS EMPTY.'; }
        }
        else
        {
            $is_approve = 1; $current_time = now();
            Store_Master::find($id)->update([
                'is_content_uploaded' => $is_approve,
                'content_uploaded_on' => $current_time,
            ]);
        }

        return redirect('/verify-shops');
    }

    public function approve_design_agreement(Request $request,$id)
    {
//        dd('HIIII.... this is Approve DESIGN AGREEMENT FUNCTIOn');
        $design = $request->design_approved;
        $content = $request->content_approved;
        $design_issue = $request->design_issue_comments;
        $content_issue = $request->content_issue_comments;

        if($design=='') {}
        else
        {
            $is_des_app = 1;
            Store_Master::find($id)->update([
                'is_design_approved' => $is_des_app,
            ]);
        }

        if($content=='') {}
        else
        {
            $is_con_app = 1;
            Store_Master::find($id)->update([
                'is_content_approved' => $is_con_app,
            ]);
        }

        if($design_issue=='') {}
        else
        {
            Store_Master::find($id)->update([
                'design_issue_comments' => $design_issue,
            ]);
        }

        if($content_issue=='') {}
        else
        {
            Store_Master::find($id)->update([
                'content_issue_comments' => $content_issue,
            ]);
        }

        $data = Store_Master::find($id);
        $design1 = $data['is_design_approved'];
        $content1 = $data['is_content_approved'];

        if($design1=='' || $content1=='')
        {
            if($design1=='')
            { echo 'DESIGN FIELD IS EMPTY.'; }
            if($content1=='')
            { echo 'CONTENT FIELD IS EMPTY.'; }
        }
        else
        {
            $is_approve = 1; $current_time = now();
            Store_Master::find($id)->update([
                'is_all_approved' => $is_approve,
                'all_approved_on' => $current_time,
            ]);
            echo "All Data Approved.";
        }

        $mark_status = Store_Master::find($id);
        $is_all_approved = $mark_status['is_all_approved'];
        $all_approved_on = $mark_status['all_approved_on'];

        if($is_all_approved==1 && $all_approved_on<>'')
        {
            $status = 1;
            Store_Master::find($id)->update([
                'status' => $status,
            ]);
        }

        return redirect('/verify-shops');
    }
    //VERIFY SHOPS

}
