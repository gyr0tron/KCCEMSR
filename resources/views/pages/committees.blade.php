@extends('layouts.master')
@section('pre')
	@php
	$title = "Committees";
	$menu_item = 'aboutus';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="row">
				<h1 id="about" class="title text-center"><span>Committees</span></h1>
				<div class="space"></div>
			</div>
			@foreach (App\Committee::all() as $committee)
				<div class="row">
					<div class="col-md-12">
						<h2 class="media-heading text-center" style="padding-bottom:5px; margin-bottom: 1%">{{$committee->name}}</h2>
						<p class="dept-pg-p" style="text-align: center;text-justify: auto;margin: 0 0 0px;">{{$committee->description}}</p>
						<a class="trigger text-center" style="margin: 0 0 20px;" href="{{route('committee-details', $committee->url)}}">Read more</a>
					</div>
					<div class="col-md-12">
						<img src="{{$committee->getUrl()}}" style="margin: 0 auto;height: 400px;width: 80%;" alt="">
						<div class="space"></div>
						<div class="space"></div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection
@section('post')
@endsection
