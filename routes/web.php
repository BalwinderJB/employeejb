<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('profile','Employee\EmployeeController@profile')->name('employee.profile');

Route::group(['middleware' => ['role:Admin']], function(){

    Route::get('category',function(){
        return view('category');
    });

    Route::get('index',function(){
        return view('index');
    });

    Route::get('report-details',function(){
        return view('report-details');
    })->name('report-details.report-details');


    Route::get('dashfront','ReportingController@fetch')->name('dashfront.dashfront');
    Route::get('dashfront/statewise/fetch','ReportingController@fetchData')->name('dashfront.state');


    Route::get('report-det-view',function(){
        return view('report-det-view');
    })->name('report-det-view.report-det.view');

    Route::get('myreports',function(){
        return view('myreports');
    })->name('myreports.myreports');

    Route::get('mysales',function(){
        return view('mysales');
    })->name('mysales.mysales');

    Route::get('banner',function(){
        return view('banner');
    })->name('banner.banner');

    Route::get('mysales-view',function(){
        return view('mysales-view');
    })->name('mysales-view.mysales-view');

    Route::get('viewfull',function(){
        return view('viewfull');
    })->name('viewfull.viewfull');

    Route::get('manage-users',function(){
        return view('manage-users');
    })->name('manage-users.manage-users');

    Route::get('list-users',function(){
        return view('list-users');
    })->name('list-users.list-users');

    Route::get('content',function(){
        return view('content');
    })->name('content.index');

    Route::get('view',function(){
        return view('view');
    })->name('view.view');

    Route::get('assign',function(){
        return view('assign');
    })->name('assign.assign');

    Route::get('grossview',function(){
        return view('grossview');
    })->name('grossview.grossview');

    Route::get('add-employee','EmployeeController@getCountryList')->name('add-employee.add-employee');

    // Employee Routes

    Route::get('get-state-list','EmployeeController@getStateList');
    Route::get('get-city-list','EmployeeController@getCityList');
    Route::get('add-employee','EmployeeController@getCountryList_target_spot_venue')->name('add-employee.add-employee');
    Route::post('emp-details','EmployeeController@add_employee')->name('emp-details.emp-details');
    Route::get('list-employee','EmployeeController@employees_list')->name('list-employee.list-employee');
    //Manage Employee Routes
    Route::get('delete_emp/{id}','EmployeeController@delete_emp')->name('delete_emp.delete_emp/{id}');
    Route::get('edit-employee','EmployeeController@ineditempgetCountryList')->name('edit_emp.edit_emp');
    Route::get('edit-employee/{id}','EmployeeController@updateview')->name('edit_emp.edit_emp/{id}');
    Route::post('employee-update/{id}','EmployeeController@update')->name('employee-update.employee-update');
    //Manage Employee Routes
    // Employee Routes

    //DEMO ROUTES
    Route::get('demo','EmployeeController@demoview');
    Route::post('demoadd','EmployeeController@demoadd');
    Route::get('delete-demo/{id}','EmployeeController@delete_demo');
    Route::get('update-demoview/{id}','EmployeeController@update_demoview');
    Route::post('update-demo/{id}','EmployeeController@update_demo');
    //DEMO ROUTES

    //TARGET BASIC VENUE ROUTES
    Route::get('target-bonus','EmployeeController@target_basic_venue_view')->name('target-bonus.target-bonus');
    Route::post('basic-venue-target-add','EmployeeController@target_basic_venue_add');
    Route::get('delete-target-basic-venue/{id}','EmployeeController@delete_target_basic_venue');
    Route::get('update-targetbasicvenue-view/{id}','EmployeeController@update_targetbasicvenue_view');
    Route::post('update-targetbasicvenue/{id}','EmployeeController@update_targetbasicvenue');
    //TARGET BASIC VENUE ROUTES

    //TARGET BDM ROUTES
    Route::get('target-bonus-bdm','EmployeeController@target_bdm_view')->name('target-bonus-bdm.target-bonus-bdm');
    Route::post('bdm-target-add','EmployeeController@target_bdm_add');
    Route::get('delete-target-bdm/{id}','EmployeeController@delete_target_bdm');
    Route::get('update-targetbdm-view/{id}','EmployeeController@update_targetbdm_view');
    Route::post('update-targetbdm/{id}','EmployeeController@update_targetbdm');
    //TARGET BDM ROUTES

    //SPOT BASIC VENUE ROUTES
    Route::get('spot-bonus','EmployeeController@spot_basic_venue_view')->name('spot-bonus.spot-bonus');
    Route::post('basic-venue-spot-add','EmployeeController@spot_basic_venue_add');
    Route::get('delete-spot-basic-venue/{id}','EmployeeController@delete_spot_basic_venue');
    Route::get('update-spotbasicvenue-view/{id}','EmployeeController@update_spotbasicvenue_view');
    Route::post('update-spotbasicvenue/{id}','EmployeeController@update_spotbasicvenue');
    //SPOT BASIC VENUE ROUTES

    //SPOT BDM ROUTES
    Route::get('spot-bonus-bdm','EmployeeController@spot_bdm_view')->name('spot-bonus-bdm.spot-bonus-bdm');
    Route::post('bdm-spot-add','EmployeeController@spot_bdm_add');
    Route::get('delete-spot-bdm/{id}','EmployeeController@delete_spot_bdm');
    Route::get('update-spotbdm-view/{id}','EmployeeController@update_spotbdm_view');
    Route::post('update-spotbdm/{id}','EmployeeController@update_spotbdm');
    //SPOT BDM ROUTES

    // Employee Type Route
    Route::get('add-employee-type','EmployeeController@emptypeview')->name('add-employee-type.add-employee-type');
    Route::post('emptype-add','EmployeeController@emptype_add');
    Route::get('delete-emptype/{id}','EmployeeController@delete_emptype');
    Route::get('update-emptype-view/{id}','EmployeeController@update_emptype_view');
    Route::post('update-emptype/{id}','EmployeeController@update_emptype');
    // Employee Type Route

    //VENUE Route
    Route::get('add-venue','EmployeeController@venueview')->name('add-venue.add-venue');
    Route::post('venue-add','EmployeeController@venue_add');
    Route::get('delete-venue/{id}','EmployeeController@delete_venue');
    Route::get('update-venue-view/{id}','EmployeeController@update_venue_view');
    Route::post('update-venue/{id}','EmployeeController@update_venue');
    // VENUE Route

    //VIEW ROUTE
    Route::get('view',function(){ return view('view'); })->name('view.view');
    Route::get('assign-pick-view','EmployeeController@assign_pick_view');
    Route::get('print-view','EmployeeController@print_view');
    Route::get('assign-page-view','EmployeeController@assign_page_view');
    //VIEW ROUTE

    //TRAVELING EXPENSES Route
    //Route::get('traveling-expenses',function(){ return view('traveling_expenses'); });
    Route::get('add-travel-expenses','EmployeeController@travel_expenses_view')->name('add-travel-expenses.add-travel-expenses');
    Route::post('travel-expenses-add','EmployeeController@travel_expenses_add');
    Route::get('delete-travel-expenses/{id}','EmployeeController@delete_travel_expenses');
    Route::get('update-travel-expenses-view/{id}','EmployeeController@update_travel_expenses_view');
    Route::post('update-travel-expenses/{id}','EmployeeController@update_travel_expenses');
    // TRAVELING EXPENSES Route

    //HR Route
    Route::get('add-hr','EmployeeController@hr_view')->name('add-hr.add-hr');
    Route::post('hr-add','EmployeeController@hr_add');
    Route::get('delete-hr/{id}','EmployeeController@delete_hr');
    Route::get('update-hr-view/{id}','EmployeeController@update_hr_view');
    Route::post('update-hr/{id}','EmployeeController@update_hr');
    //HR Route

    //SALARY REPORT ROUTE
    //Route::get('salary-report',function(){ return view('salary_report'); })->name('salary-report.salary-report');
        Route::get('salary-report','EmployeeController@salary_report_view')->name('salary-report.salary-report');
    //Route::post('salary-report-add','EmployeeController@salary_report_add');
    //Route::get('delete-salary-report/{id}','EmployeeController@delete_salary_report');
    //Route::get('update-salary-report-view/{id}','EmployeeController@update_salary_report_view');
    //Route::post('update-salary-report/{id}','EmployeeController@update_salary_report');
    ////SALARY REPORT ROUTE

    //API's
    Route::post('verify-user','EmployeeController@verify_user');
    Route::get('emp-login','EmployeeController@emp_login');
    Route::get('hello', function(){return "Hello World"; });
    Route::post('add-customer', 'EmployeeController@add_customer');
    Route::post('membership-sale', 'EmployeeController@membership_sale');

    //REPORTING ROUTES
    //DashFronT
    Route::get('dashfront','ReportingController@dashfront')->name('dashfront.dashfront');

    Route::get('viewfull/{data}','ReportingController@viewfull');

    Route::get('state_wise_app_detail/{data}','ReportingController@state_wise_app_detail');
    Route::get('viewfull-store-data/{data}','ReportingController@viewfull_store_data');
    Route::get('state_wise_store_transaction_detail/{data}','ReportingController@state_wise_store_transaction_detail');
    Route::get('viewfull-particular-state-store-transaction-details/{data}','ReportingController@view_store_transaction');
    //Route::get('state_wise_viewfull_store_transactions/{data}','ReportingController@view_store_transaction');
    Route::get('state_wise_store_customer_detail/{data}','ReportingController@state_wise_store_customer_detail');
    Route::get('viewfull-particular-state-store-customer-details/{data}','ReportingController@view_store_customer');
    //DashFronT


    Route::get('/latest-users-list', 'ReportingController@register_users_list');
    Route::get('/todays-total-memberships', 'ReportingController@todays_total_memberships');
    Route::get('/total-active-apps', 'ReportingController@total_active_apps_till_today');
    Route::get('/total-memberships-299', 'ReportingController@total_memberships_of_299_till_today');
    Route::get('/total-active-memberships-299', 'ReportingController@active_memberships_of_299_till_today');
    Route::get('/total-other-memberships', 'ReportingController@total_other_memberships_till_today');
    Route::get('/total-other-active-memberships', 'ReportingController@active_other_memberships_till_today');

    Route::get('/statewise-record', 'ReportingController@statewise_record');
    Route::get('/statewise-view-all', 'ReportingController@statewise_view_all');
    //REPORTING ROUTES

    //SALARY ADMIN ROUTES
    Route::get('salary-admin', 'HrController@assigned_details')->name('salary-admin.salary-admin');
    Route::get('daily_sales','HrController@daily_sales');


    //Route::get('salary-admin', 'EmployeeController@uncleared')->name('salary-admin.salary-admin');
    //SALARY ADMIN ROUTES

    //Salary CALCULATE
    Route::get('my-salary-calculations','EmployeeController@salary_calculate');
    //Salary CALCULATE


    //REPORT STORE DASHFRONT
    Route::get('store-view-membership/{data}','ReportingController@store_view_membership');
    //REPORT STORE DASHFRONT


    //SHOPKEEPER
    Route::get('add-shopkeeper','EmployeeController@add_free_shopkeeper')->name('add-shopkeeper.add-shopkeeper');

    Route::post('update-logo-banner/{data}','EmployeeController@update_logo_banner')->name('update-logo-banner.update-logo-banner');
    Route::post('update-agreement/{data}','EmployeeController@update_agreement')->name('update-agreement.update-agreement');
    Route::post('approve-design-agreement/{data}','EmployeeController@approve_design_agreement')->name('approve-design-agreement.approve-design-agreement');
    //SHOPKEEPER

});
Route::get('verify-shops','EmployeeController@verify_shops')->name('verify-shops.verify-shops');



Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
});

Route::group(['prefix' => 'Employee', 'middleware' => ['role:Employee']], function(){
    Route::get('my_customers','Employee\EmployeeController@myCustomers')->name('employee.customer');
    Route::get('my_store','Employee\EmployeeController@myStores')->name('employee.store');
});


Route::group(['prefix' => 'Employee', 'middleware' => ['role:ContentWriter']], function(){

});

Route::group(['prefix' => 'Employee', 'middleware' => ['role:HR']], function(){

});

Route::group(['prefix' => 'Employee', 'middleware' => ['role:Manager']], function(){

});

Route::group(['prefix' => 'Employee', 'middleware' => ['role:Designer']], function(){


});


