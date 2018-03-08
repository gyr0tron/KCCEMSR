@extends('layouts.master2')
@section('pre')
  @php
  $title = "Technovision";
  $menu_item = 'publication';
@endphp
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Technovision
      <small>Manage Publication</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a ><i class="fa fa-newspaper-o"></i> Publications</a></li>
      <li><a class="active">Technovision </a></li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">All Volumes</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="publication-table" class="table table-bordered table-hover table-striped datatable-full">
              <thead>
                <tr>
                  <th width="10%">#</th>
                  <th width="50%">Title</th>
                  <th width="20%">Volume</th>
                  <th width="20%">Posted On</th>
                  <th width="20%">Actions</th>
                </tr>
              </thead>
              <tbody>
                @php
                $no=1;
                @endphp
                @foreach (App\FileUpload::where('type','technovision')->orderBy('id', 'desc')->get(); as $file)
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$file->name}}</td>
                    <td>{{$file->year}}</td>
                    <td>{{$file->created_at->format('d M Y')}}</td>
                    <td><a class="btn btn-sm btn-danger btn-table" onclick="dashboard.removeYesNo('Are you sure you want to remove {{$file->name}} ?', '/api/admin/publication/technovision/remove', {{$file->id}})"><i class="fa fa-trash-o"></i></a></td>
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
                  <th width="20%">Volume</th>
                  <th width="20%">Posted On</th>
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
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Add New Volume</h3>
          </div>
          <div class="box-body">
            <form id="form-publication-new" action="/api/admin/publication/technovision/add" method="post" class="form-horizontal" data-form="sr">
              <div class="form-group">
                <label class="control-label col-sm-2" for="title">Title:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="title" name="title">
                  <p class="help-block"></p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="volume">Volume:</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" id="volume" name="volume">
                  <p class="help-block"></p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="description">File:</label>
                <div class="col-sm-9">
                  <input type="file" class="form-control" id="file" name="file">
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
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Update Guidelines for Contribution</h3>
          </div>
          <div class="box-body">
            <form id="form-publication-update" action="/api/admin/publication/technovision/guidelines" method="post" class="form-horizontal" data-form="sr">
              <div class="form-group">
                <label class="control-label col-sm-2" for="file_contribution">File:</label>
                <div class="col-sm-9">
                  <input type="file" class="form-control" id="file_contribution" name="file_contribution">
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
        </div>
      </div>
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
@endsection
@section('post')
@endsection
