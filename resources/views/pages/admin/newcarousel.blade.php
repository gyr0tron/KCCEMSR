@extends('layouts.master2')
@section('pre')
  @php
  $title = "New Carousel";
  $menu_item = 'carousel';
@endphp
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Add New Carousel
      <small>New Carousel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{route('admin_carousel')}}"><i class="fa fa-laptop"></i> Carousels</a></li>
      <li><a class="active">New</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">New Carousel</h3>
          </div>
          <div class="box-body">
            @include('forms.newcarousel')
          </div>
        </div>
      </div>
    </div>
  </section>+
@endsection
@section('post')
@endsection
