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
					<div id="myCarousel" class="carousel slide">
						<div class="carousel-inner">
							<div class="active" data-slide-number="1">
								<img src="http://placehold.it/1200x700&amp;text=1" width="1200">
							</div>
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

				<div class="col-md-6">
					<h2 class="title"><span></span></h2>
					{{--  {{$library[$i]->description}}  --}}
				</div>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
