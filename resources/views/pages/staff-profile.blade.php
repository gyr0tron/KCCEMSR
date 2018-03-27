@extends('layouts.master')
@section('pre')
	@php
	$title = $staff->name;
	$menu_item = 'staff';
	$qualifications = explode(",", $staff->qualification);
	$workshops = explode(".", $staff->workshops);
	$publications = explode(".", $staff->publications);
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="col-md-4 col-sm-5 col-xs-5">
				<div style="width:100%; height:30%;">
					<img src="{{$staff->getUrl()}}" alt="">
				</div>
				<h1 class="resp-text-name" style="margin-bottom: 1%;">{{$staff->name}}</h1>
				<a href="mailto:{{$staff->email}}" style="overflow-wrap: break-word;">{{$staff->email}}</a>
			</div>
			<div class="col-md-8 col-sm-7 col-xs-7 line">
				<div class="row">
					<h2 class="title text-left resp-text-head align-marg"><strong><span>Designation</span></strong></h1>
						<p class="text-left resp-text-sub align-marg">{{$staff->designation}}</p>
					</div>
					<div class="row">
						<h2 class="text-left resp-text-head align-marg"><strong>Qualification</strong></h1>
							<ul class="list-unstyled resp-text-sub align-marg">
								@foreach ($qualifications as $d)
									@if (strlen($d) > 2)
										<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i>{{$d}}</li>
									@endif
								@endforeach
							</ul>
						</div>
						<div class="row" style="height: 10em;">
							<h2 class="text-left resp-text-head align-marg"><strong>Experience</strong></h1>
								<div class="stats">
									<div class="counting text-left align-marg" data-count="{{$staff->experience}}">0</div>
									<h5 class="text-left align-marg">Years</h5>
								</div>
							</div>
							<div class="row">
								<h2 class="text-left resp-text-head align-marg"><strong>Area of Interest</strong></h1>
									<p class="lead text-left resp-text-sub align-marg">{{$staff->interest}}</p>
								</div>
								@if ($staff->file)
									<div class="row">
										<p class="lead text-left resp-text-sub align-marg"><a class=""href="{{route('staff-profile-resume', $staff->id)}}">View profile in detail</a></p>
									</div>
								@endif
							</div>
						</div>
					</div>
				@endsection
				@section('post')
				@endsection
