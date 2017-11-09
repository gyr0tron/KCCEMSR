@if (Auth::checK())
  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">KC</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>KCCOE</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="http://via.placeholder.com/16x16" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{Auth::user()->fullname}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="http://via.placeholder.com/90x90" class="img-circle" alt="User Image">
                <p>
                  {{Auth::user()->fullname}}
                  <small>{{Auth::user()->getRole()}}</small>
                  <small>Member since {{Auth::user()->created_at->format('F j, Y')}}</small>
                </p>
              </li>
              <li class="user-footer">
                <center>
                  <a href="{{route("admin_logout")}}" class="btn btn-primary">Logout</a>
                </center>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">ADMIN DASHBOARD</li>
        <li class="{{$menu_item=='dashboard'?'active':''}}"><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>
        <li class="{{$menu_item=='carousel'?'active':''}}"><a href="{{route("admin_carousel")}}"><i class="fa fa-laptop"></i> <span>Carousel</span></a></li>
        <li class="{{$menu_item=='events'?'active':''}}">
          <a href="{{route("admin_events")}}">
            <i class="fa fa-calendar"></i> <span>Events</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li class="{{$menu_item=='admission'?'active':''}}"><a href="{{route("admin_dashboard")}}"><i class="fa fa-university"></i> <span>Admission</span></a></li>
        {{-- <li class="treeview">
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
        </li> --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-book"></i> <span>Library</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{$menu_item=='library'?'active':''}}"><a href="{{route("admin_dashboard")}}">Question Papers</a></li>
            <li class="{{$menu_item=='library'?'active':''}}"><a href="{{route("admin_dashboard")}}">E-Books</a></li>
            <li class="{{$menu_item=='library'?'active':''}}"><a href="{{route("admin_dashboard")}}">Timetable</a></li>
            <li class="{{$menu_item=='library'?'active':''}}"><a href="{{route("admin_dashboard")}}">Syllabus</a></li>
          </ul>
        </li>
        @if (Auth::user()->is_admin())
          <li class="{{$menu_item=='users'?'active':''}}"><a href="{{route("admin_users")}}"><i class="fa fa-users"></i> <span>Users</span></a></li>
        @endif
        <li class="{{$menu_item=='settings'?'active':''}}"><a href="{{route("admin_settings")}}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
        <li class="header">REMOTE</li>
        <li><a href="#"><i class="fa fa-lemon-o"></i> <span>Alumni</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

@endif
