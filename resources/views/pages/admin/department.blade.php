@extends('layouts.master2')
@section('pre')
  @php
  $title = "Department of " . $dep->name;
  $menu_item = 'events';
@endphp
@endsection
@section('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap3-wysihtml5.min.css') }}">
@endsection
@section('content')
  <section class="content-header">
    <h1>
      {{"Department of " . $dep->name}}
      <small>Manage Department</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a ><i class="fa fa-dashboard"></i> Department</a></li>
      <li><a class="active">{{$dep->name}}</a></li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-xs-10">
        @include('forms.department-overview',compact("dep"))
      </div>
    </div>
  </section>
@endsection
@section('post')
  <script type="text/javascript" src="{{ asset('js/bootstrap3-wysihtml5.all.min.js') }}"></script>
  <script>
  $(function () {
    $('#description').wysihtml5({
      toolbar: {
        "font-styles": false,
        "emphasis": true,
        "lists": false,
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
