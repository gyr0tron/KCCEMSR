@extends('layouts.master2')
@section('pre')
  @php
  $title = "Events";
  $menu_item = 'events';
@endphp
@endsection
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap3-wysihtml5.min.css') }}">
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Event
        <small>{{$event->name}}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{route("admin_events")}}">Events</a></li>
        <li><a class="active">Edit</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        @include('forms.editevent', compact("event","images"))
      </div>
    </section>
    <!-- /.content -->
@endsection
@section('post')
<script type="text/javascript" src="{{ asset('js/bootstrap3-wysihtml5.all.min.js') }}"></script>
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
