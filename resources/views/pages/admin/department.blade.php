@extends('layouts.master2')
@section('pre')
  @php
  $title = "Department of " . $dep->name;
  $menu_item = 'departments';
  $second = $dep->url;
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
        @if (isset($edit))
          @if ($action == "staff")
            @include('forms.department-staff-edit',compact("dep","edit"))
          @endif
        @else
          @if ($action == "overview")
            @include('forms.department-overview',compact("dep","action"))
          @endif
          @if ($action == "departmental-achievements")
            @include('forms.department-departmental-achievements',compact("dep","action"))
          @endif
          @if ($action == "students-achievement")
            @include('forms.department-students-achievement',compact("dep","action"))
          @endif
          @if ($action == "staff")
            @include('forms.department-staff',compact("dep","action"))
          @endif
        @endif
      </div>
      <div class="col-sm-2">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title"></h3>
          </div>
          <div class="box-body">
            <ul class="nav nav-pills nav-stacked">
              <li class="{{$action=="overview"?"active":""}}"><a href="{{route("admin_department", [$dep->url, "overview"])}}">Overview</a></li>
              <li class="{{$action=="departmental-achievements"?"active":""}}"><a href="{{route("admin_department", [$dep->url, "departmental-achievements"])}}">Departmental Achievement</a></li>
              <li class="{{$action=="students-achievement"?"active":""}}"><a href="{{route("admin_department", [$dep->url, "students-achievement"])}}">Student's Achievement</a></li>
              <li class="{{$action=="staff"?"active":""}}"><a href="{{route("admin_department", [$dep->url, "staff"])}}">Staff</a></li>
            </ul>
          </div>
        </div>
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
