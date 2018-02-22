@extends('layouts.master')
@section('pre')
	@php
	$menu_item = 'careeratkc';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="row">
				<h1 class="text-center" style="margin-bottom:3%;"><strong><span>Career at KC</span></strong></h1>
				<div class="col-md-12">
					<ul class="job-list">
						@foreach (App\JobList::orderBy('id','DESC')->get() as $job)
							<li class="job-preview animated fadeInDown">
								<div class="content col-md-10 col-sm-10 float-left">
									<h2 class="job-title"><strong>{{$job->name}}</strong></h2>
									<h5 class="sub-info"><a href="{{$job->getUrl()}}">Download</a></h5>
								</div>
								<a href="{{route('careeratkc-apply', $job->url)}}" class="btn btn-apply float-sm-right float-xs-left">Apply</a>
							</li>
						@endforeach
					</ul>
				</div>
				<div class="space"></div>
			</div>
		</div>
	</div>
@endsection
