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
      Carousel
      <small>Home carousel</small>
      <button type="button" name="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#carousel-newimage">Add new</button>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a class="active">Carousel</a></li>
    </ol>
  </section>

  {{-- Add New --}}
  <div id="carousel-newimage" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Image</h4>
        </div>
        <div class="modal-body">
          @include('forms.carousel_newimage')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">All Images</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="carousel-table" class="table table-bordered table-hover table-striped datatable-full">
              <thead>
                <tr>
                  <th width="10%">#</th>
                  <th width="20%">Image</th>
                  <th width="20%">Title</th>
                  <th width="30%">Description</th>
                  <th width="20%">Actions</th>
                </tr>
              </thead>
              <tbody>
                @php
                $no=1;
                @endphp
                @foreach (App\Carousel::all() as $car)
                  <tr>
                    <td>{{$no}}</td>
                    <td><a href="{{$car->getUrl()}}" data-fancybox><img src="{{$car->getThumb()}}" alt="" width="250" height="150"></a></td>
                    <td>{{$car->title}}</td>
                    <td>{{$car->description}}</td>
                    <td>
                      <a class="btn btn-warning btn-sm btn-table" href="{{route("admin_editcarouselimage", $car->id)}}"><i class="fa fa-pencil"></i></a>
                      <a class="btn btn-sm btn-danger btn-table" onclick="dashboard.removeYesNo('Are you sure you want to remove this carousel image ?', '/api/admin/carousel/removeimage', {{$car->id}})"><i class="fa fa-trash-o"></i></a>
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
                  <th width="20%">Image</th>
                  <th width="20%">Title</th>
                  <th width="30%">Description</th>
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
