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
		<h1 id="about" class="title text-center"><span>Name</span></h1>
		<div class="row" id="slider">
			<div class="col-md-12">
				<div id="myCarousel" class="carousel slide">
					<div class="carousel-inner">
						<div class="active item" data-slide-number="0">
							<img src="http://placehold.it/1200x480&amp;text=1">
						</div>
						<div class="item" data-slide-number="1">
							<img src="http://placehold.it/1200x480&amp;text=2">
						</div>
						<div class="item" data-slide-number="2">
							<img src="http://placehold.it/1200x480&amp;text=3">
						</div>
						<div class="item" data-slide-number="3">
							<img src="http://placehold.it/1200x480&amp;text=4">
						</div>
						<div class="item" data-slide-number="4">
							<img src="http://placehold.it/1200x480&amp;text=5">
						</div>
						<div class="item" data-slide-number="5">
							<img src="http://placehold.it/1200x480&amp;text=6">
						</div>
						<div class="item" data-slide-number="6">
							<img src="http://placehold.it/1200x480&amp;text=7">
						</div>
						<div class="item" data-slide-number="7">
							<img src="http://placehold.it/1200x480&amp;text=8">
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
		</div>
		
		<div class="row">
			<div class="col-md-12" id="slider-thumbs">
				<ul class="list-inline">
					<li>
						<a id="carousel-thumb-0" class="selected">
							<img src="http://placehold.it/80x60&amp;text=1">
						</a>
					</li>
					<li>
						<a id="carousel-thumb-1">
							<img src="http://placehold.it/80x60&amp;text=2">
						</a>
					</li>
					<li>
						<a id="carousel-thumb-2">
							<img src="http://placehold.it/80x60&amp;text=3">
						</a>
					</li>
					<li>
						<a id="carousel-thumb-3">
							<img src="http://placehold.it/80x60&amp;text=4">
						</a>
					</li>
					<li>
						<a id="carousel-thumb-4">
							<img src="http://placehold.it/80x60&amp;text=5">
						</a>
					</li>
					<li>
						<a id="carousel-thumb-5">
							<img src="http://placehold.it/80x60&amp;text=6">
						</a>
					</li>
					<li>
						<a id="carousel-thumb-6">
							<img src="http://placehold.it/80x60&amp;text=7">
						</a>
					</li>
					<li>
						<a id="carousel-thumb-7">
							<img src="http://placehold.it/80x60&amp;text=8">
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
				<p class="lead text-center">Incididunt culpa ea mollit anim officia eiusmod voluptate reprehenderit magna cillum sunt. Cupidatat labore aute ullamco proident officia et quis adipisicing. Nostrud ullamco pariatur aliqua incididunt eiusmod consectetur anim est. Nisi duis occaecat culpa enim. Minim sunt quis voluptate ut ea. Aliqua ad est est cillum laborum cupidatat laboris dolor. Aliqua veniam adipisicing ad dolore aute elit ipsum.</p>
		</div>
	</div>
</div>
@endsection
@section('post')
@endsection
