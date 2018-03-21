@extends('layouts.master')
@section('pre')
	@php
	$title = "Scholarship";
	$menu_item = 'admissions';
@endphp
@endsection
@section('content')
	<div id="aicte-affiliation" class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="row">
				<h1 class="text-center"><strong><span>{{$title}}</span></strong></h1>
				<ul class="list-unstyled resp-text-sub" style="margin-left: 12px;">
					@foreach (App\FileUpload::where('type','scholarship')->orderBy('created_at', 'DESC')->get() as $fp)
						<li><i style="float: left;margin-top: 7px;" class="fa fa-chevron-right pr-10 text-colored"></i><a style="display: block;" href="{{$fp->getUrl()}}"><p style="display:flex;">{{$fp->name}}</p></a></li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
