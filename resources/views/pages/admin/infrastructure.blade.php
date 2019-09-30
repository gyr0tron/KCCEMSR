@extends('layouts.master2')
@section('pre')
  @php
  $title = "Infrastructures";
  $menu_item = 'infrastructures';
@endphp
@endsection
@section('content')
  <section class="content-header">
    <h1>
      Infrastructures
      <small>Manage Infrastructures</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a class="active">Infrastructures</a></li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">All Infrastructures</h3>
          </div>
          <div class="box-body">
            <table id="testimonials-table" class="table table-bordered table-hover table-striped datatable-full">
              <thead>
                <tr>
                  <th width="20%"></th>
                  <th width="20%">Name</th>
                  <th width="30%">Department</th>
                  <th width="20%">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach (App\Infrastructure::all() as $test)
                  <tr>
                    <td><a href="{{$test->getFeaturedImage()}}" data-fancybox><img src="{{$test->getFeaturedImage()}}" alt="" width="74"></a></td>
                    <td>{{$test->name}}</td>
                    <td>{{$test->department}}</td>
                    <td>
                      <a class="btn btn-sm btn-danger btn-table" onclick="dashboard.removeYesNo('Are you sure you want to remove {{$test->name}} ?', '/api/admin/infrastructure/remove', {{$test->id}})"><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th width="20%"></th>
                  <th width="20%">Name</th>
                  <th width="30%">Department</th>
                  <th width="20%">Actions</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Add New</h3>
          </div>
          <div class="box-body">
            @include('forms.infrastructure-add')
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('post')
@endsection
