@extends('layouts.master')
@section('pre')
	@php
	$title = "Technovision 2017";
	$menu_item = 'academics';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="row">
				<div class="col-md-6" style="float:left">
					@php
					$car = App\Carousel::where('type', 'publications')->first();
					if(!$car) goto carouselEnd;
					$no = 0;
					@endphp
					<div id="myCarousel" class="carousel slide">
						<div class="carousel-inner">
							@foreach ($car->images as $id)
								@php
								$image = App\ImageUpload::where('id', $id)->first();
								if(!$image) continue;
								@endphp
								<div class="item {{$no==0?'active':''}}" data-slide-number="{{$no++}}">
									<img src="{{$image->getUrl()}}" width="1200">
								</div>
							@endforeach
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
					@php
					carouselEnd:
					@endphp
				</div>

				<div class="col-md-6">
					<h2 class="title"><span>name</span></h2>
					desc
				</div>
			</div>

			<div class="space" style="margin-top:50px"></div>

			{{--  Menu  --}}

			<div class="col-md-12">
				<div class="card">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#ptrn" aria-controls="home" role="tab" data-toggle="tab">Patron</a></li>
						<li role="presentation"><a href="#advcmtee" aria-controls="profile" role="tab" data-toggle="tab">Advisory committee</a></li>
						<li role="presentation"><a href="#editTeam" aria-controls="messages" role="tab" data-toggle="tab">Editorial Team</a></li>
						<li role="presentation"><a href="#gc" aria-controls="settings" role="tab" data-toggle="tab">Guidelines for Contribution</a></li>
						<li role="presentation"><a href="#cntctUs" aria-controls="profile" role="tab" data-toggle="tab">Contact Us</a></li>
						<li role="presentation"><a href="#dwnlds" aria-controls="profile" role="tab" data-toggle="tab">Downloads</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="ptrn">
							<h3><span>Chief Patron</span></h3>
							Dr. Harssh Khanna, Chair Person, Excelssior Education Society.
							<h4>Patrons</h4>
							<ul style="list-style: none; padding-left: 0px;">
								<li>Dr. Sai Kiran Khanna, Managing Director,Excelssior Education Society.</li>
								<li>Mrs. Pushpa Narang, Director, Excelssior Education Society.</li>
								<li>Er. Satish Wadhwa, Secretary, Excelssior Education Society.</li>
								<li>Dr. H.S Cheema,CEO,Excelssior Education Society.</li>
								<li>Dr. N.S.Poonawala,  Dean &amp; Director, KCCEMSR.</li>
								<li>Dr. Puja Rai,Institutional Director,KCCEMSR.</li>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="advcmtee">
							<h3><span>Advisory Committee</span></h3>
							<ul style="list-style: none; padding-left: 0px;">
								<li>Dr. Surendar Rathod, Sardar Patel Institute of Technology, Mumbai University, Maharashtra.</li>
								<li>Dr. Milind Uttam Nemade, K J Somaiya Institute of Engineering and IT, Mumbai University, Maharashtra.</li>
								<li>Prof. Ejaz Lodhi, Indira Gandhi Technical University for Women,Delhi.</li>
								<li>Dr. Nataraj Vijapur ,M S Sheshgiri College of Engineering and Technology, Belgaum,Karnataka.</li>
								<li>Dr. Soniya Goyal, Punjabi University, Patiala, Punjab</li>
								<li>Dr. Shirish Sane, K K Wagh institute of Engineering education &amp; research, Pune University Nashik, Maharashtra.</li>
								<li>Dr. Alhad Kuwadekar, University of South Wales, Cardiff, United Kingdom.</li>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="editTeam">
							<h3><span>Editorial Team</span></h3>
							<ul style="list-style: none; padding-left: 0px;">
								<li>Prof. Rajiv Iyer(HOD EXTC,KCCEMSR).</li>
								<li>Prof. Asmita Deshmukh(HOD COMPUTER,KCCEMSR).</li>
								<li>Prof. Amarja Adgaonkar(HOD IT,KCCEMSR).</li>
								<li>Prof. Poornima Mahesh (HOD ELECTRONICS,KCCEMSR).</li>
								<li>Prof. Rupinder Kaur (EXTC Department).</li>
								<li>Prof. Sana Haji Naik (Computer Department).</li>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="gc">
							<ul style="list-style: none; padding-left: 0px;">
								<li class="fa fa-download"><a class="" style="cursor:pointer;font-size: 1.1em;padding-left: 10px;" href="#">Download_1</a></li>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="cntctUs">
							<h3><span>Editor in Chief</span></h3>
							<ul style="list-style: none; padding-left: 0px;">
								<li>Dr. Hansraj Guhilot, Principal, K. C College of Engineering and Management Studies and Research, Thane.</li>
								<li>&nbsp;</li>
								<li class="fa fa-envelope"> technovision@kccemsr.edu.in</li>
								<li>Excelssior Education Society’s</li>
								<li>K. C. College of engineering &amp; Management studies &amp; Research,</li>
								<li> MithBunder Road,Kopri, Thane East-400603</li>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="dwnlds">
							<ul style="list-style: none; padding-left: 0px;">
								<li class="fa fa-download"><a class="" style="cursor:pointer;font-size: 1.1em;padding-left: 10px;" href="#">Download_1</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="space" style="margin-top:50px"></div>
		</div>
	</div>
@endsection
@section('post')
@endsection
