@extends('layouts.master')
@section('pre')
	@php
	$title = config('app.name');
	$menu_item = 'home';
	$nav_trans = 1
@endphp
@endsection
@section('content')
	<!-- banner start -->
	<!-- ================ -->
	{{-- <a href="https://www.orionhack.com" id="notification"><i class="fa fa-bell">
	<p class="bubble speech" id="bell_info" style="color:black">Click the bell to apply for OrionHack
</p>
</i></a> --}}

{{-- <div id="splashscreen">
<button type="button" class="close enter_site" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<img id="splashimg" src="{{url("images/splash_banner.jpg")}}" />
</div> --}}
<div id="banner" class="banner">
	<!-- button -->
	<div class="banner-image"></div>
	<div class="arrow bounce" id="arw" onclick="location.href='/#welcome';" style="cursor: pointer; z-index: 1;"></div>
	<div class="banner-caption">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
					<h1 class="text-center">We are <span
						class="txt-rotate"
						data-period="2000"
						data-rotate='["simple.", "creative.", "developers.", "nerdy."]'></span>
					</h1>
					{{-- <p class="lead text-center" id="welcome">Our energy introduces us before we start speaking. We are engineers.</p> --}}
					<p class="text-center">An ISO 9001:2015 Certified Institute</p>
					{{-- <p class="text-center">Setu Suvidha Kendra Cum FC Center for Engineering and other Admission 2019-20</p> --}}
				</div>
			</div>
		</div>
	</div>
</div>
<!-- banner end -->
<!-- fixed tabs -->
<div class="scale-section default-bg" style="">
	<div class="container">
		<div class="col-sm-2 scalable-margin">
			<a href="{{route('admissions-details')}}" style="text-decoration: none;">
				<div class="boxes-icon" style="width:fit-content; margin: 0 auto;">
					<i class="fa fa-handshake-o" style="color:#ffffff; font-size:36px; line-height:36px; vertical-align: middle;"></i>
				</div>
				<div>
					<h3 style="text-align:center;">FE Admission</h3>
				</div>
			</a>
		</div>
		<div class="col-sm-2 scalable-margin">
			<a href="{{route('placements')}}" style="text-decoration: none;">
				<div class="boxes-icon" style="width:fit-content; margin: 0 auto;">
					<i class="fa fa-globe" style="color:#ffffff; font-size:36px; line-height:36px; vertical-align: middle;"></i>
				</div>
				<div>
					<h3 style="text-align:center;">Placements</h3>
				</div>
			</a>
		</div>
		<div class="col-sm-2 scalable-margin">
			<a href="{{route('exam', 'notices')}}" style="text-decoration: none;">
				<div class="boxes-icon" style="width:fit-content; margin: 0 auto;">
					<i class="fa fa-bell" style="color:#ffffff; font-size:36px; line-height:36px; vertical-align: middle;"></i>
				</div>
				<div>
					<h3 style="text-align:center;">Notice Board</h3>
				</div>
			</a>
		</div>
		<div class="col-sm-2 scalable-margin">
			<a href="https://alumni.kccemsr.edu.in" style="text-decoration: none;">
				<div class="boxes-icon" style="width:fit-content; margin: 0 auto;">
					<i class="fa fa-smile-o" style="color:#ffffff; font-size:36px; line-height:36px; vertical-align: middle;"></i>
				</div>
				<div>
					<h3 style="text-align:center;">Alumni</h3>
				</div>
			</a>
		</div>
		<div class="col-sm-2 scalable-margin">
			<a href="{{route('lifeatkc')}}" style="text-decoration: none;">
				<div class="boxes-icon" style="width:fit-content; margin: 0 auto;">
					<i class="fa fa-calendar" style="color:#ffffff; font-size:36px; line-height:36px; vertical-align: middle;"></i>
				</div>
				<div>
					<h3 style="text-align:center;">Events</h3>
				</div>
			</a>
		</div>
		<div class="col-sm-2 scalable-margin">
			<a href="http://kcecell.org" style="text-decoration: none;">
				<div class="boxes-icon" style="width:fit-content; margin: 0 auto;">
					<i class="fa fa-lightbulb-o" style="color:#ffffff; font-size:36px; line-height:36px; vertical-align: middle;"></i>
				</div>
				<div>
					<h3 style="text-align:center;">Ecell</h3>
				</div>
			</a>
		</div>
	</div>
</div>

