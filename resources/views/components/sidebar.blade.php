<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">SIAKAD</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SKD</a>
        </div>
        <ul class="sidebar-menu">
            {{-- <li class="menu-header">Dashboard</li> --}}
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link"
                            href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>
                    
                </ul>
            </li>

            <li class="nav-item dropdown ">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Users </span></a>
                <ul class="dropdown-menu">
                    <li >
                        <a class="nav-link"
                            href="{{ route('user.index') }}">Users List</a>
                    </li>
                    
                </ul>
            </li>

    </aside>
</div>
