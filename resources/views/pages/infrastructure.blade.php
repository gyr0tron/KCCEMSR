@extends('layouts.master')
@section('pre')
	@php
	$title = "Infrastructure & Activities";
	$menu_item = 'about';
@endphp
@endsection
@section('content')
	<div class="section">
		<div class="container main-content-sub">
			@php
			$infrastructure = App\Infrastructure::all();
			$total = count($infrastructure);
			@endphp
			@for ($i=0; $i < $total; $i++)
				<div class="section">
					<div class="row">

						<div class="container">
							<h2 class="title text-center"><span>{{$infrastructure[$i]->name}}</span></h2>
							<p class="text-center">{{$infrastructure[$i]->description}}</p>
						</div>
						<div class="container" style="float:right">
							<div class="row" id="slider">
								<div class="col-md-12">
									<div id="myCarousel" class="carousel slide">
										<div class="carousel-inner">
											@php
											$no = 0;
											@endphp
											@foreach ($infrastructure[$i]->images as $imageID)
												@php
													$image = App\ImageUpload::where('id', $imageID)->first();
												@endphp
												<div class="item{{$no==0?' active': ''}}" data-slide-number="{{$no++}}">
													<img src="{{$image->getUrl()}}" width="1200">
												</div>
											@endforeach
										</div>

										<!-- Controls-->
										<a class="left carousel-control" href="#myCarousel{{$i}}" role="button" data-slide="prev">
											<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="right carousel-control" href="#myCarousel{{$i}}" role="button" data-slide="next">
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
										@foreach ($infrastructure[$i]->images as $imageID)
											@php
												$image = App\ImageUpload::where('id', $imageID)->first();
											@endphp
											<li>
												<a id="carousel-thumb-{{$no++}}" class="{{$no==0?'selected':''}}">
													<img src="{{$image->getUrl()}}" width="80" height="60">
												</a>
											</li>
										@endforeach
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="space" style="margin-top:50px"></div>
			@endfor
		</div>
	</div>
@endsection
@section('post')
@endsection
