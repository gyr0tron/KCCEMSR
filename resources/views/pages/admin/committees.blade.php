@extends('layouts.master2')
@section('pre')
  @php
  $title = "Committees";
  $menu_item = 'committees';
@endphp
@endsection
@section('content')
  <section class="content-header">
    <h1>
      Committees
      <small>Manage Committees</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a class="active">Committees</a></li>
    </ol>
  </section>
  <section class="content">
    @include('forms.committees-add')
  </section>
@endsection
@section('post')
@endsection
