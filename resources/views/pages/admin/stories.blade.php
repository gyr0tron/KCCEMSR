@extends('layouts.master2')
@section('pre')
  @php
  $title = "KC at Glance";
  $menu_item = 'stories';
@endphp
@endsection
@section('content')
  <section class="content-header">
    <h1>
      KC at Glance
      <small>Manage Stories</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a class="active">KC at Glance</a></li>
    </ol>
  </section>
  <section class="content">
    @include('forms.stories-add1')
    @include('forms.stories-add2')
  </section>
@endsection
@section('post')
@endsection
