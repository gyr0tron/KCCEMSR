@extends('layouts.master2')
@section('pre')
  @php
  $title = "Users";
  $menu_item = 'users';
@endphp
@endsection
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
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
              <form id="form-usersettings" action="" method="post" class="form-horizontal">
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
    </section>
    <!-- /.content -->
  </div>
@endsection
@section('post')
@endsection