<!-- ================ -->
<!-- section start -->
<!-- ================ -->
<div class="section clearfix object-non-visible" data-animation-effect="fadeIn" style="padding: 0px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="space"></div>
				<h1 class="title text-center">Welcome to <span>K.C.College of Engineering and Management Studies & Research!</span></h1>
				{{-- <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta officia, aspernatur.</p> --}}
				<div class="space"></div>
				<div class="row">
					<div class="col-md-6">
						<h2 class="title text-center"><span>KC@Glance</span></h2>
						<div class="b" id="b2">
							<div class="b-con" style="height: 2600px; margin-top: 0px;">
								@foreach (App\Story::where('type','0')->orderBy('created_at', 'DESC')->get() as $story)
									<div>
										<p>✔ {{$story->title}}
										</div>
									@endforeach
								</div>
							</div>
							<div class="space"></div>
						</div>
						<div class="col-md-6">
							<h2 class="title text-center"><span>Upcoming Events</span></h2>
							<ul class="events" style="padding-left: 0px;max-height: 500px;overflow-y: scroll;">
								@foreach (App\Story::where('type','1')->orderBy('created_at', 'DESC')->get() as $story)
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
				</div>
			</div>
		</div>
	</div>
	<!-- section end -->

	<!-- section start -->
	<!-- ================ -->
	<div class="section">
		<div class="container">
			<h1 class="text-center title" id="portfolio"><span>Events</span></h1>
			<div class="separator"></div>
			<br>
			<div class="row object-non-visible" data-animation-effect="fadeIn">
				<div class="col-md-12">
					@php
					$types = App\Committee::getAll();
					function is_in_type($name, $types) {
						foreach ($types as $type) {
							if($name == $type->url)
							return true;
						}
						return false;
					}
					@endphp

					<!-- portfolio items start -->
					<div class="row">
						<div class="target-container container" style="overflow:hidden;">
							@foreach (App\Event::orderBy('date','desc')->get() as $event)
								@php
								if(!is_in_type($event->department, $types) && $event->department != "all") continue;
								@endphp
								<div class="col-sm-6 col-md-3 isotope-item {{$event->department}}">
									<div class="image-box">
										<div class="overlay-container">
											{{-- 750 x 500 --}}
											<img src="{{url("images/eclipse.gif")}}" alt="" data-echo="{{$event->getFeaturedImage()}}" style="height: 240px;margin: 0 auto;" height="500">
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
					</div>
					<!-- portfolio items end -->
				</div>
			</div>
		</div>
	</div>
	<!-- section end -->

	<!-- section start -->
	<!-- ================ -->
	<div class="section">
		<div class="container">
			<h1 class="text-center title" id="portfolio"><span>Our students are placed with the following companies</span></h1>
			<div class="separator"></div>
			<br>
			<div class="row object-non-visible" data-animation-effect="fadeIn">
				<div class="col-md-12">
						<div style="display: flex;flex-wrap: wrap;padding: 0 4px;">
								<div class="column-for-comp">
									<img src="{{url("images/eclinicalworks.png")}}">
									<img src="{{url("images/infosys.jpg")}}">
							</div>
							<div class="column-for-comp">
									<img src="{{url("images/Jaro.jpeg")}}">
									<img src="{{url("images/ltihr.jpg")}}">
							</div>
							<div class="column-for-comp">
									<img src="{{url("images/neosoft.jpg")}}">
									<img src="{{url("images/sankey.jpg")}}">
							</div>
							<div class="column-for-comp">
									<img src="{{url("images/simple-logic.png")}}">
									<img src="{{url("images/tcs.png")}}">
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	<!-- section end -->



	<!-- section start -->
	<!-- ================ -->
	{{--  <div class="default-bg space blue">
	<div class="container">
	<div class="row">
	<div class="col-md-8 col-md-offset-2">
	<h1 class="text-center"> Lorem ipsum</h1>
</div>
</div>
</div>
</div>  --}}
<!-- section end -->


<!-- section start -->
<!-- ================ -->
<div class="section translucent-bg bg-image-2 pb-clear">
	<div class="container object-non-visible" data-animation-effect="fadeIn">
		{{-- <h1 id="clients" class="title text-center">Testimonials</h1> --}}
		{{-- <div class="space"></div> --}}
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


<!-- fixed tabs -->
<div class="scale-section default-bg" style="background-color: black;">
	<div class="container">
		<h1 id="ribbon-title" class="title text-center"><span style="font-weight: 100;">Statutory Affiliations</span></h1>
		<div class="col-md-3">
			<a href="{{route('mandatory-disclosure', 'mandatory-disclosure')}}" style="text-decoration: none;">
				<div style="width: max-content;margin:0 auto;">
					<h3 class="ribbon-link" style="text-align:center;width: max-content;">Mandatory Disclosure</h3>
				</div>
			</a>
		</div>
		<div class="col-md-2">
			<a href="{{route('mandatory-disclosure', 'aicte-affiliation')}}" style="text-decoration: none;">
				<div style="width: max-content;margin:0 auto;">
					<h3 class="ribbon-link" style="text-align:center;width: max-content;">AICTE Affiliation</h3>
				</div>
			</a>
		</div>
		<div class="col-md-2">
			<a href="{{route('mandatory-disclosure', 'dte')}}" style="text-decoration: none;">
				<div style="width: max-content;margin:0 auto;">
					<h3 class="ribbon-link" style="text-align:center;width: max-content;">DTE Affiliation</h3>
				</div>
			</a>
		</div>
		<div class="col-md-2">
			<a href="{{route('mandatory-disclosure', 'university-affiliation')}}" style="text-decoration: none;">
				<div style="width: max-content;margin:0 auto;">
					<h3 class="ribbon-link" style="text-align:center;width: max-content;">University affiliation</h3>
				</div>
			</a>
		</div>
		<div class="col-md-3">
			<a href="{{route('grievance-redressal')}}" style="text-decoration: none;">
				<div style="width: max-content;margin:0 auto;">
					<h3 class="ribbon-link" style="text-align:center;width: max-content;">Grievance Redressal</h3>
				</div>
			</a>
		</div>
	</div>
