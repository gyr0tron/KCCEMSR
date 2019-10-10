@extends('layouts.master')
@section('pre')
	@php
	$title = "Departments";
	$menu_item = 'academics';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<h1 id="services" class="text-center title"><span>Departments</span></h1>
			<div class="space"></div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					{{-- computer --}}
					<div class="media">
						<div class="media-body text-right">
							<h2 class="media-heading" style="padding-bottom:5px;">{{App\Department::where('url','computer')->first()->name}}</h2>
							<p class="dept-pg-p" style="height: 7.5em;display: -webkit-box;-webkit-line-clamp: 5;-webkit-box-orient: vertical;margin-bottom: 0px;overflow: hidden;-o-text-overflow: ellipsis;text-overflow: ellipsis;">{{strip_tags(App\Department::where('url','computer')->first()->description)}}</p>
							<a class="btn btn-default" style="cursor:pointer;" href="{{route('department', 'computer')}}">Read more</a>
							<div class="space"></div>
							<img src="" alt="" data-echo="{{App\Department::where('url','computer')->first()->getUrl()}}" style="height: 340px;width: 505px;">
						</div>
						<div class="media-right">
							<i class="fa fa-code"></i>
						</div>
					</div>
					<div class="space"></div>

					{{-- extc --}}
					<div class="media">
						<div class="media-body text-right">
							<h2 class="media-heading" style="padding-bottom:5px;">{{App\Department::where('url','extc')->first()->name}}</h2>
							<p class="dept-pg-p" style="height: 7.5em;display: -webkit-box;-webkit-line-clamp: 5;-webkit-box-orient: vertical;margin-bottom: 0px;overflow: hidden;-o-text-overflow: ellipsis;text-overflow: ellipsis;">{{strip_tags(App\Department::where('url','extc')->first()->description)}}</p>
							<a class="btn btn-default" style="cursor:pointer;" href="{{route('department', 'extc')}}">Read more</a>
							<div class="space"></div>
							<img src="" alt="" data-echo="{{App\Department::where('url','extc')->first()->getUrl()}}" style="height: 340px;width: 505px;">
						</div>
						<div class="media-right">
							<i class="fa fa-rss"></i>
						</div>
					</div>
					<div class="space"></div>

					{{-- IT --}}
					<div class="media">
						<div class="media-body text-right">
							<h2 class="media-heading" style="padding-bottom:5px;">{{App\Department::where('url','it')->first()->name}}</h2>
							<p class="dept-pg-p" style="height: 7.5em;display: -webkit-box;-webkit-line-clamp: 5;-webkit-box-orient: vertical;margin-bottom: 0px;overflow: hidden;-o-text-overflow: ellipsis;text-overflow: ellipsis;">{{strip_tags(App\Department::where('url','it')->first()->description)}}</p>
							<a class="btn btn-default" style="cursor:pointer;" href="{{route('department', 'it')}}">Read more</a>
							<div class="space"></div>
							<img src="" alt="" data-echo="{{App\Department::where('url','it')->first()->getUrl()}}" style="height: 340px;width: 505px;">
						</div>
						<div class="media-right">
							<i class="fa fa-desktop"></i>
						</div>
					</div>
					<div class="space"></div>
				</div>

				<div class="space visible-xs"></div>

				<div class="col-md-6 col-sm-6 col-xs-12">
				{{-- HM AS --}}
					<div class="media">
						<div class="media-left">
							<i class="fa fa-flask"></i>
						</div>
						<div class="media-body">
							<h2 class="media-heading" style="padding-bottom:5px;">{{App\Department::where('url','humanities-sciences')->first()->name}}</h2>
							<p class="dept-pg-p" style="height: 7.5em;display: -webkit-box;-webkit-line-clamp: 5;-webkit-box-orient: vertical;margin-bottom: 0px;overflow: hidden;-o-text-overflow: ellipsis;text-overflow: ellipsis;">{{strip_tags(App\Department::where('url','humanities-sciences')->first()->description)}}</p>
							<a class="btn btn-default" style="cursor:pointer;" href="{{route('department', 'humanities-sciences')}}">Read more</a>
							<div class="space"></div>
							<img src="" alt="" data-echo="{{App\Department::where('url','humanities-sciences')->first()->getUrl()}}" style="height: 340px;width: 505px;">
						</div>
					</div>
					<div class="space"></div>

					{{-- mms --}}
					<div class="media">
						<div class="media-left">
							<i class="fa fa-area-chart"></i>
						</div>
						<div class="media-body">
							<h2 class="media-heading" style="padding-bottom:5px;">{{App\Department::where('url','mms')->first()->name}}</h2>
							<p class="dept-pg-p" style="height: 7.5em;display: -webkit-box;-webkit-line-clamp: 5;-webkit-box-orient: vertical;margin-bottom: 0px;overflow: hidden;-o-text-overflow: ellipsis;text-overflow: ellipsis;">{{strip_tags(App\Department::where('url','mms')->first()->description)}}</p>
							<a class="btn btn-default" style="cursor:pointer;" href="{{route('department', 'mms')}}">Read more</a>
							<div class="space"></div>
							<img src="" alt="" data-echo="{{App\Department::where('url','mms')->first()->getUrl()}}" style="height: 340px;width: 505px;">
						</div>
					</div>
					<div class="space"></div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
