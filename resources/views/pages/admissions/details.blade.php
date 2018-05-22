@extends('layouts.master')
@section('pre')
	@php
	$title = "Admissions 2018";
	$menu_item = 'admissions';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content">
			<div class="row">
				<div class="col-md-12">
					<h1 id="about" class="title text-center">Admissions <span>2018</span></h1>
					<div class="space"></div>
					<div class="row">
						<div class="col-md-6">
							{{-- <img src="http://via.placeholder.com/1140x615" alt=""> --}}
							<iframe width="100%" height="300" src="https://www.youtube.com/embed/ciiMB8Mbg5g" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
							<div class="space"></div>
						</div>
						<div class="col-md-6" style="text-align: justify;">
							<h2>Latest New's</h2>
							<ul class="list-unstyled resp-text-sub">
								<li><i class="fa fa-chevron-right pr-10 text-colored"></i><a href="{{route('admissions-apply')}}">Apply Online</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="space"></div>
			<div class="row">
				@php
				$car = App\Carousel::where('type', 'admissions')->first();
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
@endsection
@section('post')
@endsection
