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
			<div class="row">
				<h1 id="about" class="title text-center">About <span>Library</span></h1>
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
					<p>About library</p>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
