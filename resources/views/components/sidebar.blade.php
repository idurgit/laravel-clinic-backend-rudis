<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Rudi Clinic</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">RC</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>
                </ul>

                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('users.index') }}"><i
                                class="fa-solid fa-hospital-user"></i>Users</a>
                    </li>
                </ul>

                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('doctors.index') }}"><i
                                class="fa-solid fa-stethoscope"></i>Doctors</a>
                    </li>
                </ul>

                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('doctor-schedules.index') }}"><i
                                class="fa-solid fa-stethoscope"></i>Doctor Schedules</a>
                    </li>
                </ul>
            </li>

    </aside>
</div>
