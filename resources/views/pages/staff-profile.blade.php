@extends('layouts.master')
@section('pre')
	@php
	$title = $staff->name;
	$menu_item = 'staff';
	$qualifications = explode(",", $staff->qualification);
	$workshops = explode(".", $staff->workshops);
	$publications = explode(".", $staff->publications);
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content">
			<div class="col-md-4 col-sm-4 col-xs-4">
				<div style="width:100%; height:30%;">
					<img src="{{$staff->getUrl()}}" alt="">
				</div>
				<h1 style="margin-bottom: 1%;">{{$staff->name}}</h1>
				<a href="mailto:{{$staff->email}}">{{$staff->email}}</a>
			</div>
			<div class="col-md-8 col-sm-8 col-xs-8 line">
				<div class="row">
					<h2 class="title text-center"><strong><span>Designation</span></strong></h1>
						<p class="text-center" style="font-size:1.7em">{{$staff->designation}}</p>
					</div>
					<div class="row">
						<h2 class="text-center"><strong>Qualification</strong></h1>
							<ul class="list-unstyled" style="font-size:1.4em">
								@foreach ($qualifications as $d)
									@if (strlen($d) > 2)
										<li><i class="fa fa-chevron-right pr-10 text-colored" style="margin-left: 3%;"></i>{{$d}}</li>
									@endif
								@endforeach
							</ul>
						</div>
						<div class="row" style="height: 160px;">
							<h2 class="text-center"><strong>Experience</strong></h1>
								<div class="stats">
									<div class="counting text-center" data-count="{{$staff->experience}}">0</div>
									<h5 class="text-center">Years</h5>
								</div>
							</div>
							<div class="row">
								<h2 class="text-center"><strong>Area of Interest</strong></h1>
									<p class="lead text-center" style="margin-left: 3%;">{{$staff->interest}}</p>
								</div>
								<div class="row">
									<h2 class="text-center"><strong>Workshops and Training Attended</strong></h1>
										<ul class="list-unstyled" style="font-size:1.4em">
											@foreach ($workshops as $d)
												@if (strlen($d) > 2)
													<li><i class="fa fa-chevron-right pr-10 text-colored" style="margin-left: 3%;"></i>{{$d}}</li>
												@endif
											@endforeach
										</ul>
									</div>
									<div class="row">
										<h2 class="text-center"><strong>Publications</strong></h1>
											<ul class="list-unstyled" style="font-size:1.4em">
												@foreach ($publications as $d)
													@if (strlen($d) > 2)
														<li><i class="fa fa-chevron-right pr-10 text-colored" style="margin-left: 3%;"></i>{{$d}}</li>
													@endif
												@endforeach
											</ul>
										</div>
									</div>
								</div>
							</div>
						@endsection
						@section('post')
						@endsection
