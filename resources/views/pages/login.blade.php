@extends('layouts.master2')
@section('pre')
  @php
  $title = "Login";
  $menu_item = 'login';
@endphp
@endsection
@section('content')
  <div class="container">
    <div class="row" style="margin-top:100px;">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <div class="panel panel-primary">
          <div class="panel-heading" style="padding:10px;">
            <span class="panel-title">Login</span>
          </div>
          <div class="panel-body">
            @if ($errors->any())
              <div class="alert alert-danger">
                <span>{{trans('auth.failed')}}</span>
              </div>
            @endif
            <form method="post" id="login_form">
              {{ csrf_field() }}
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="username" type="text" class="form-control" name="username" placeholder="Email" value="{{old("username")}}">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <label><input type="checkbox" id="remember_me" name="remember_me">Remember me</label>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" name="button" class="btn btn-primary">Login</button>
              </div>
            </form>
          </div>
          <div class="panel-footer">

          </div>
        </div>
      </div>
      <div class="col-sm-3"></div>
    </div>
  </div>
@endsection
@section('post')
@endsection
