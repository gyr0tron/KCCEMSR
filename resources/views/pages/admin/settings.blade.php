@extends('layouts.master2')
@section('pre')
  @php
  $title = "Settings";
  $menu_item = 'settings';
@endphp
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Settings
      <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a class="active">Settings</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">User Settings</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <form id="form-usersettings" action="/api/admin/usersettings" method="post" class="form-horizontal" data-form="sr">
              <div class="form-group">
                <label class="control-label col-sm-2" for="username">Color Scheme:</label>
                <div class="col-sm-4">
                  @include('forms.skinlist', ['user'=>Auth::user()])
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="username">Username:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="username" name="username" value="{{Auth::user()->username}}" disabled>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="fullname">Fullname:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="fullname" name="fullname" value="{{Auth::user()->fullname}}">
                  <p class="help-block"></p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-4">
                  <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
                  <p class="help-block"></p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="password">New Password:</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="password" name="password" data-toggle="password">
                  <p class="help-block"></p>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                  <button type="submit" class="btn btn-primary btn-wide">Update</button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    @if (Auth::user()->is_admin())
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Site Settings</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form id="form-sitesettings" action="/api/admin/settings/main" method="post" class="form-horizontal" data-form="sr">
                <div class="form-group">
                  <h3 class="control-label col-sm-2">Mail Settings</h3>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="mail_contactus">Contact us Mail:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="mail_contactus" name="mail_contactus" value="{{setting('mail_contactus','')}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="mail_career">Career At KC Mail:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="mail_career" name="mail_career" value="{{setting('mail_career','')}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="mail_grievance">Grievance Redressal Mail:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="mail_grievance" name="mail_grievance" value="{{setting('mail_grievance','')}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="mail_admissions">Admissions Mail Mail:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="mail_admissions" name="mail_admissions" value="{{setting('mail_admissions','')}}">
                  </div>
                </div>
                <div class="form-group">
                  <h3 class="control-label col-sm-2">Maintenance Settings</h3>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Maintenance:</label>
                  <div class="col-sm-4">
                    @if (setting('break',0) == 0)
                      <input id="break" name="break" type="checkbox" data-toggle="toggle" data-width="100" data-height="34">
                    @else
                      <input id="break" name="break" type="checkbox" checked data-toggle="toggle" data-width="100" data-height="34">
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="break-title">Maintenance Title:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="break-title" name="break-title" value="{{setting('break-title','Service Unavailable')}}">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-4">
                    <button type="submit" class="btn btn-primary btn-wide">Save</button>
                  </div>
                </div>
                <hr />
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Check for Update:</label>
                  <div class="col-sm-4">
                    <a href="{{route("admin_update")}}" class="btn btn-success btn-wide">Update</a>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    @endif
    <!-- /.row -->
  </section>
  <!-- /.content -->
@endsection
@section('post')
@endsection
