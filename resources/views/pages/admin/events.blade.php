@extends('layouts.master2')
@section('pre')
  @php
  $title = "Events";
  $menu_item = 'events';
@endphp
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Events
      <small>Manage Events</small>
      <a class="btn btn-primary btn-sm" href="{{route("admin_newevent")}}">Add new</a>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a class="active">Events</a></li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">All Events</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="carousel-table" class="table table-bordered table-hover table-striped">
              <thead>
                <tr>
                  <th width="10%">#</th>
                  <th width="20%">Image</th>
                  <th width="20%">Name</th>
                  <th width="30%">Department</th>
                  <th width="20%">Actions</th>
                </tr>
              </thead>
              <tbody>
                @php
                $no=1;
                @endphp
                @foreach (App\Event::all() as $event)
                  <tr>
                    <td>{{$no}}</td>
                    <td><a href="{{$event->getFeaturedImage()}}" data-fancybox><img src="{{$event->getFeaturedImage()}}" alt="" width="250" height="150"></a></td>
                    <td>{{$event->name}}</td>
                    <td>{{App\Department::getName($event->department)}}</td>
                    <td><a class="btn btn-warning btn-sm btn-table " href="{{route("admin_editevent", $event->id)}}">Edit</a><a class="btn btn-sm btn-danger btn-table " onclick="dashboard.removeEvent({{$event->id}})">Remove</a></td>
                  </tr>
                  @php
                  $no++;
                  @endphp
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th width="10%">#</th>
                  <th width="20%">Image</th>
                  <th width="20%">Name</th>
                  <th width="30%">Department</th>
                  <th width="20%">Actions</th>
                </tr>
              </tfoot>
            </table>
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
