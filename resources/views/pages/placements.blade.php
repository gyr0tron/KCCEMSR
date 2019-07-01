@extends('layouts.master')
@section('pre')
	@php
	$title = 'Placements';
	$menu_item = 'placements';
@endphp
@endsection
@section('content')
	<div id="app" class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content">
			<div class="row">
				<h1 id="about" class="title text-center"><span>About TPO</span></h1>
				
				<div class="col-md-12">
					<p style="text-align: justify;">Welcome to Training &amp; Placement Cell at K. C College of Engineering &amp; Management Studies &amp; Research, Thane. Training and Placement is a vital department in the college and is constantly striving to provide assistance to the students in their efforts to probe for the employment. It also caters needs of various organizations to conduct the interviews. It plays an important role in counselling and guiding the students for their successful career placement. It arranges various technical and soft skills programs which augments the skills and increases the confidence of the students when facing the various tests and interviews conducted by the companies and to meet companies’ expectations. The Training and Placement Cell takes pride in offering student services like consultation on a wide range of issues such as employment, career planning, opportunities etc. thereby preparing students effectively for their career to make them competent.</p>
					<p style="text-align: justify;">Training and Placement Cell operates year round to facilitate contacts between graduates and Industry.</p>
				</div>
			</div>
			<div class="space"></div>
			<div class="space"></div>

			<div class="row">
				<div class="col-md-6" style="float:left">
					@php
					$car = App\Carousel::where('type', 'tpo')->first();
					if(!$car) goto carouselEnd;
					$no = 0;
					@endphp
					<div id="myCarousel" class="carousel slide">
						<div class="carousel-inner">
							@foreach ($car->images as $id)
								@php
								$image = App\ImageUpload::where('id', $id)->first();
								if(!$image) continue;
								@endphp
								<div class="item {{$no==0?'active':''}}" data-slide-number="{{$no++}}">
									<img src="{{$image->getUrl()}}" width="1200">
								</div>
							@endforeach
						</div>
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					@php
					carouselEnd:
					@endphp
				</div>
				<div class="col-md-6">
					<h2 class="title text-center">Upcoming Events</h2>
					<ul class="events" style="padding-left: 0px;">
						@foreach (App\TpoAnnouncement::orderBy('created_at', 'DESC')->get() as $story)
							@php
							$date = Carbon\Carbon::createFromFormat('Y-m-d', $story->date);
							@endphp
							<li>
								<div class="date">
									<span class="month" style="font-weight: 500;">{{$date->format('M')}}</span>
									<span class="day" style="font-weight: 500;">{{$date->format('d')}}</span>
								</div>
								<p>{{$story->title}}</p>
								{{-- <p><i class="fa fa-clock-o" style="margin-right:2%"></i>{{$story->from.' to '.$story->to}}</p> --}}
								<p>
									<a href="{{$story->url}}" target="_blank">More details</a>
								</p>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1 id="functions" class="title text-center"><span>Functions &amp; Responsibilities </span></h1>
				</div>
				<div class="col-md-12">
					<p>Training and Placement Office takes care of the following functions and responsibilities:</p>
					<div class="col-md-12">
						<ul class="list-unstyled">
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">To have close liaison with Industry to facilitate Training &amp; Placement activities.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Perform Training Need Analysis of students after analysing industry needs and skill gaps</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Organize pre-recruitment, technical and soft skill trainings for the second and third year students</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Plan recruitment drives for final year students</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Conduct pre-recruitment trainings by the placed students</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Organize internships and industrial visits for students</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Collect feedback from companies visiting institute for recruitment</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Co-ordinate periodical meetings with students and HOD’s, Principal for feedback on Training &amp; Placement activities</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Prepare schedule, budget, policies for Training &amp; Placement Office.</p></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="space"></div>
			<div class="row" id="statistics">
				<placement-stats></placement-stats>
			</div>
			<div class="space"></div>
			<div class="row" id="student-placement">
				<div class="col-md-12">
					<h1 class="title text-center"><span>Student Placement</span></h1>
				</div>
				<div class="col-md-12">
					<table class="table table-hover">
						<thead>
							<th>Sr.No.</th>
							<th>Name</th>
							<th>Company</th>
							<th>Package</th>
							<th>Branch</th>
							<th>Year</th>
						</thead>
						<tbody>
							@php
								$placements = App\Placement::all();
								$no=0;
							@endphp
							@foreach ($placements as $placement)
								<tr>
									<td>{{++$no}}</td>
									<td>{{$placement->name}}</td>
									<td>{{$placement->company}}</td>
									<td>{{$placement->package}}</td>
									<td>{{$placement->year}}</td>
									<td>{{$placement->academic_year}}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1 id="reviews" class="title text-center"><span>Reviews</span></h1>
					<div class="col-md-12" data-wow-delay="0.2s">
						<div class="carousel slide" data-ride="carousel" id="quote-carousel">
							<!-- Carousel Slides / Quotes -->
							<div class="carousel-inner text-center">
								@php
								$no=0;
								@endphp
								@foreach (App\Testimonial::all() as $test)
									<div class="item {{$no++==0?'active':''}}">
										<blockquote>
											<div class="row">
												<div class="col-sm-8 col-sm-offset-2">
													<p>{{strip_tags($test->comment)}}</p>
													<small>{{$test->name}}</small>
												</div>
											</div>
										</blockquote>
									</div>
								@endforeach
							</div>
							<!-- Bottom Carousel Indicators -->
							<ol class="carousel-indicators">
								@php
								$no=0;
								@endphp
								@foreach (App\Testimonial::all() as $test)
									<li data-target="#quote-carousel" data-slide-to="{{$no}}" class="{{$no++==0?'active':''}}"><img class="img-responsive" src="{{$test->getUrl()}}" alt="">
									@endforeach
								</ol>
								<!-- Carousel Buttons Next/Prev -->
								<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
								<a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
							</div>
							<div class="space"></div>
							<div class="space"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="space"></div>

		</div>
	</div>
@endsection
@section('post')
	<script type="text/javascript" src="js/chart.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/vue.js') }}"></script>
@endsection
