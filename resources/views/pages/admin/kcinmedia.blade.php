@extends('layouts.master2')
@section('pre')
  @php
  $title = "KC in Media";
  $menu_item = 'kcinmedia';
@endphp
@endsection
@section('content')
  <section class="content-header">
    <h1>
      KC in Media
      <small>Manage</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a class="active">KC in Media</a></li>
    </ol>
  </section>
  <section class="content">
    @include('forms.kcinmedia-add')
  </section>
@endsection
@section('post')
@endsection
