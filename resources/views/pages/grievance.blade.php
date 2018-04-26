@extends('layouts.master')
@section('pre')
	@php
	$title = "Grievance Redressal";
	$menu_item = 'grievance';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="row">
				<div class="col-md-12">
					<div class="container">
						<h1 class="text-center" style="margin-bottom:3%;"><strong><span>Grievance Redressal</span></strong></h1>
						<form class="well form-horizontal" id="grievance_redressal" enctype="multipart/form-data">
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

							<!-- Text input-->
							<div class="row">
								<div class="has-feedback col-md-4 col-md-offset-4">
									<div class="form-group">
										<label class="sr-only" for="phone">Subject</label>
										<input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
										<i class="fa fa-quote-left form-control-feedback"></i>
										<p class="help-block"></p>
									</div>
								</div>
							</div>

							<!-- Text input-->
							<div class="row">
								<div class="has-feedback col-md-4 col-md-offset-4">
									<div class="form-group">
										<label class="sr-only" for="phone">Message</label>
										<textarea name="message" id="message" rows="8" cols="80" placeholder="Message" class="form-control"></textarea>
										<i class="fa fa-align-left form-control-feedback"></i>
										<p class="help-block"></p>
									</div>
								</div>
							</div>

							<!-- Button -->
							<div class="row">
								<div class="has-feedback col-md-4 col-md-offset-4">
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-block btn-full">Send</button>
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
@section('post')
@endsection
