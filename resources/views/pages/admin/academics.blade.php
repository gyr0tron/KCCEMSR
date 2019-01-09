@extends('layouts.master2')
@section('pre')
  @php
  $title = "Academics";
  $menu_item = 'academics';
@endphp
@endsection
@section('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap3-wysihtml5.min.css') }}">
@endsection
@section('content')
  <section class="content-header">
    <h1>
      Academics
      <small>Manage Academics</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a class="active"><i class="fa fa-dashboard"></i> Academics</a></li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-xs-10">
        @if ($action == "curriculum-plan")
          @include('forms.curriculum-plan')
        @endif
        @if ($action == "staff-notices")
          @include('forms.staff-notices')
        @endif
        @if ($action == "exam-results")
          @include('forms.exam', ["title"=>"Exam Results", "action"=>"exam-results"])
        @endif
        @if ($action == "exam-notices")
          @include('forms.exam', ["title"=>"Exam Notices", "action"=>"exam-notices"])
        @endif
        @if ($action == "exam-timetable")
          @include('forms.exam', ["title"=>"Exam Timetable", "action"=>"timetable"])
        @endif
        @if ($action == "circulars")
          @include('forms.exam', ["title"=>"Circulars", "action"=>"circulars"])
        @endif
      </div>
      <div class="col-sm-2">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title"></h3>
          </div>
          <div class="box-body">
            <ul class="nav nav-pills nav-stacked">
              <li class="{{$action=="curriculum-plan"?"active":""}}"><a href="{{route("admin_academics", "curriculum-plan")}}">Curriculum Plan</a></li>
              <li class="{{$action=="staff-notices"?"active":""}}"><a href="{{route("admin_academics", "staff-notices")}}">Staff Notices</a></li>
              <li class="{{$action=="exam-results"?"active":""}}"><a href="{{route("admin_academics", "exam-results")}}">Exam Results</a></li>
              <li class="{{$action=="exam-notices"?"active":""}}"><a href="{{route("admin_academics", "exam-notices")}}">Exam Notices</a></li>
              <li class="{{$action=="exam-timetable"?"active":""}}"><a href="{{route("admin_academics", "exam-timetable")}}">Exam Timetable</a></li>
              <li class="{{$action=="circulars"?"active":""}}"><a href="{{route("admin_academics", "circulars")}}">Circulars</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
