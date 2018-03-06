@extends('layouts.master2')
@section('pre')
  @php
  $title = "Carousel";
  $menu_item = 'carousel';
@endphp
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Carousels
      <small>Manage Carousels</small>
      <a class="btn btn-primary btn-sm" href="{{route('admin_newcarousel')}}">Add new</a>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a class="active">Carousels</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">All Carousels</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="carousel-table" class="table table-bordered table-hover table-striped datatable-full">
              <thead>
                <tr>
                  <th width="10%">#</th>
                  <th width="20%">Name</th>
                  <th width="20%">Slug</th>
                  <th width="20%">Actions</th>
                </tr>
              </thead>
              <tbody>
                @php
                $no=1;
                @endphp
                @foreach (App\Carousel::orderBy('id','desc')->get() as $car)
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$car->name}}</td>
                    <td>{{$car->type}}</td>
                    <td>
                      <a class="btn btn-warning btn-sm btn-table" href="{{route("admin_editcarouselimage", $car->id)}}"><i class="fa fa-pencil"></i></a>
                      <a class="btn btn-sm btn-danger btn-table" onclick="dashboard.removeYesNo('Are you sure you want to remove {{$car->name}} ?', '/api/admin/carousel/remove', {{$car->id}})"><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                  @php
                  $no++;
                  @endphp
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th width="10%">#</th>
                  <th width="20%">Name</th>
                  <th width="20%">Slug</th>
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
