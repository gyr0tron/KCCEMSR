@extends('layouts.master2')
@section('pre')
  @php
  $title = "Events";
  $menu_item = 'events';
@endphp
@endsection
@section('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap3-wysihtml5.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/dropzone.min.css') }}">
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      New Event
      <small>New Event</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{route("admin_events")}}">Events</a></li>
      <li><a class="active">New</a></li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">New Event</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            @include('forms.newevent')
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
  <script type="text/javascript" src="{{ asset('js/bootstrap3-wysihtml5.all.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/dropzone.min.js') }}"></script>
  <script>
  $(function () {
    $('#description').wysihtml5({
      toolbar: {
        "font-styles": true,
        "emphasis": true,
        "lists": true,
        "html": false,
        "link": true,
        "image": false,
        "color": false,
        "blockquote": true
      }
    });
  })
  </script>
@endsection
