@extends('layouts.master2')
@section('pre')
  @php
  $title = $action_name;
  $menu_item = 'library';
@endphp
@endsection
@section('content')
  <section class="content-header">
    <h1>
      Library
      <small>Manage Library</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a class="active"><i class="fa fa-book"></i> Library</a></li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-xs-10">
        @include('forms.library', compact('action','action_name'))
      </div>
      <div class="col-sm-2">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title"></h3>
          </div>
          <div class="box-body">
            <ul class="nav nav-pills nav-stacked">
              @for ($i=0; $i < count($library_list); $i++)
                <li class="{{$action==$library_list[$i]?'active':''}}"><a href="{{route("admin_library", $library_list[$i])}}">{{$library_list_name[$i]}}</a></li>
              @endfor
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
