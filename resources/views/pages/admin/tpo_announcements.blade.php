@extends('layouts.master2')
@section('pre')
  @php
  $title = "Announcements";
  $menu_item = 'tpo_announcements';
@endphp
@endsection
@section('content')
  <section class="content-header">
    <h1>
      Announcements
      <small>Manage Announcements</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a class="active">Announcements</a></li>
    </ol>
  </section>
  <section class="content">
    @include('forms.tpo_announcements')
  </section>
@endsection
@section('post')
@endsection
