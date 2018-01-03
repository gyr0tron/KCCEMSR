@extends('layouts.master')
@section('pre')
	@php
	$title = $event->name;
	$menu_item = 'academics';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content">
			<h1 id="about" class="title text-center"><span>{{$event->name}}</span></h1>
			<div class="row" id="slider">
				<div class="col-md-12">
					<div id="myCarousel" class="carousel slide">
						<div class="carousel-inner">
							@php
							$no = 0;
							@endphp
							@foreach (App\Eventimage::where('event',$event->id)->get() as $image)
								<div class="item{{$no==0?' active': ''}}" data-slide-number="{{$no++}}">
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
				</div>
			</div>

			<div class="row">
				<div class="col-md-12" id="slider-thumbs">
					<ul class="list-inline">
						@php
						$no = 0;
						@endphp
						@foreach (App\Eventimage::where('event',$event->id)->get() as $image)
							<li>
								<a id="carousel-thumb-{{$no++}}" class="{{$no==0?'selected':''}}">
									<img src="{{$image->getThumb()}}" width="80" height="60">
								</a>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="row">
				<p class="lead text-center">{!!$event->description!!}</p>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
{{-- <div class="item" data-slide-number="7">
	<img src="http://placehold.it/1200x480&amp;text=8">
</div>
<li>
	<a id="carousel-thumb-0" class="selected">
		<img src="http://placehold.it/80x60&amp;text=1">
	</a>
</li> --}}
