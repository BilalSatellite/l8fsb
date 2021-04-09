<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SMI-Manager</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="{{ route('dashbord') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <span class="border-top"></span>
                    <!-- <span class="border-top"></span> -->
                    <!-- <li class="nav-header text-center"><i class="fas fa-tasks"></i> Users Management</li> -->
                    <li class="nav-item">
                        <a href="{{ route('profile') }}" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>

                            <p>My Profile</p>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="{{ route('accountsettings') }}" class="nav-link">
                            <i class="nav-icon fas fa-users-cog"></i>
                            <p>Account Settings</p>
                        </a>
                    </li> --}}

                      <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-users-cog"></i>
                          <p>
                            Account Settings
                            <i class="fas fa-angle-left right"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="{{ route('change-password') }}" class="nav-link">
                              <i class="fas fa-key nav-icon"></i>
                              <p>Change Password</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{ route('two-factor-authentication') }}" class="nav-link">
                              <i class="fas fa-lock nav-icon"></i>
                              <p>Two Factor Auth</p>
                            </a>
                          </li>

                        </ul>
                      </li>
                    <li class="nav-item ">
                        <a href="{{ url('/users') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/students') }}" class="nav-link">
                            <i class="nav-icon fas fa-user-graduate"></i>
                            <p>Students</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/users') }}" class="nav-link">
                            <i class="nav-icon fas fa-users-cog"></i>
                            <p>Staff</p>
                        </a>
                    </li>
                    <!-- <span class="border-top"></span> -->
                    <li class="nav-item ">
                        <a href="{{ url('/users') }}" class="nav-link">
                            <i class="nav-icon fas fa-user-tag"></i>
                            <p>Roles</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/users') }}" class="nav-link">
                            <i class="nav-icon fas fa-user-shield"></i>
                            <p>Permissions</p>
                        </a>
                    </li>
                    <!-- <span class="border-top"></span> -->
                    <li class="nav-item ">
                        <a href="{{ url('/users') }}" class="nav-link">
                            <i class="nav-icon fas fa-rupee-sign"></i>
                            <p>Payements</p>
                        </a>
                    </li>

                    <!-- <li class="nav-header text-center"><i class="fas fa-user-shield"></i> Roles & Permisstions</li> -->
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
</aside>
