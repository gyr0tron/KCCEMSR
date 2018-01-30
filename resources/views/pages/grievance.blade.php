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
								<label class="col-md-4 control-label">Subject</label>  
								<div class="col-md-4 inputGroupContainer">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
										<input name="website" placeholder="Post Details" class="form-control" type="text">
									</div>
								</div>
							</div>

							<!-- File submit area -->
							<div class="form-group">
								<label class="col-md-4 control-label">Message</label>
									<div class="col-md-4 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>
											<textarea class="form-control" name="comment" placeholder="Type your message here"></textarea>
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
	</div>
@endsection
@section('post')
@endsection
