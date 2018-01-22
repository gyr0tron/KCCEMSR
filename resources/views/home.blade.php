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
							data-rotate='["simple.", "creative.", "saints of technology!", "developers.", "nerdy." ]'></span></h1>
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
								<iframe width="100%" height="300" src="https://www.youtube.com/embed/HG2thJowMAU" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
								<div class="space"></div>
							</div>
							<div class="col-md-6" style="text-align: justify;">
								Excelssior Education Society is an educational and charitable trust that is dedicated to the pursuit of excellence and welfare of the students since 1978 and is affiliated to Mumbai University. It aims to maximise the capabilities of individuals in all generes educational, intellectual and moral. Our endeavour is to align education with innovation and practical exposure needed to meet the current industry’s requirement. Dr Harssh Khanna and late Mr K. C. Khanna are the milestone in the establishment of KCCOEMSR.

							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<h1 id="about" class="title text-center"><span>Vision</span></h1>
						<ul class="list-unstyled">
							<li><i class="fa fa-caret-right pr-10 text-colored"></i>To be an organization of excellence, leveraging human potential in engineering and management for a better tomorrow</li>
						</ul>
					</div>
					<div class="col-md-6">
						<h1 id="about" class="title text-center"><span>Mission</span></h1>
						<ul class="list-unstyled">
							<li><i class="fa fa-caret-right pr-10 text-colored"></i> To nurture scientific temperament through the process of intellectual stimulation.</li>
							<li><i class="fa fa-caret-right pr-10 text-colored"></i> To inculcate a sense of life-long learning and developing positive qualities.</li>
							<li><i class="fa fa-caret-right pr-10 text-colored"></i> To excel in academics, practical engineering and research endeavors.</li>
							<li><i class="fa fa-caret-right pr-10 text-colored"></i> To collaborate with institutions and industries for mutual benefits and to achieve excellence.</li>
							<li><i class="fa fa-caret-right pr-10 text-colored"></i> To facilitate employability, entrepreneurial ability along with social responsibility.</li>
						</ul>
					</div>
				</div>
				<div class="space"></div>
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
						<div class="media">
							<div class="media-body text-right">
								<h4 class="media-heading">Humanities and Applied Sciences</h4>
								<p style="height: 4.5em;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;margin-bottom: 0px;overflow: hidden;-o-text-overflow: ellipsis;text-overflow: ellipsis;">{{strip_tags(App\Department::where('url','humanities-sciences')->first()->description)}}</p>
								<a class="" style="cursor:pointer;" href="">Read more</a>
							</div>
							<div class="media-right">
								<i class="fa fa-flask"></i>
							</div>
						</div>
						<div class="media">
							<div class="media-body text-right">
								<h4 class="media-heading">Computer Engineering</h4>
								<p style="height: 4.5em;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;margin-bottom: 0px;overflow: hidden;-o-text-overflow: ellipsis;text-overflow: ellipsis;">{{strip_tags(App\Department::where('url','computer')->first()->description)}}</p>
								<a class="" style="cursor:pointer;" href="">Read more</a>
							</div>
							<div class="media-right">
								<i class="fa fa-code"></i>
							</div>
						</div>
						<div class="media">
							<div class="media-body text-right">
								<h4 class="media-heading">Electronics Engineering</h4>
								<p style="height: 4.5em;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;margin-bottom: 0px;overflow: hidden;-o-text-overflow: ellipsis;text-overflow: ellipsis;">{{strip_tags(App\Department::where('url','electronics')->first()->description)}}</p>
								<a class="" style="cursor:pointer;" href="">Read more</a>
							</div>
							<div class="media-right">
								<i class="fa fa-microchip"></i>
							</div>
						</div>
					</div>

					<div class="space visible-xs"></div>

					<div class="col-sm-6">
						<div class="media">
							<div class="media-left">
								<i class="fa fa-rss"></i>
							</div>
							<div class="media-body">
								<h4 class="media-heading">Electronics &amp; Telecommunication</h4>
								<p style="height: 4.5em;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;margin-bottom: 0px;overflow: hidden;-o-text-overflow: ellipsis;text-overflow: ellipsis;">{{strip_tags(App\Department::where('url','extc')->first()->description)}}</p>
								<a class="" style="cursor:pointer;" href="">Read more</a>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<i class="fa fa-desktop"></i>
							</div>
							<div class="media-body">
								<h4 class="media-heading">Information Technology</h4>
								<p style="height: 4.5em;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;margin-bottom: 0px;overflow: hidden;-o-text-overflow: ellipsis;text-overflow: ellipsis;">{{strip_tags(App\Department::where('url','it')->first()->description)}}</p>
								<a class="" style="cursor:pointer;" href="">Read more</a>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<i class="fa fa-area-chart"></i>
							</div>
							<div class="media-body">
								<h4 class="media-heading">MMS</h4>
								<p style="height: 4.5em;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;margin-bottom: 0px;overflow: hidden;-o-text-overflow: ellipsis;text-overflow: ellipsis;">{{strip_tags(App\Department::where('url','mms')->first()->description)}}</p>
								<a class="" style="cursor:pointer;" href="">Read more</a>
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
<div class="section">
	<div class="container">
		<h1 class="text-center title" id="portfolio">Events</h1>
		<div class="separator"></div>
		<br>
		<div class="row object-non-visible" data-animation-effect="fadeIn">
			<div class="col-md-12">

				<!-- isotope filters start -->
				<div class="filters text-center">
					<ul class="nav nav-pills">
						<li class="active"><a href="#" data-filter="*">All</a></li>
						@foreach (App\Committee::getAll() as $type)
							<li><a href="#" data-filter=".{{$type->url}}">{{$type->name}}</a></li>
						@endforeach
					</ul>
				</div>
				<!-- isotope filters end -->

				<!-- portfolio items start -->
				<div class="isotope-container row grid-space-20">
					@foreach (App\Event::all() as $event)
						@php
						if(!is_in_type($event->department, App\Committee::all())) continue;
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
									<p style="overflow: hidden; margin: 0px;">
									{{$event->name}}
									</p>
								</a>
							</div>
						</div>
					@endforeach
					@php
					function is_in_type($name, $types) {
						foreach ($types as $type) {
							if($name == $type->url)
							return true;
						}
						return false;
					}
					@endphp
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
								<div class="form-group has-feedback">
									<label class="sr-only" for="name">Name</label>
									<input type="text" class="form-control" id="name" placeholder="Name" name="name">
									<i class="fa fa-user form-control-feedback"></i>
								</div>
								<div class="form-group has-feedback">
									<label class="sr-only" for="email">Email address</label>
									<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
									<i class="fa fa-envelope form-control-feedback"></i>
								</div>
								<div class="form-group has-feedback">
									<label class="sr-only" for="message">Message</label>
									<textarea class="form-control" rows="8" id="message" placeholder="Message" name="message"></textarea>
									<i class="fa fa-pencil form-control-feedback"></i>
								</div>
								<input type="submit" value="Send" class="btn btn-default" style="min-width: auto;">
							</form>
							<ul class="social-links">
								<li class="facebook"><i class="fa fa-facebook"></i></li>
								<li class="linkedin"><i class="fa fa-linkedin"></i></li>
								<li class="youtube"><i class="fa fa-youtube"></i></li>
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
						<p class="text-center">Copyright © stuff by <a target="_blank" href="#">KC Href</a>.</p>
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