</div>


<!-- footer start -->
<!-- ================ -->
<footer id="footer">

	<!-- .footer start -->
	<!-- ================ -->
	<div class="footer section default-bg">
		<div class="container">
			<h1 class="title text-center" id="contact">Contact Us</h1>
			<div class="space"></div>
			<div class="row">
				<div class="col-sm-8 col-md-8 col-xs-12">
					<div class="footer-content">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1584.396878799198!2d72.98002808733317!3d19.179818462852708!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb4f1e032d9e4fc41!2sK+C+College+Of+Engineering+Management+Studies+And+Research!5e0!3m2!1sen!2sin!4v1514910475785" class="maps" frameborder="0" style="border:0" allowfullscreen></iframe>
						<ul class="list-icons">
							<li><i class="fa fa-map-marker pr-10"></i><a href="https://goo.gl/maps/9kgemW2tEwn" class="a-no-decrn">{{setting('contact-address')}}</a></li>
							<li><i class="fa fa-envelope-o pr-10"></i>
								&nbsp;<a href="mailto:{{setting('contact-email')}}" style="text-decoration: none;">{{setting('contact-email')}}</a>
							</li>
							<li><i class="fa fa-phone pr-10"></i>&nbsp;{{setting('contact-phone')}}</li>
							<li><i class="fa fa-whatsapp pr-10"></i>&nbsp;9594477844</li>
							<li><i class="fa fa-volume-control-phone pr-10"></i>&nbsp;8448385585</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 col-xs-12">
					<div class="footer-content">
						<form role="form" id="contact-form" method="post">
							{!! csrf_field() !!}
							<div class="form-group has-feedback">
								<label class="sr-only" for="name">Name</label>
								<input type="text" class="form-control" id="name" placeholder="Name" name="name">
								<i class="fa fa-user form-control-feedback"></i>
								<p class="help-block"></p>
							</div>
							<div class="form-group has-feedback">
								<label class="sr-only" for="email">Email address</label>
								<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
								<i class="fa fa-envelope form-control-feedback"></i>
								<p class="help-block"></p>
							</div>
							<div class="form-group has-feedback">
								<label class="sr-only" for="message">Message</label>
								<textarea class="form-control" rows="8" id="message" placeholder="Message" name="message"></textarea>
								<i class="fa fa-pencil form-control-feedback"></i>
								<p class="help-block"></p>
							</div>
							<button type="submit" name="button" class="btn btn-default" style="min-width: auto;">Send</button>
						</form>
						<ul class="social-links">
							<a href="https://www.linkedin.com/in/kccemsr/" target="_blank"><li class="linkedin"><i class="fa fa-linkedin"></i></li></a>
							<a href="https://www.facebook.com/social.kc2001/" target="_blank"><li class="facebook"><i class="fa fa-facebook"></i></li></a>
							<a href="https://twitter.com/kccemsr_social/" target="_blank"><li class="twitter"><i class="fa fa-twitter"></i></li></a>
							<a href="https://www.instagram.com/kccemsr_social/" target="_blank"><li class="instagram"><i class="fa fa-instagram"></i></li></a>
							<a href="https://www.youtube.com/channel/UCoWQSD-KlLD47LpqiSkDZkQ/" target="_blank"><li class="youtube"><i class="fa fa-youtube"></i></li></a>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- .footer end -->

	<!-- .subfooter start -->
	<!-- ================ -->
	<div class="subfooter">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="text-center">Copyright © 2019 K.C. College of Engineerng & Management Studies & Research.</p>
					<p class="text-center">Supervised by: Mandar Ganjapurkar</p>
					<p class="text-center">Developed by: <a target="_blank" href="https://www.linkedin.com/in/bhaktij-koli/">Bhaktij Koli</a> and <a target="_blank" href="https://www.linkedin.com/in/simmarkalsi/">Simmar Kalsi</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- .subfooter end -->

</footer>
<!-- footer end -->
@endsection
@section('post')
@endsection
