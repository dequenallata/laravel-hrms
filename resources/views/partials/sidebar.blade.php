<ul class="nav nav-sidebar">
    <li class="{{ (isset($activeMenuDashboard) && $activeMenuDashboard) ? 'active' : '' }}">
        <a href="{{ route('home') }}">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="{{ (isset($activeMenuDepartment) && $activeMenuDepartment) ? 'active' : '' }}">
        <a href="#">
            <i class="fa fa-cubes"></i>
            <span>Department</span>
        </a>
    </li>
    <li class="{{ (isset($activeMenuStaff) && $activeMenuStaff) ? 'active' : '' }}">
        <a href="#">
            <i class="fa fa-group"></i>
            <span>Staff</span>
        </a>
    </li>
    <li class="{{ (isset($activeMenuPosition) && $activeMenuPosition) ? 'active' : '' }}">
        <a href="#">
            <i class="fa fa-sitemap"></i>
            <span>Positions</span>
        </a>
    </li>
</ul>
