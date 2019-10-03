@extends('layouts.master')
@section('pre')
	@php
	$title = "Human Values Education Cell";
	$menu_item = 'hvecell';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub tab-pane fade in">
			<h1 class="text-center title"><span>Human Values Education Cell</span></h1>
			<div class="row">
				<div class="col-sm-8 col-md-8">
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="aboutus">
							<h2><span>About Us</span></h2>
							<p style="text-indent:30px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<p style="text-indent:30px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						</div>
						<div role="tabpanel" class="tab-pane" id="collaborations">
							<h2><span>Collaborations</span></h2>
							<p>Programs for students with collaborations of Vivekanand Kendra Kanyakumari,Thane branch.</p>
							<ol>
								<li>Pariksha Dya Hasat Khelat(PDHH)</li>
								<li>Youth Leadership Programme</li>
								<li>Born to Succeed</li>
								<li>To prepare weekly wall Magazine(Positive news)</li>
							</ol>
							<p>Programs for staff with collaborations of Vivekanand Kendra Kanyakumari,Thane branch.</p>
							<ol>
								<li>Samarth – Teachers as nation builder</li>
								<li>Born to succeed</li>
							</ol>
						</div>
						<div role="tabpanel" class="tab-pane" id="events_gallery">
							<h2><span>Events Gallery</span></h2>
						</div>
						<div role="tabpanel" class="tab-pane" id="courses">
							<h2><span>Courses</span></h2>
						</div>
						<div role="tabpanel" class="tab-pane" id="contact_us">
							<h2><span>Contact Us</span></h2>
							<ul style="list-style: none; padding-left: 0px;">
								<li>
									<p>
										<span style="font-size: 18px;">Dr.Shelley Oberoi</span>
										<br>HOD,Humanities and Applied Science
										<br>shelly.oberoi@kccemsr.edu.in
										<br>987341292
									</p>
									<p>
										<span style="font-size: 18px;">Ms.Archana Gupte</span>
										<br>Asst.Prof Electronics and Communication Engineering
										<br>archana.gupte@kccemsr.edu.in
										<br>9167821352
									</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<ul class="nav nav-tabs nav-stacked" style="border: 1px solid #DDD;margin-top: 60px;">
						<li role="presentation" class="active"><a href="#aboutus" aria-controls="home" role="tab" data-toggle="tab">About Us</a></li>
						<li role="presentation"><a href="#collaborations" aria-controls="profile" role="tab" data-toggle="tab">Collaborations</a></li>
						<li role="presentation"><a href="#events_gallery" aria-controls="profile" role="tab" data-toggle="tab">Events Gallery</a></li>
						<li role="presentation"><a href="#courses" aria-controls="profile" role="tab" data-toggle="tab">Courses</a></li>
						<li role="presentation"><a href="#contact_us" aria-controls="profile" role="tab" data-toggle="tab">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
