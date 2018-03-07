@extends('layouts.master')
@section('pre')
	@php
	$title = $dep->name;
	$menu_item = 'academics';
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
					<div class="space"></div>
					<div class="row">
						<div class="col-md-12">
							<img src="{{$dep->getUrl()}}" style="margin: 0 auto;height: 500px;width: 80%;" alt="">
							<div class="space"></div>
						</div>
						<div class="col-md-12">
							<div class="lead text-center" style="text-align: justify;text-justify: auto;">{!!$dep->description!!}</div>
						</div>
					</div>
					<div class="space"></div>
					@php
					$hod = App\Staff::where('id',$dep->hod)->first();
					@endphp
					@if ($hod)
						<div class="row">
							<div class="col-md-6">
								<h2 style="margin-top: 0px; margin-bottom: 5px;">HOD'S Message</h2>
								<p style="white-space: pre-wrap; margin-bottom: 15px;">{{strip_tags($dep->hod_message)}}</p>
								<div class="space"></div>
							</div>
							<div class="col-md-6">
								<img src="{{$hod->getUrl()}}" alt="">
								<div class="space"></div>
							</div>
						</div>
					@endif

					<div class="row">
						<div class="col-md-6">
							<h2 style="margin-top: 0px; margin-bottom: 5px;">Vision</h2>
							<p margin-bottom: 15px;>{{$dep->vision}}</p>
							<div class="space"></div>
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
							<div class="space"></div>
						</div>
						<div class="col-md-6">
							<h2 style="margin-top: 0px; margin-bottom: 5px;">Program Objectives</h2>
							<ul class="list-unstyled">
								@php
								$data = explode(".", $dep->objectives);
								@endphp
								@foreach ($data as $d)
									@if (strlen($d) > 2)
										@php
										$head = explode(":", $d, 2)[0];
										$d = str_replace($head, "", $d);
										@endphp
										<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix"><strong>{{$head}}</strong>{{$d}}</p></li>
									@endif
								@endforeach
							</ul>
							<!-- <h2 style="margin-top: 0px; margin-bottom: 5px;">Program Outcomes</h2>
							<p>Engineering Graduates will be able to</p>
							<ul class="list-unstyled">
							@php
							$data = explode(".", $dep->outcome);
							@endphp
							@foreach ($data as $d)
							@if (strlen($d) > 2)
							@php
							$head = explode(":", $d, 2)[0];
							$d = str_replace($head, "", $d);
							@endphp
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix"><strong>{{$head}}</strong>{{$d}}</p></li>
						@endif
					@endforeach
				</ul> -->
			</div>
		</div>
	</div>
</div>
</div>
</div>
{{-- <div class="section translucent-bg bg-image-1 blue">
<div class="container object-non-visible" data-animation-effect="fadeIn">
<h1 id="services"  class="text-center title">Departmental Achievement</h1>
<div class="space"></div>
@foreach (App\Achievement::where('type','1')->where('department',$dep->url)->get() as $achivement)
<div class="col-xs-12 col-sm-12 col-md-6">
<div class="media">
<div class="col-xs-4 col-sm-4 col-md-4">
<img src="{{$achivement->getUrl()}}" alt="">
</div>
<div class="media-body">
<h3 class="media-heading">{{$achivement->name}}</h3>
<blockquote>
<p style="height: 4.5em;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;-o-text-overflow: ellipsis;text-overflow: ellipsis;">{{strip_tags($achivement->description)}}</p>
<a class="" style="cursor:pointer;" href="{{route('achievement',$achivement->id)}}">Read more</a>
</blockquote>
</div>
</div>
</div>
@endforeach

</div>
</div> --}}
<!-- section end -->
<!-- section start -->
<!-- ================ -->
<div class="section translucent-bg blue" style="background-color: rgba(0, 154, 245, 0.83);">
	<div class="container object-non-visible" data-animation-effect="fadeIn">
		<h1 id="clients" class="title text-center">Student's Achievement</h1>
		<p class="lead text-center" style="margin-top: 30px;">Some of our academic scholars are listed below...</p>
		@php
		$arrayYears = ["", "FE", "SE", "TE", "BE"];
		$start = 2;
		$end = 4;
		if($dep->isPrimary()) {
			$start = 1;
			$end = 1;
		}
		@endphp
		@for ($i=$start; $i <= $end; $i++)
			<div class="row">
				<h2 class="media-heading text-center" style="margin-bottom: 25px;">{{$arrayYears[$i]}}</h2>
				@php
				$top1 = App\AcademicTopper::where('department',$dep->url)->where('year', $i)->orderBy('pointer','DESC')->first();
				$top2 = App\AcademicTopper::where('department',$dep->url)->where('year', $i)->orderBy('pointer','DESC')->skip(1)->first();
				@endphp
				@if ($top1)
					<div class="col-xs-12 col-sm-6 col-md-6" style="margin-bottom:3%;">
						<div class="media">
							<div class="col-xs-5 col-sm-4 col-md-4" >
								<img src="{{$top1->getUrl()}}" style="height: 150px;" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">First Topper</h3>
								<blockquote>
									<h4 style="margin-bottom: 0px;">{{$top1->name}}</h4>
								</blockquote>
							</div>
						</div>
					</div>
				@endif
				@if ($top2)
					<div class="col-xs-12 col-sm-6 col-md-6" style="margin-bottom:3%;">
						<div class="media">
							<div class="col-xs-5 col-sm-4 col-md-4" >
								<img src="{{$top2->getUrl()}}" style="height: 150px;" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Second Topper</h3>
								<blockquote>
									<h4 style="margin-bottom: 0px;">{{ $top2->name}}</h4>
								</blockquote>
							</div>
						</div>
					</div>
				@endif
			</div>
		@endfor
	</div>
