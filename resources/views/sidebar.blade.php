<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{URL::asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Employee JB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{URL::asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>
{{--        @if(Auth::user()->user_type == 1)--}}

        @role('Admin')
            <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Employees
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('add-employee.add-employee')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Employee</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('list-employee.list-employee')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Employee</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Users
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('manage-users.manage-users')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('list-users.list-users')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Users</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Target Bonus
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('target-bonus.target-bonus')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Basic Venue Target</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('target-bonus-bdm.target-bonus-bdm')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add BDM Target</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Spot Bonus
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('spot-bonus.spot-bonus')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Basic Venue Spot</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('spot-bonus-bdm.spot-bonus-bdm')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add BDM Spot</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            HR
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('salary-admin.salary-admin')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Salary Admin</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{route('add-employee-type.add-employee-type')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Add Employee Type
                        </p>
                    </a>
                </li>


                <li class="nav-item has-treeview">
                    <a href="{{route('add-venue.add-venue')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Add Venue
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{route('add-travel-expenses.add-travel-expenses')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Add Travel Expenses
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Sales
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('mysales.mysales')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>My Sales</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('mysales-view.mysales-view')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Sales</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        @endrole
        {{--@elseif(Auth::user()->user_type == 2)--}}
            {{--@role('Employee')--}}
        {{--@else--}}
        @role('Employee')
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item has-treeview">
                            <a href="{{route('employee.profile')}}" class="nav-link">
                                <i class="nav-icon fas fa-user-friends"></i>
                                <p>
                                    Profile
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-friends"></i>
                                <p>
                                    My Bonus
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>My Spot Bonus</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>My Target Bonus</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="{{route('employee.customer')}}" class="nav-link">
                                <i class="nav-icon fas fa-user-friends"></i>
                                <p>
                                    My Customers
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="{{route('employee.store')}}" class="nav-link">
                                <i class="nav-icon fas fa-user-friends"></i>
                                <p>
                                    My Stores
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-friends"></i>
                                <p>
                                    My Salary
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
        @endrole

        @role('HR')
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview">
                    <a href="{{route('employee.profile')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                           HR Pending Uncleared
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{route('employee.customer')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                           Assigned
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{route('employee.store')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Printed
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Cleared
                        </p>
                    </a>
                </li>

            </ul>
        </nav>

        @endrole

        @role('Manager')
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview">
                    <a href="{{route('employee.profile')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                           Manager Designer Uploaded
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{route('employee.customer')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Content Writer Uploaded
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{route('employee.store')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Approved
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Completed 123
                        </p>
                    </a>
                </li>

            </ul>
        </nav>

        @endrole

        @role('Designer')
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview">
                    <a href="{{route('employee.profile')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                             Designer Shops
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{route('employee.customer')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Picked Shops
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{route('employee.store')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            My Work
                        </p>
                    </a>
                </li>
            </ul>
        </nav>

        @endrole

        @role('ContentWriter')
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview">
                    <a href="{{route('employee.profile')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Content Writer  Shops
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{route('employee.customer')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Picked Shops
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{route('employee.store')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            My Work
                        </p>
                    </a>
                </li>
            </ul>
        </nav>




        @else
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-item has-treeview">
                        <a href="{{route('employee.profile')}}" class="nav-link">
                            <i class="nav-icon fas fa-user-friends"></i>
                            <p>
                                Profile
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user-friends"></i>
                            <p>
                                View Memberships
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user-friends"></i>
                            <p>
                                View Deals
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user-friends"></i>
                            <p>
                                Offers
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user-friends"></i>
                            <p>
                                Transactions
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>

        {{--@endif--}}

        @endrole
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>