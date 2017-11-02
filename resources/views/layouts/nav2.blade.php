@if (Auth::checK())
  <header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">KC</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">KCCOE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://via.placeholder.com/16x16" class="img-circle" alt="User Image">&nbsp;{{Auth::user()->fullname}} <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{route("admin_logout")}}"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
          <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
          <li><a href="{{route("admin_carousel")}}"><i class="fa fa-laptop"></i> <span>Carousel</span></a></li>
          <li>
            <a href="{{route("admin_dashboard")}}">
              <i class="fa fa-calendar"></i> <span>Events</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-red">3</small>
                <small class="label pull-right bg-blue">17</small>
              </span>
            </a>
          </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-building-o"></i>
            <span>Departments</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @foreach (App\Department::all() as $dep)
              <li><a href="{{route("admin_dashboard")}}">{{$dep->name}}</a></li>
            @endforeach
          </ul>
        </li>
        <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-book"></i> <span>Library</span></a></li>
        @if (Auth::user()->is_admin())
          <li><a href="{{route("admin_users")}}"><i class="fa fa-users"></i> <span>Users</span></a></li>
        @endif
        <li><a href="{{route("admin_settings")}}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Left side column. contains the logo and sidebar -->
  {{-- Siderbar --}}

@endif