</div>
<div class="container">
	<div class="row">
		<p class="lead text-center" style="margin-top: 3%; margin-bottom: 3%;">With academia, our students are doing best in all the areas as well...</p>
		@foreach (App\Achievement::where('type','0')->where('department',$dep->url)->get() as $achivement)
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="media">
					<div class="col-xs-4 col-sm-4 col-md-4" style="padding-bottom: 15px;">
						<img src="{{$achivement->getUrl()}}" alt="">
					</div>
					<div class="media-body">
						<h3 class="media-heading">{{$achivement->name}}</h3>
						<blockquote>
							<p style="height: 4.5em;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;-o-text-overflow: ellipsis;text-overflow: ellipsis;">{{strip_tags($achivement->description)}}</p>
							<a class="" style="cursor:pointer;" href="{{route('achievement',$achivement->id)}}">Read more</a>
						</blockquote>
					</div>
				</div>
			</div>
		@endforeach
	</div>
</div>

<div class="container">
	<h1 class="title text-center" style="margin-bottom:4%; margin-top:5%; overflow-wrap: break-word;">Departmental Achievements/Activities/STTP/Workshops</h1>
	@foreach (App\Event::where('department', $dep->url)->orderBy('date','desc')->get() as $event)
		<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="media">
				<div class="col-xs-4 col-sm-4 col-md-4" style="padding-bottom: 15px;">
					<img src="{{$event->getFeaturedImage()}}" alt="">
				</div>
				<div class="media-body">
					<h3 class="media-heading">{{$event->name}}</h3>
					<blockquote>
						<p style="height: 4.5em;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;-o-text-overflow: ellipsis;text-overflow: ellipsis;">{{strip_tags($event->description)}}</p>
						<a class="" style="cursor:pointer;" href="{{route('event', $event->url)}}">read more</a>
					</blockquote>
				</div>
			</div>
		</div>
	@endforeach
</div>
<div class="container">
	<h1 class="title text-center" style="margin-top: 5%;margin-bottom: 0px;">List of Staff:</h1>
	<p style="text-align: center;">(Click on the picture to read more.)</p>
	<div class="container">
		@foreach (App\Staff::where('department', $dep->url)->orderBy('sort','ASC')->get() as $staff)
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="team-member">
					<div class="team-img" style="height: 300px;">
						<img src="{{$staff->getUrl()}}" alt="team member" class="img-responsive">
					</div>
					<div class="team-hover">
						<div class="desk">
							<h4>{{$staff->displayname}}</h4>
							{{-- <p><b>Designation:</b>{{$staff->designation}}</p> --}}
							{{--  <p><b>Qualification:</b>{{$staff->qualification}}</p>
							<p><b>Experience:</b>{{$staff->experience}} Years</p>
							<p class="text-ellipsis-small"><b>Area of Interest:</b>{{$staff->interest}} Years</p>  --}}
							<a class="btn btn-sm btn-default" href="{{route('staff-profile', $staff->id)}}">View profile</a>
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
