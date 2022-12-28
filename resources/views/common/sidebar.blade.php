<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon ">
            <img src={{ asset('img/logo.png') }} alt="logo">
        </div>
        <div class="sidebar-brand-text mx-3">Tech-Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item nav-link py-3 border-bottom text-white">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt text-white"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-white">
        Management
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item nav-link py-3 border-bottom ">
        <a class="nav-link collapsed text-white" href="#" data-toggle="collapse" data-target="#taTpDropDown"
            aria-expanded="true" aria-controls="taTpDropDown">
            <i class="fas fa-user-alt text-white"></i>
            <span>User Management</span>
        </a>
        <div id="taTpDropDown" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">User Management:</h6>
                <a class="collapse-item" href="{{ route('users.index') }}">List</a>
                <a class="collapse-item" href="{{ route('users.create') }}">Add New</a>
                <a class="collapse-item" href="{{ route('users.import') }}">Import Data</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    @hasrole('Super Admin')
        <!-- Heading -->
        <div class="sidebar-heading text-white">
            Admin Section
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item nav-link py-3 border-bottom ">
            <a class="nav-link collapsed text-white" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder text-white"></i>
                <span>Masters</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Role & Permissions</h6>
                    <a class="collapse-item" href="{{ route('roles.index') }}">Roles</a>
                    <a class="collapse-item" href="{{ route('permissions.index') }}">Permissions</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
    @endhasrole

    <li class="nav-item">
        <a href="{{ route('phases') }}" class="nav-link py-3 border-bottom {{ isActiveRoute('phases') }}">
            <img src="{{ asset('img/icons/2.png') }}" width="40" alt="">
            <p class="mb-0 text-white">Phases</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('tasks') }}" class="nav-link py-3 border-bottom {{ isActiveRoute('tasks') }}">
            <img src="{{ asset('img/icons/3.png') }}" width="40" alt="">
            <p class="mb-0 text-white">Tasks</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link py-3 border-bottom {{ isActiveRoute('') }}">
            <img src="{{ asset('img/icons/4.png') }}" width="40" alt="">
            <p class="mb-0 text-white">Resource Plan</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link py-3 border-bottom {{ isActiveRoute('') }}">
            <img src="{{ asset('img/icons/5.png') }}" width="40" alt="">
            <p class="mb-0 text-white">Resource Profile</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link py-3 border-bottom {{ isActiveRoute('') }}">
            <img src="{{ asset('img/icons/6.png') }}" width="40" alt="">
            <p class="mb-0 text-white">Expenses</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link py-3 border-bottom {{ isActiveRoute('') }}">
            <img src="{{ asset('img/icons/7.png') }}" width="40" alt="">
            <p class="mb-0 text-white">Approval Summary</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link py-3 border-bottom {{ isActiveRoute('') }}">
            <img src="{{ asset('img/icons/8.png') }}" width="40" alt="">
            <p class="mb-0 text-white">Analysis</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('staff') }}" class="nav-link py-3 border-bottom {{ isActiveRoute('staff') }}">
            <img src="{{ asset('img/icons/9.png') }}" width="40" alt="">
            <p class="mb-0 text-white">Staff</p>
        </a>
    </li>


    <li class="nav-item text-white">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt text-white"></i>
            <span>Logout</span>
        </a>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
