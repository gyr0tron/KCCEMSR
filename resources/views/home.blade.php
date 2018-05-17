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
	<a href="/#announcements" id="notification"><i class="fa fa-bell">
		<p class="bubble speech" id="bell_info" style="color:black">Check out the latest happenings at KC!
		</p>
	</i></a>
	<div id="banner" class="banner">
		<div class="banner-image"></div>
		<div class="arrow bounce" id="arw" onclick="location.href='/#welcome';" style="cursor: pointer; z-index: 1;"></div>
		<div class="banner-caption">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
						<h1 class="text-center">We are <span
							class="txt-rotate"
							data-period="2000"
							data-rotate='["simple.", "creative.", "developers.", "nerdy." ]'></span></h1>
							<p class="lead text-center" id="welcome">Our energy introduces us before we start speaking. We are engineers.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="about" class="title text-center">Welcome to <span>K.C.College of Engineering and Management Studies & Research!</span></h1>
						{{-- <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta officia, aspernatur.</p> --}}
						<div class="space"></div>
						<div class="row">
							<div class="col-md-6">
								{{-- <img src="http://via.placeholder.com/1140x615" alt=""> --}}
								{{-- previous link https://www.youtube.com/embed/HG2thJowMAU --}}
								<iframe width="100%" height="300" src="https://www.youtube.com/embed/ciiMB8Mbg5g" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
								<div class="space"></div>
							</div>
							<div class="col-md-6" style="text-align: justify;">
								Excelssior Education Society is an educational and charitable trust that is dedicated to the pursuit of excellence and welfare of the students since 1978 and is affiliated to Mumbai University. It aims to maximise the capabilities of individuals in all generes educational, intellectual and moral. Our endeavour is to align education with innovation and practical exposure needed to meet the current industry’s requirement. Dr Harssh Khanna and late Mr K. C. Khanna are the milestone in the establishment of KCCOEMSR.
							</div>
							<div class="space"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<h2 id="about" class="title text-center"><span>Vision</span></h2>
						<ul class="list-unstyled">
							<li><i class="fa fa-caret-right pr-10 text-colored"></i>To be an organization of excellence, leveraging human potential in engineering and management for a better tomorrow</li>
						</ul>
						<div class="space"></div>
						<h2 id="about" class="title text-center"><span>Mission</span></h2>
						<ul class="list-unstyled">
							<li><i class="fa fa-caret-right pr-10 text-colored"></i> To nurture scientific temperament through the process of intellectual stimulation.</li>
							<li><i class="fa fa-caret-right pr-10 text-colored"></i> To inculcate a sense of life-long learning and developing positive qualities.</li>
							<li><i class="fa fa-caret-right pr-10 text-colored"></i> To excel in academics, practical engineering and research endeavors.</li>
							<li><i class="fa fa-caret-right pr-10 text-colored"></i> To collaborate with institutions and industries for mutual benefits and to achieve excellence.</li>
							<li><i class="fa fa-caret-right pr-10 text-colored"></i> To facilitate employability, entrepreneurial ability along with social responsibility.</li>
						</ul>
					</div>
					<div class="col-md-6">
						<h2 id="progOutcms" style="margin-top: 0px; margin-bottom: 5px;"><span>Program Outcomes:</span></h2>
						<p style="margin: 10px 0 0 0;">Engineering Graduates will be able to:</p>
						<ul class="list-unstyled">
							<li><i class="fa fa-caret-right pr-10 text-colored"></i><strong>Engineering knowledge:</strong><p style="padding-left:2%">Apply the knowledge of mathematics, science, engineering fundamentals, and an engineering specialization to the solution of complex engineering problems.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored"></i><strong>Problem analysis:</strong><p style="padding-left:2%">Identify, formulate, review research literature, and analyze complex engineering problems reaching substantiated conclusions using first principles of mathematics, natural sciences, and engineering sciences.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored"></i><strong>Design/development of solutions:</strong><p style="padding-left:2%">Design solutions for complex engineering problems and design system components or processes that meet the specified needs with appropriate consideration for the public health and safety, and the cultural, societal, and environmental considerations.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored"></i><strong>Conduct investigations of complex problems:</strong><p style="padding-left:2%">Use research-based knowledge and research methods including design of experiments, analysis and interpretation of data, and synthesis of the information to provide valid conclusions.</p></li>
						</ul>
						<a class="" style="cursor:pointer;font-size: 1.1em;padding-left: 10px;" href="/about#progOutcms">Read more</a>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section translucent-bg bg-image-1 blue">
			<div class="container object-non-visible" data-animation-effect="fadeIn">
				<h1 id="services" class="text-center title">Departments</h1>
				<div class="space"></div>
				<div class="row">
					<div class="col-sm-6">
						@php
						$dep = App\Department::where('url','computer')->first();
						@endphp
						<div class="media">
							<div class="media-body text-right">
								<h4 class="media-heading">{{$dep->name}}</h4>
								<p style="text-align: justify;height: 4.5em;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;margin-bottom: 0px;overflow: hidden;-o-text-overflow: ellipsis;text-overflow: ellipsis;">{{strip_tags($dep->description)}}</p>
								<a class="" style="cursor:pointer;" href="{{route('department',$dep->url)}}">Read more</a>
							</div>
							<div class="media-right">
								<i class="fa fa-code"></i>
							</div>
						</div>

						@php
						$dep = App\Department::where('url','extc')->first();
						@endphp
						<div class="media">
							<div class="media-body text-right">
								<h4 class="media-heading">{{$dep->name}}</h4>
								<p style="text-align: justify;height: 4.5em;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;margin-bottom: 0px;overflow: hidden;-o-text-overflow: ellipsis;text-overflow: ellipsis;">{{strip_tags($dep->description)}}</p>
								<a class="" style="cursor:pointer;" href="{{route('department',$dep->url)}}">Read more</a>
							</div>
							<div class="media-right">
								<i class="fa fa-rss"></i>
							</div>
						</div>

						@php
						$dep = App\Department::where('url','it')->first();
						@endphp
						<div class="media">
							<div class="media-body text-right">
								<h4 class="media-heading">{{$dep->name}}</h4>
								<p style="text-align: justify;height: 4.5em;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;margin-bottom: 0px;overflow: hidden;-o-text-overflow: ellipsis;text-overflow: ellipsis;">{{strip_tags($dep->description)}}</p>
								<a class="" style="cursor:pointer;" href="{{route('department',$dep->url)}}">Read more</a>
							</div>
							<div class="media-right">
								<i class="fa fa-desktop"></i>
							</div>
						</div>
					</div>

					<div class="space visible-xs"></div>

					<div class="col-sm-6">
						@php
						$dep = App\Department::where('url','electronics')->first();
						@endphp
						<div class="media">
							<div class="media-left">
								<i class="fa fa-microchip"></i>
							</div>
							<div class="media-body">
								<h4 class="media-heading">{{$dep->name}}</h4>
								<p style="text-align: justify;height: 4.5em;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;margin-bottom: 0px;overflow: hidden;-o-text-overflow: ellipsis;text-overflow: ellipsis;">{{strip_tags($dep->description)}}</p>
								<a class="" style="cursor:pointer;" href="{{route('department',$dep->url)}}">Read more</a>
							</div>
						</div>

						@php
						$dep = App\Department::where('url','humanities-sciences')->first();
						@endphp
						<div class="media">
							<div class="media-left">
								<i class="fa fa-flask"></i>
							</div>
							<div class="media-body">
								<h4 class="media-heading">{{$dep->name}}</h4>
								<p style="text-align: justify;height: 4.5em;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;margin-bottom: 0px;overflow: hidden;-o-text-overflow: ellipsis;text-overflow: ellipsis;">{{strip_tags($dep->description)}}</p>
								<a class="" style="cursor:pointer;" href="{{route('department',$dep->url)}}">Read more</a>
							</div>
						</div>

						@php
						$dep = App\Department::where('url','mms')->first();
						@endphp
						<div class="media">
							<div class="media-left">
								<i class="fa fa-area-chart"></i>
							</div>
							<div class="media-body">
								<h4 class="media-heading">{{$dep->name}}</h4>
								<p style="text-align: justify;height: 4.5em;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;margin-bottom: 0px;overflow: hidden;-o-text-overflow: ellipsis;text-overflow: ellipsis;">{{strip_tags($dep->description)}}</p>
								<a class="" style="cursor:pointer;" href="{{route('department',$dep->url)}}">Read more</a>
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


<!-- Announcements start -->
<div class="section default-bg" style="padding-bottom: 10px;">
	<div class="container">
		<a class="anchor_guide" id="announcements"></a>
		<h1 class="title text-center">Announcements</h1>
		<div class="separator"></div>
		<br>
		<div class="row object-non-visible" data-animation-effect="fadeIn">
			<div class="col-md-5 col-sm-5 col-xs-12">
				<h2 class="title text-center">Curricular</h2>
				<div class="carousel slide" data-ride="carousel" id="quote-carousel0">
					<!-- Carousel Slides / Quotes -->
					<div class="carousel-inner text-center" style="min-height: auto;">
						@php
						$no = 0;
						@endphp
						@foreach (App\Announcement::where("type","0")->orderBy('id','DESC')->get() as $anouncement)
							<div class="item {{$no++==0?'active':''}}">
								<div class="row">
									<div class="col-sm-8 col-sm-offset-2">
										@if (strlen($anouncement->filename) > 2)
											<p class="text-center"><a class="" style="cursor:pointer;text-decoration:none;" href="{{$anouncement->getUrl()}}">{{$anouncement->title}}&nbsp;&nbsp;</a><i class="fa fa-download"></i></p>
										@elseif (strlen($anouncement->link) > 2)
											<p class="text-center"><a class="" style="cursor:pointer;text-decoration:none;" href="{{$anouncement->link}}">{{$anouncement->title}}&nbsp;&nbsp;</a><i class="fa fa-download"></i></p>
										@else
											<p class="text-center">{{$anouncement->title}}</p>
										@endif
									</div>
								</div>
							</div>
						@endforeach
					</div>

					<!-- Carousel Buttons Next/Prev -->
					<a data-slide="prev" style="background: none;height: fit-content;top: 30%;" href="#quote-carousel0" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
					<a data-slide="next" style="background: none;height: fit-content;top: 30%;" href="#quote-carousel0" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
				</div>
				<div class="space"></div>
			</div>

			<div class="col-md-5 col-sm-5 col-xs-12 col-md-offset-2 col-xs-offset-0">
				<h2 class="title text-center">Extra Curricular</h2>
				<div class="carousel slide" data-ride="carousel" id="quote-carousel1">
					<!-- Carousel Slides / Quotes -->
					<div class="carousel-inner text-center" style="min-height: auto;">
						@php
						$no = 0;
						@endphp
						@foreach (App\Announcement::where("type","1")->orderBy('id','DESC')->get() as $anouncement)
							<div class="item {{$no++==0?'active':''}}">
								<div class="row">
									<div class="col-sm-8 col-sm-offset-2">
										@if (strlen($anouncement->filename) > 2)
											<p class="text-center"><a class="" style="cursor:pointer;text-decoration:none;" href="{{$anouncement->getUrl()}}">{{$anouncement->title}}&nbsp;&nbsp;</a><i class="fa fa-download"></i></p>
										@elseif (strlen($anouncement->link) > 2)
											<p class="text-center"><a class="" style="cursor:pointer;text-decoration:none;" href="{{$anouncement->link}}">{{$anouncement->title}}&nbsp;&nbsp;</a><i class="fa fa-download"></i></p>
										@else
											<p class="text-center">{{$anouncement->title}}</p>
										@endif
									</div>
								</div>
							</div>
						@endforeach
						</div>

						<!-- Carousel Buttons Next/Prev -->
						<a data-slide="prev" style="background: none;height: fit-content;top: 30%;" href="#quote-carousel1" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
						<a data-slide="next" style="background: none;height: fit-content;top: 30%;" href="#quote-carousel1" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
					</div>
					<div class="space"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Announcements end -->

	<!-- section start -->
	<!-- ================ -->
	<div class="section">
		<div class="container">
			<h1 class="text-center title" id="portfolio">Events</h1>
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
					<!-- isotope filters start -->
					<div class="filters text-center">
						<ul class="nav nav-pills">
							<li class="active"><a href="#" data-filter="*">All</a></li>
							@foreach ($types as $type)
								<li><a href="#" data-filter=".{{$type->url}}">{{$type->name}}</a></li>
							@endforeach
						</ul>
					</div>
					<!-- isotope filters end -->
					<!-- portfolio items start -->
					<div class="isotope-container row grid-space-20">
						@foreach (App\Event::orderBy('date','desc')->get() as $event)
							@php
							if(!is_in_type($event->department, $types) && $event->department != "all") continue;
							@endphp
							<div class="col-sm-6 col-md-3 isotope-item {{$event->department}}">
								<div class="image-box">
									<div class="overlay-container">
										{{-- 750 x 500 --}}
										<img src="{{$event->getFeaturedImage()}}" alt="" height="500">
										<a class="overlay" href="{{route('event', $event->url)}}">
											<i class="fa fa-search-plus"></i>
											<span>{{App\Department::getName($event->department)}}</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" href="{{route('event', $event->url)}}">
										<p style="overflow: hidden; margin: 0px; white-space: pre-line;" class="ellipsis_3_line">
											{{$event->name}}
										</p>
									</a>
								</div>
							</div>
						@endforeach
					</div>
					<!-- portfolio items end -->
				</div>
			</div>
		</div>
	</div>
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
								<li><i class="fa fa-envelope-o pr-10"></i>&nbsp;{{setting('contact-email')}}</li>
								<li><i class="fa fa-phone pr-10"></i>&nbsp;{{setting('contact-phone')}}</li>
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
						<p class="text-center">Copyright © 2018 K.C.College of Engineerng & Management Studies & Research.</p>
						<p class="text-center">Developed by K.C. College Web Development Team</p>
						<p class="text-center">Regarding any queries please contact <a target="_blank" href="https://www.linkedin.com/in/bhaktij-koli/">Bhaktij Koli</a> or <a target="_blank" href="https://www.linkedin.com/in/simmarkalsi/">Simmar Kalsi</a></p>
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
