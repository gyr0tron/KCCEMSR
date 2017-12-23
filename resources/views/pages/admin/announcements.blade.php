@extends('layouts.master2')
@section('pre')
  @php
  $title = "Announcements";
  $menu_item = 'announcements';
@endphp
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Announcements
      <small>Manage Announcements</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a class="active">Announcements</a></li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">All Announcements</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="announcement-table" class="table table-bordered table-hover table-striped">
              <thead>
                <tr>
                  <th width="10%">#</th>
                  <th width="50%">Title</th>
                  <th width="20%">Actions</th>
                </tr>
              </thead>
              <tbody>
                @php
                $no=1;
                @endphp
                @foreach (App\Announcement::all() as $anouncement)
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$anouncement->title}}</td>
                    <td><a class="btn btn-sm btn-danger btn-table" onclick="dashboard.deleteAnnoncement({{$anouncement->id}})"><i class="fa fa-trash-o"></i></a></td>
                  </tr>
                  @php
                  $no++;
                  @endphp
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th width="10%">#</th>
                  <th width="50%">Title</th>
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
    <div classname="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Add New</h3>
          </div>
          <div class="box-body">
            <form id="form-announcement-new" action="/api/admin/department/announcement/add" method="post" class="form-horizontal" data-form="sr">
              <div class="form-group">
                <label class="control-label col-sm-2" for="title">Title:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="title" name="title">
                  <p class="help-block"></p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="url">URL:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="url" name="url">
                  <p class="help-block"></p>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                  <button type="submit" class="btn btn-primary btn-wide">Add</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
@endsection
@section('post')
@endsection
