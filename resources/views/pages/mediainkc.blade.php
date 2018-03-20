@extends('layouts.master')
@section('pre')
	@php
	$menu_item = 'mediainkc';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="row">
			<h1 class="text-center title" style="font-weight: 300;"><span>KC in Media</span></h1>
				<div class="col-md-6" style="float:left">
					<div id="myCarousel" class="carousel slide">
						<div class="carousel-inner">
								<div class="item active" data-slide-number="1">
									<img src="http://via.placeholder.com/600x400" width="1200">
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
					<h2 class="title"><span>Title</span></h2>
					<h4>Sub heading:</h4>
					<p style="text-align: justify">Veniam occaecat ullamco ut voluptate eiusmod eu ea nulla amet magna officia in. Sunt mollit in tempor irure in quis elit reprehenderit elit nulla. Non id do est in qui fugiat veniam. Laboris tempor non culpa eiusmod sint officia consequat eu aliqua incididunt ut irure sint dolor.</p>
				</div>
			</div>

			<div class="space"></div>

			<div class="row">
				<div class="col-md-6" style="float:left">
					<div id="myCarousel" class="carousel slide">
						<div class="carousel-inner">
								<div class="item active" data-slide-number="1">
									<img src="http://via.placeholder.com/600x400" width="1200">
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
					<h2 class="title"><span>Title</span></h2>
					<h4>Sub heading:</h4>
					<p style="text-align: justify">Veniam occaecat ullamco ut voluptate eiusmod eu ea nulla amet magna officia in. Sunt mollit in tempor irure in quis elit reprehenderit elit nulla. Non id do est in qui fugiat veniam. Laboris tempor non culpa eiusmod sint officia consequat eu aliqua incididunt ut irure sint dolor.</p>
				</div>
			</div>

		</div>
	</div>
@endsection
