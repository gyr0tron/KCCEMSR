@extends('layouts.master')
@section('pre')
	@php
	$title = "About Library";
	$menu_item = 'library';
@endphp
@endsection
@section('content')
	<div id="about" class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
				<div class="row">
					<h1 id="about" class="title text-center"><span>About Library</span></h1>
					<div class="space"></div>
					<div class="col-md-6" style="float:left">
						@php
						$car = App\Carousel::where('type', 'library')->first();
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

							<!-- Controls-->
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
						<p style="text-align: justify">KCCEMSR Library is situated on 4th Floor. It is managed by professionally qualified staff. It provides essential information resources in print as well as digital / Electronic formats as per need of its academic community. It offers open access to Library collection for better utilization of available information resources. It offers required library services for better utilization of available information resources.</p>
					</div>
				</div>
			</div>
			<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
				<div class="row">
					<h1 id="general-rules" class="title text-center"><span>General Rules</span></h1>
					<div class="col-md-12">
						<ul class="list-unstyled">
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Four Books will be issued for 10 days</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Books will be issued only after the library card is handed over to the person at the library counter</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">The library card will be given back to the student on his or her returning the book/s to the library</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Do not mark or remove any page of the book. If anybody makes the mistakes or lost the book/s than he/she will be responsible for the replacement of the same book or should pay the amount of the book</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Fine will be charged for late return i.e., Rs. 2 per day</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Books can be renewed for a further period of 10 days but not more than two consecutive renewals are permitted</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Keep your baggage at property counter while entering the Books Section</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Library card should be return while leaving the college</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">If Library card is lost, a fresh card will be issued on payment of Rs. 25</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Student should maintain silence in the Library</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Mobile Phones i.e., pads or any type of electronic gadget are not allowed (except Laptop)</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Magazines and Journals are only for reference</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Reference books are allowed only for reading in library against college Identity Card</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Keep the newspaper and periodicals at the respective places</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Eatables are strictly prohibited</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">While leaving your seat, arrange your chair properly</p></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
				<div class="row">
					<h1 id="activites" class="title text-center"><span>Activites</span></h1>
					@php
					$car = App\Carousel::where('type', 'library-activites')->first();
					@endphp
					@if ($car)
						@foreach ($car->images as $id)
							@php
							$image = App\ImageUpload::where('id', $id)->first();
							if(!$image) continue;
							@endphp
							<div class="col-sm-3">
								<img src="{{$image->getUrl()}}">
							</div>
						@endforeach
					@endif
				</div>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
