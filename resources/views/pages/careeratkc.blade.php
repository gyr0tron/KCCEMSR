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

	{{--  Form  --}}

	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="row">
				<div class="col-md-12">
					<div class="container">
						<form class="well form-horizontal" action=" " method="post"  id="job_application">

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label">Name</label>  
								<div class="col-md-4 inputGroupContainer">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input  name="first_name" placeholder="Full Name" class="form-control"  type="text">
									</div>
								</div>
							</div>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label">E-Mail</label>  
								<div class="col-md-4 inputGroupContainer">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
										<input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
									</div>
								</div>
							</div>

							<!-- Text input-->			
							<div class="form-group">
								<label class="col-md-4 control-label">Phone No.</label>  
									<div class="col-md-4 inputGroupContainer">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
										<input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
									</div>
								</div>
							</div>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label">Post applied for</label>  
								<div class="col-md-4 inputGroupContainer">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
										<input name="website" placeholder="Post Details" class="form-control" type="text">
									</div>
								</div>
							</div>

							<!-- File submit area -->
							<div class="form-group">
								<label class="col-md-4 control-label">Upload Resume</label>
									<div class="col-md-4 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>
											<input type="file" class="form-control" name="resume" placeholder="Upload Resume"></input>
									</div>
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
