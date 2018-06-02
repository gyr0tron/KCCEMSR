@extends('layouts.master')
@section('pre')
	@php
	$menu_item = 'lifeatkc';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content">
			<h1 class="text-center title" id="portfolio"><span>Life At KC</span></h1>
			<div class="separator"></div>
			<br>
			<div class="row object-non-visible" data-animation-effect="fadeIn">
				<div class="col-md-12">
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
					<!-- portfolio items end -->
				</div>
			</div>
		</div>
	</div>
@endsection
@php
function is_in_type($name, $types) {
	foreach ($types as $type) {
		if($name == $type->url)
		return true;
	}
	return false;
}
@endphp
@section('post')
@endsection
