@extends('layouts.master2')
@section('pre')
  @php
  $title = "Career at KC";
  $menu_item = 'career';
@endphp
@endsection
@section('content')
  <section class="content-header">
    <h1>
      Career at KC
      <small>Manage Careers</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a class="active">Career at KC</a></li>
    </ol>
  </section>
  <section class="content">
    @if (isset($committee))
      @include('forms.committees-edit', compact('committee'))
    @else
      @include('forms.careetatkc-add')
    @endif
  </section>
@endsection
@section('post')
@endsection
