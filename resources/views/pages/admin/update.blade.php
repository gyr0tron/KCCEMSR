@extends('layouts.master2')
@section('pre')
  @php
  $title = "Site Update";
  $menu_item = 'settings';
@endphp
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Site Update
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{route("admin_settings")}}">Settings</a></li>
      <li><a class="active">Update</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-body">
            @foreach ($output as $value)
              {{$value}}<br />
            @endforeach
            <br />
            <a class="btn btn-primary btn-wide" href="{{route("admin_settings")}}">Go Back</a>
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
@endsection
@section('post')
@endsection
