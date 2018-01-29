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
						<li class="job-preview">
							<div class="content col-md-10 col-sm-10 float-left">
								<h2 class="job-title"><strong>Job-Post 1</strong></h2>
								<h5 class="sub-info"><a href="">Download pdf 1</a></h5>
							</div>
							<a href="#" class="btn btn-apply float-sm-right float-xs-left">Apply</a>
						</li>
						<li class="job-preview">
							<div class="content col-md-10 col-sm-10 float-left">
								<h2 class="job-title"><strong>Job-Post 2</strong></h2>
								<h5 class="sub-info"><a href="">Download pdf 2</a></h5>
							</div>
							<a href="#" class="btn btn-apply float-sm-right float-xs-left">Apply</a>
						</li>
					</ul>
				</div>
				<div class="space"></div>
			</div>
		</div>
	</div>
@endsection
