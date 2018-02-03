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
									<h5 class="sub-info"><a href="{{route('careeratkc-details', $job->url)}}">Download</a></h5>
								</div>
								<a href="#" class="btn btn-apply float-sm-right float-xs-left">Apply</a>
							</li>
						@endforeach
					</ul>
				</div>
				<div class="space"></div>
			</div>
		</div>
	</div>

	{{--  Form  --}}

	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="row">
				<div class="col-md-12">
					<div class="container">
						<form class="well form-horizontal" action=" " method="post"  id="job_application">

							<!-- Text input-->
							<div class="row">
								<div class="has-feedback col-md-4 col-md-offset-4" style="margin-bottom: 15px;">
									<label class="sr-only" for="name">Name</label>
									<input type="text" class="form-control" id="name" placeholder="Name" name="name">
									<i class="fa fa-user form-control-feedback"></i>
								</div>
							</div>

							<!-- Text input-->
							<div class="row">
								<div class="has-feedback col-md-4 col-md-offset-4" style="margin-bottom: 15px;">
									<label class="sr-only" for="email">Email address</label>
									<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
									<i class="fa fa-envelope form-control-feedback"></i>
								</div>
							</div>

							<!-- Text input-->
							<div class="row">
								<div class="has-feedback col-md-4 col-md-offset-4" style="margin-bottom: 15px;">
									<label class="sr-only" for="phone">Phone No.</label>
									<input type="text" class="form-control" id="phone" placeholder="Enter Phone No." name="phone">
									<i class="fa fa-phone form-control-feedback"></i>
								</div>
							</div>

							<!-- Text input-->
							<div class="row">
								<div class="has-feedback col-md-4 col-md-offset-4" style="margin-bottom: 15px;">
									<label class="sr-only" for="post">Post applied for</label>
									<input type="text" class="form-control" id="phone" placeholder="Post Details" name="post">
									<i class="fa fa-address-card form-control-feedback"></i>
								</div>
							</div>

							<!-- File submit area -->
							<div class="row">
								<div class="has-feedback col-md-4 col-md-offset-4" style="margin-bottom: 15px;">
									<label class="sr-only" for="resume">Upload Resume</label>
									<input type="file" class="form-control" name="resume" placeholder="Upload Resume"></input>
									<i class="fa fa-paperclip form-control-feedback"></i>
								</div>
							</div>

							<!-- Button -->
							<div class="form-group">
								<label class="col-md-4 control-label"></label>
								<div class="col-md-4">
									<button type="submit" class="btn btn-primary btn-block btn-full">Send<span class="glyphicon glyphicon-send"></span></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="space"></div>
	</div>
@endsection
