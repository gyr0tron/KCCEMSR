@extends('layouts.master')
@section('pre')
	@php
	$title = "Human Values Education Cell";
	$menu_item = 'hvecell';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		@include('layouts.ribbon')
		<div class="container main-content-sub tab-pane fade in">
			<h1 class="text-center title"><span>Human Value Education Cell</span></h1>
			<div class="text-center">
				<blockquote class="blockquote">
					<p>The cultivation of Human Values alone is Education.</p>
					<footer class="blockquote-footer">Sathya Sai Baba</footer>
				</blockquote>
			</div>
			<div class="row">
				<div class="col-sm-8 col-md-8">
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="aboutus">
							<h2><span>About Human Values</span></h2>
							<p><b>Human Values:</b></p>
							<p style="text-indent:30px;">
								Human values are the virtues that guide us to take into account the human element. Values are the guiding principles of our lives. They are essential for positive human behaviour and actions in our daily lives.
							</p>
							<p><b>Need for value Education:</b></p>
							<p style="text-indent:30px;">
								Education is the process by means of which a person develops abilities, attitudes and
								other forms of behaviour of the positive values in the society in which he lives.
							</p>
							<p><b>Objectives of Human Value Education cell:</b></p>
							<ul>
								<li>Helping students to better understand the values that guide their own daily
									lives and contributing to changes in values held collectively by communities
									and personally by individuals.</li>
									<li>Development of students in physical, mental, emotional and spiritual aspect.</li>
									<li>To inculcate good manners , responsibilities of good citizen and develop
										respect for the dignity of individual and society.</li>
										<li>Enable the students to make decisions on the basis of sound moral principles.</li>
										<li>Conduct various workshops and seminars by Eminent personalities for
											students as well as faculty members.</li>
										</ul>
									</div>
									<div role="tabpanel" class="tab-pane" id="collaborations">
										<h2><span>Collaboration</span></h2>
										<p style="text-indent:30px;">MOU with Vivekanand Kendra Kanyakumari, Thane branch to inculcate values among students and faculties.</p>
										<p><b>Programs for students</b></p>
										<ol>
											<li>Pariksha Dya Hasat Khelat (PDHH)</li>
											<li>Youth Leadership Programme</li>
											<li>Born to Succeed</li>
											<li>To prepare weekly wall Magazine (Positive news)</li>
										</ol>
										<p><b>Programs for faculties</b></p>
										<ol>
											<li>Samarth – Teachers as nation builder</li>
											<li>Born to succeed</li>
										</ol>
									</div>
									<div role="tabpanel" class="tab-pane" id="events_gallery">
										<h2><span>Events Gallery</span></h2>
										@foreach (App\Event::where('department', 'hvecell')->orderBy('date','desc')->get() as $event)
											<div class="col-sm-6">
												<div class="image-box">
													<div class="overlay-container">
														<img src="{{url("images/eclipse.gif")}}" alt="" data-echo="{{$event->getFeaturedImage()}}" style="height: 250px;margin: 0 auto;" height="500">
														<a class="overlay" href="{{route('event', $event->url)}}">
															<i class="fa fa-search-plus"></i>
															<span>{{App\Department::getName($event->department)}}</span>
														</a>
													</div>
													<a class="btn btn-default btn-block" href="{{route('event', $event->url)}}">
														<p style="overflow: hidden; margin: 0px; white-space: normal;" class="ellipsis_3_line">
															{{$event->name}}
														</p>
													</a>
												</div>
											</div>
										@endforeach
									</div>
									<div role="tabpanel" class="tab-pane" id="courses">
										<h2><span>Course</span></h2>
										<ul>
											<li>
												<h3>Re-fueling the values</h3>
												<p><b>Description of the course:</b> A semester long programme which aims at re visiting the rich value system, personal as well as professional which has been the guiding principle of our life and sheilded us from utter chaos and pandemonium.</p>
											</li>
										</ul>
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
									<li role="presentation" class="active"><a href="#aboutus" aria-controls="home" role="tab" data-toggle="tab">About Human Value Education Cell</a></li>
									<li role="presentation"><a href="#collaborations" aria-controls="profile" role="tab" data-toggle="tab">Collaboration</a></li>
									<li role="presentation"><a href="#events_gallery" aria-controls="profile" role="tab" data-toggle="tab">Events Gallery</a></li>
									<li role="presentation"><a href="#courses" aria-controls="profile" role="tab" data-toggle="tab">Course</a></li>
									<li role="presentation"><a href="#contact_us" aria-controls="profile" role="tab" data-toggle="tab">Contact Us</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			@endsection
