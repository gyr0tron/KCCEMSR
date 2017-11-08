@extends('layouts.master2')
@section('pre')
  @php
  $title = "Edit - " . $car->title;
  $menu_item = 'users';
@endphp
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Carousel Image
      <small>{{$car->title}}</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{route("admin_carousel")}}">Carousel</a></li>
      <li><a class="active">{{$car->title}}</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Edit Image Attributes</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            @include('forms.carousel_editimage', compact("car"))
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
