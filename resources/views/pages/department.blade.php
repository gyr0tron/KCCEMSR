@extends('layouts.master')
@section('pre')
	@php
	$title = $dep->name;
	$menu_item = 'academics';
@endphp
@endsection
@section('content')

	<!-- Description start -->
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container">
			<div class="row" id="dept-row-main">
				<div class="col-md-12">
					<h1 id="about" class="title text-center"><span>{{$dep->name}}</span></h1>
					<div class="row">
						<div class="col-md-12">
							<img src="{{$dep->getUrl()}}" style="margin: 0 auto;width: 80%;" alt="">
						</div>
						<div class="col-md-12" style="margin-top: 3%;">
							<div class="lead text-center" style="text-align: justify;text-justify: auto;">{!!$dep->description!!}</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Description end -->
	<div class="container">
		<div class="col-md-12">
			<div class="card">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#visMis" aria-controls="profile" role="tab" data-toggle="tab">Vision and Mission</a></li>
					<li role="presentation"><a href="#hod" aria-controls="settings" role="tab" data-toggle="tab">HOD's Message</a></li>
					<li role="presentation"><a href="#dptAct" aria-controls="home" role="tab" data-toggle="tab">Departmental Activities</a></li>
					<li role="presentation"><a href="#stuAch" aria-controls="profile" role="tab" data-toggle="tab">Student's Achievement</a></li>
					<li role="presentation"><a href="#alumni" aria-controls="messages" role="tab" data-toggle="tab">Successful Alumni</a></li>
					<li role="presentation"><a href="#staff" aria-controls="profile" role="tab" data-toggle="tab">List of Staff</a></li>
					<li role="presentation"><a href="#labs" aria-controls="profile" role="tab" data-toggle="tab">Laboratories</a></li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="visMis">
						<div class="row">
							<div class="col-md-6">
								<h2 style="margin-top: 0px; margin-bottom: 5px;">Vision</h2>
								<p style="text-align: justify;">{{$dep->vision}}</p>
								<div class="space"></div>
								<h2 style="margin-top: 0px; margin-bottom: 5px;">Mission</h2>
								<ul class="list-unstyled">
									@php
									$data = explode(".", $dep->mission);
									@endphp
									@foreach ($data as $d)
										@if (strlen($d) > 2)
											<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix" style="text-align: justify;">{{$d}}.</p></li>
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
							</ul>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="hod">
					@php
					$hod = App\Staff::where('id',$dep->hod)->first();
					@endphp
					@if ($hod)
						<div class="row">
							<h2 class="text-center" style="margin-top: 0px; margin-bottom: 2%;">HOD'S Message</h2>
							<div class="col-md-4">
								<img src="{{$hod->getUrl()}}" width="300">
								<div class="space"></div>
							</div>
							<div class="col-md-8">
								<p style="text-align: justify;white-space: pre-wrap; margin-bottom: 15px;">{{strip_tags($dep->hod_message)}}</p>
							</div>
						</div>
					@endif
				</div>
				<div role="tabpanel" class="tab-pane" id="dptAct">
					<div class="row">
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
				</div>
				<div role="tabpanel" class="tab-pane" id="stuAch">
					<h1 id="students-achievement" class="title text-center">Student's Achievement</h1>
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
												<h5 style="margin-bottom: 0px;">{{$top1->academic_year}}</h5>
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
				<div role="tabpanel" class="tab-pane" id="alumni">
					<div class="row">
						<h1 id="students-achievement" class="title text-center">Successful Alumni</h1>
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
				<div role="tabpanel" class="tab-pane" id="staff">
					<h1 class="title text-center" style="margin-top: 5%;margin-bottom: 0px;">List of Staff:</h1>
					<p style="text-align: center;">(Click on the picture to read more.)</p>
					<div class="container">
						@foreach (App\Staff::where('department', $dep->url)->orderBy('sort','ASC')->get() as $staff)
							<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="team-member">
									<div class="team-img" style="height: 320px;">
										<img src="{{url("images/eclipse.gif")}}" data-echo="{{$staff->getUrl()}}" alt="team member" class="img-responsive" style="height: auto;width: 255px;">
									</div>
									<div class="team-hover" style="width: 255px;">
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
				<div role="tabpanel" class="tab-pane" id="labs">
					<div class="row">
						<h1 class="title text-center">Laboratories</h1>
						@php
						$infrastructure = App\Infrastructure::where('department', $dep->url)->get();
						$total = count($infrastructure);
						@endphp
						@for ($i=0; $i < $total; $i++)
							<div class="col-sm-12">
								<div class="space" style="margin-top:50px"></div>
								<h2 class="title text-center"><span>{{$infrastructure[$i]->name}}</span></h2>
								<p class="text-center">{{$infrastructure[$i]->description}}</p>
								<div class="row">
									<div class="col-sm-12">
										<div id="myCarousel{{$i}}" data-carousel-no="{{ $i }}"class="carousel slide">
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
									<div class="col-sm-12" id="slider-thumbs">
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
						@endfor
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Staff List End -->
@endsection
@section('post')
@endsection
