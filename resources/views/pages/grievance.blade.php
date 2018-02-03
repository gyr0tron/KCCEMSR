@extends('layouts.master')
@section('pre')
	@php
	$title = "Grievance Redressal";
	$menu_item = 'grievance';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content">
			<h1 class="text-center title"><span>Grievance Redressal</span></h1>
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
									<label class="sr-only" for="subject">Subject</label>
									<input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
									<i class="fa fa-quote-left form-control-feedback"></i>
								</div>
							</div>

							<!-- File submit area -->
							<div class="row">
								<div class="has-feedback col-md-4 col-md-offset-4" style="margin-bottom: 15px;">
									<label class="sr-only" for="message">Message</label>
									<textarea rows="7" class="form-control" placeholder="Message" cols="40" id="message"></textarea>
									<i class="fa fa-align-left form-control-feedback"></i>
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
	</div>
@endsection
@section('post')
@endsection
