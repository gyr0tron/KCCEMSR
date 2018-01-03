@extends('layouts.master')
@section('pre')
	@php
	$title = $dep->name;
	$menu_item = 'departments';
@endphp
@endsection
@section('content')

	<!-- section start -->
	<!-- ================ -->
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container">
			<div class="row" id="dept-row-main">
				<div class="col-md-12">
					<h1 id="about" class="title text-center"><span>{{$dep->name}}</span></h1>
					<div class="lead text-center">{!!$dep->description!!}</div>
					<div class="space"></div>
					<div class="row">
						<div class="col-md-6">
							<img src="{{$dep->getUrl()}}" alt="">
							<div class="space"></div>
						</div>
						<div class="col-md-6">
							<h2 style="margin-top: 0px; margin-bottom: 5px;">Vision</h2>
							<p margin-bottom: 15px;>{{$dep->vision}}
							</p>
							<h2 style="margin-top: 0px; margin-bottom: 5px;">Mission</h2>
							<ul class="list-unstyled">
								@php
								$data = explode(".", $dep->mission);
								@endphp
								@foreach ($data as $d)
									@if (strlen($d) > 2)
										<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">{{$d}}.</p></li>
									@endif
								@endforeach
							</ul>
						</div>
					</div>
					<div class="space"></div>
					<div class="row">
						<div class="col-md-6">
							<h2 style="margin-top: 0px; margin-bottom: 5px;">Program Objectives</h2>
							<ul class="list-unstyled">
								@php
								$data = explode(".", $dep->objectives);
								@endphp
								@foreach ($data as $d)
									@if (strlen($d) > 2)
										<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">{{$d}}.</p></li>
									@endif
								@endforeach
							</ul>
						</div>
						<div class="col-md-6">
							<h2 style="margin-top: 0px; margin-bottom: 5px;">Program Outcomes</h2>
							<p>{{$dep->outcome}}</p></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section translucent-bg bg-image-1 blue">
			<div class="container object-non-visible" data-animation-effect="fadeIn">
				<h1 id="services"  class="text-center title">Departmental Achievement</h1>
				@php
					$achivements = App\Achievement::where('type','1')->where('department',$dep->url)->get();
					$total = count($achivements);
					$left =  ceil($total/2);
				@endphp
				<div class="space"></div>
				<div class="row" style="font-size:16px;">
					<div class="col-sm-6">
						@for ($i=0; $i < $left; $i++)
							<div class="media">
								<div class="media-body text-right">
									<p>{{strip_tags($achivements[$i]->description)}}</p>
								</div>
								<div class="media-right">
									<i class="fa fa-caret-right rotate-180"></i>
								</div>
							</div>
						@endfor
					</div>
					<div class="space visible-xs"></div>
					<div class="col-sm-6">
						@for ($i=$left; $i < $total; $i++)
							<div class="media">
								<div class="media-left">
									<i class="fa fa-caret-right"></i>
								</div>
								<div class="media-body">
									<p>{{strip_tags($achivements[$i]->description)}}</p>
								</div>
							</div>
						@endfor
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->
		<!-- section start -->
		<!-- ================ -->
		<div class="section pb-clear">
			<div class="container object-non-visible" data-animation-effect="fadeIn">
				<h1 id="clients" class="title text-center">Student's Achievement</h1>
				<p class="lead text-center" style="margin-top: 30px;">Some of our academic scholars are listed below...</p>
				<div class="row">
					<table class="table-fill">
						<thead>
							<tr>
								<th class="text-left">Year</th>
								<th class="text-left">First Topper</th>
								<th class="text-left">Second Topper</th>
							</tr>
						</thead>
						<tbody style="box-shadow: 1px 1px 10px 0px #b1b1b1;">
							@php
								$toppers = App\AcademicTopper::where('year',4)->where('department',$dep->url)->orderBy('pointer', 'desc')->get();
							@endphp
							@if (count($toppers) >= 2)
								<tr>
									<td class="text-left">Final Year</td>
									<td class="text-left">{{$toppers[0]->name}}&nbsp;({{$toppers[0]->pointer}})</td>
									<td class="text-left">{{$toppers[1]->name}}&nbsp;({{$toppers[1]->pointer}})</td>
								</tr>
							@endif
							@php
								$toppers = App\AcademicTopper::where('year',3)->where('department',$dep->url)->orderBy('pointer', 'desc')->get();
							@endphp
							@if (count($toppers) >= 2)
								<tr>
									<td class="text-left">Third Year</td>
									<td class="text-left">{{$toppers[0]->name}}&nbsp;({{$toppers[0]->pointer}})</td>
									<td class="text-left">{{$toppers[1]->name}}&nbsp;({{$toppers[1]->pointer}})</td>
								</tr>
							@endif
							@php
								$toppers = App\AcademicTopper::where('year',2)->where('department',$dep->url)->orderBy('pointer', 'desc')->get();
							@endphp
							@if (count($toppers) >= 2)
								<tr>
									<td class="text-left">Second Year</td>
									<td class="text-left">{{$toppers[0]->name}}&nbsp;({{$toppers[0]->pointer}})</td>
									<td class="text-left">{{$toppers[1]->name}}&nbsp;({{$toppers[1]->pointer}})</td>
								</tr>
							@endif
						</tbody>
					</table>
				</div>
				<div class="row">
					<p class="lead text-center" style="margin-top: 3%; margin-bottom: 3%;">With academia, our students are doing best in all the areas as well...</p>
					@foreach (App\Achievement::where('type','0')->where('department',$dep->url)->get() as $achivement)
						<div class="col-xs-6 col-sm-6 col-md-6">
							<div class="media">
								<div class="col-xs-3 col-sm-3 col-md-3">
									<img src="{{$achivement->getUrl()}}" alt="">
								</div>
								<div class="media-body">
									<h3 class="media-heading">{{$achivement->name}}</h3>
									<blockquote>
										<p>{{strip_tags($achivement->description)}}</p>
									</blockquote>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>

		<div class="container">
			<h1 class="title text-center" style="margin-bottom:4%; margin-top:5%; overflow-wrap: break-word;">Departmental Activities/STTP/Workshop</h1>
			@foreach (App\Event::where('department', $dep->url)->get() as $event)
				<div class="col-xs-6 col-sm-6 col-md-6" style="margin-bottom:3%;">
					<div class="media">
						<div class="col-xs-4 col-sm-4 col-md-4">
							<img src="{{$event->getFeaturedImage()}}" alt="">
						</div>
						<div class="media-body">
							<h3 class="media-heading">{{$event->name}}</h3>
							<blockquote>
								<p class="text-ellipsis" style="margin-bottom: 0px;">{{strip_tags($event->description)}}</p>
								<a class="trigger" href="{{route('event', $event->id)}}">read more</a>
							</blockquote>
						</div>
					</div>
				</div>
			@endforeach
		</div>
		<div class="container">
			<h1 class="title text-center" style="margin-top: 5%;margin-bottom: 2%;">List of Staff:</h1>
			<div class="container">
				@foreach (App\Staff::where('department', $dep->url)->get() as $staff)
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="team-member">
							<div class="team-img">
								<img src="{{$staff->getUrl()}}" alt="team member" class="img-responsive">
							</div>
							<div class="team-hover">
								<div class="desk">
									<h4>{{$staff->displayname}}</h4>
									{{-- <p><b>Designation:</b>{{$staff->designation}}</p> --}}
									<p><b>Qualification:</b>{{$staff->qualification}}</p>
									<p><b>Experience:</b>{{$staff->experience}} Years</p>
									<p class="text-ellipsis-small"><b>Area of Interest:</b>{{$staff->interest}} Years</p>
									<a href="{{route('staff-profile', $staff->id)}}">View profile</a>
								</div>
							</div>
						</div>
						<div class="team-title">
							<h5>{{$staff->name}}</h5>
							<span>{{$staff->designation}}</span>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	@endsection
	@section('post')
	@endsection
