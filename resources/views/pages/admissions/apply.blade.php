@extends('layouts.master')
@section('pre')
	@php
	$title = "Apply Online";
	$menu_item = 'admissions';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content">
			
			<div class="col-xs-12 col-sm-6 col-md-6" style="float:right;">
				<div id="regBox">
					<ul class="headers">
						<li class="tab-link current" data-tab="tab-1">Login</li>
						<li class="tab-link" data-tab="tab-2">Register</li>
					</ul>

					<div id="tab-1" class="login tab-content_reg current">
						<form action="">
							<div class="form-group form-section">
								<span class="fa fa-envelope-o input-icon"></span>
								<input type="email" name="login_email" id="login_email" placeholder="Email">
								<small class="field-error help-block"></small>
							</div>
							<div class="form-group form-section">
								<span class="fa fa-unlock-alt input-icon"></span>
								<input type="password" name="login_password" id="login_password"placeholder="Password">
								<small class="field-error help-block"></small>
							</div>
							<div class="form-group form-section btn-container">
								<input type="submit" value="Login">
							</div>
						</form>
					</div>

					<div id="tab-2" class="register tab-content_reg">
						<form action="">
							<div class="form-group form-section">
								<span class="fa fa-user-o input-icon"></span>
								<input type="text" name="reg_name" id="reg_name" placeholder="Name">
								<small class="field-error help-block"></small>
							</div>
							<div class="form-group form-section">
								<span class="fa fa-envelope-o input-icon"></span>
								<input type="email" name="reg_email" id="reg_email" placeholder="Email">
								<small class="field-error help-block"></small>
							</div>
							<div class="form-group form-section">
								<span class="fa fa-unlock-alt input-icon"></span>
								<input type="password" name="reg_password" id="reg_password" placeholder="Password">
								<small class="field-error help-block"></small>
							</div>
							<div class="form-group form-section">
								<span class="fa fa-lock input-icon"></span>
								<input type="password" name="reg_password_cnfrm" id="reg_password_cnfrm" placeholder="Confirm Password">
								<small class="field-error help-block"></small>
							</div>
							<div class="form-group form-section btn-container">
								<input type="submit" value="Register">
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6">
				<ul class="rolldown-list" id="myList">
					<li>Step 1: Registration</li>
					<li>Step 2: Login</li>
					<li>Step 3: Online form filling</li>
					<li>Step 4: Document Upload</li>
					<li>Step 5: Take printout of filled application form and report to the college for further processing.</li>
				</ul> 
			</div>

		</div>
	</div>
@endsection
@section('post')
@endsection
