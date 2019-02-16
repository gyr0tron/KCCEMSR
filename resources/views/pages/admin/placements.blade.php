@extends('layouts.master2')
@section('pre')
  @php
  $title = "Placements";
  $menu_item = 'placements';
@endphp
@endsection
@section('content')
  <section class="content-header">
    <h1>
      Placements
      <small>Manage Placements</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a class="active"><i class="fa fa-tasks"></i> Placements</a></li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-sm-9">
        @include("forms.$action", compact('action'));
      </div>
      <div class="col-sm-3">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title"></h3>
          </div>
          <div class="box-body">
            <ul class="nav nav-pills nav-stacked">
              <li class="{{$action=="placement-process"?"active":""}}"><a href="{{route("admin_placements", 'placement-process')}}">Placement Process</a></li>
              <li class="{{$action=="student-placement"?"active":""}}"><a href="{{route("admin_placements", 'student-placement')}}">Student Placements</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('post')
@endsection
