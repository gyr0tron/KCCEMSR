@extends('layouts.master2')
@section('pre')
  @php
  if(isset($car))
  $title = "Edit Carousel " . $car->name ;
  else
  $title = "New Carousel";
  $menu_item = 'carousel';
@endphp
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    @if (isset($car))
      <h1>
        Edit Carousel
        <small>{{$car->name}}</small>
      </h1>
    @else
      <h1>
        Add New Carousel
        <small>New Carousel</small>
      </h1>
    @endif

    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{route('admin_carousel')}}"><i class="fa fa-laptop"></i> Carousels</a></li>
      @if (isset($car))
        <li><a class="active">Edit</a></li>
      @else
        <li><a class="active">New</a></li>
      @endif
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            @if (isset($car))
              <h3 class="box-title">Edit Carousel</h3>
            @else
              <h3 class="box-title">New Carousel</h3>
            @endif
          </div>
          <div class="box-body">
            @if (isset($car))
              @include('forms.editcarousel', compact('car'))
            @else
              @include('forms.newcarousel')
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>+
@endsection
@section('post')
@endsection
