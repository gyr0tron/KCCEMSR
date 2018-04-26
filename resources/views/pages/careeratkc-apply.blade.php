@extends('layouts.master')
@section('pre')
	@php
	$menu_item = 'careeratkc';
@endphp
@endsection
@section('content')
	{{--  Form  --}}
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="row">
				<div class="col-md-12">
					<div class="container">
						<h1 class="text-center" style="margin-bottom:3%;"><strong><span>{{$job->name}}</span></strong></h1>
						<form class="well form-horizontal" id="job_application" enctype="multipart/form-data">
							<input type="hidden" name="id" value="{{$job->id}}">
							<input type="hidden" name="url" value="{{$job->url}}">
							<!-- Text input-->
							<div class="row">
								<div class="has-feedback col-md-4 col-md-offset-4">
									<div class="form-group">
										<label class="sr-only" for="name">Name</label>
										<input type="text" class="form-control" id="name" placeholder="Name" name="name">
										<i class="fa fa-user form-control-feedback"></i>
										<p class="help-block"></p>
									</div>
								</div>
							</div>

							<!-- Text input-->
							<div class="row">
								<div class="has-feedback col-md-4 col-md-offset-4">
									<div class="form-group">
										<label class="sr-only" for="email">Email address</label>
										<input type="email" class="form-control" id="email" placeholder="Email" name="email">
										<i class="fa fa-envelope form-control-feedback"></i>
										<p class="help-block"></p>
									</div>
								</div>
							</div>

							<!-- Text input-->
							<div class="row">
								<div class="has-feedback col-md-4 col-md-offset-4">
									<div class="form-group">
										<label class="sr-only" for="phone">Phone No.</label>
										<input type="text" class="form-control" id="phone" placeholder="Phone No." name="phone">
										<i class="fa fa-phone form-control-feedback"></i>
										<p class="help-block"></p>
									</div>
								</div>
							</div>

							<!-- File submit area -->
							<div class="row">
								<div class="has-feedback col-md-4 col-md-offset-4">
									<div class="form-group">
										<label class="sr-only" for="resume">Upload Resume</label>
										<input type="file" class="form-control" id="resume" name="resume" placeholder="Upload Resume"></input>
										<i class="fa fa-paperclip form-control-feedback"></i>
										<p class="help-block"></p>
									</div>
								</div>
							</div>

							<!-- Button -->
							<div class="row">
								<div class="has-feedback col-md-4 col-md-offset-4">
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-block btn-full">Apply</button>
									</div>
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
