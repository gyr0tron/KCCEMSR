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
				<div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 tab-content_reg current">
					<form class="well form-horizontal" action=" " method="post" id="grievance_redressal">

						<!-- Text input-->
						<div class="form-group form-section">
							<span class="fa fa-user-o input-icon"></span>
							<input type="text" name="name" placeholder="Name">
						</div>

						<!-- Text input-->
						<div class="form-group form-section">
							<span class="fa fa-envelope-o input-icon"></span>
							<input type="email" name="email" placeholder="Email address" class="email">
						</div>

						<!-- Text input-->			
						<div class="form-group form-section">
							<span class="fa fa-phone input-icon"></span>
							<input type="tel" name="phone" placeholder="Phone No.">
						</div>

						<!-- Text input-->
						<div class="form-group form-section">
							<span class="fa fa-quote-left input-icon"></span>
							<input type="text" name="subject" placeholder="Subject">
						</div>

						<!-- File submit area -->
						<div class="row">
							<div class="has-feedback" style="margin-bottom: 15px;">
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
@endsection
@section('post')
@endsection
