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
		<div class="space"></div>
		<div class="row" style="font-size:16px;">
			<div class="col-sm-6">
				<div class="media">
					<div class="media-body text-right">
						<p>Many faculty members presented technical papers in International –National Conferences and Journals.</p>
					</div>
					<div class="media-right">
						<i class="fa fa-caret-right rotate-180"></i>
					</div>
				</div>
				<div class="media">
					<div class="media-body text-right">
						<p>Many Final year students have presented technical papers in national and international conferences under the guidance of project guide.</p>
					</div>
					<div class="media-right">
						<i class="fa fa-caret-right rotate-180"></i>
					</div>
				</div>
				<div class="media">
					<div class="media-body text-right">
						<p>In TECHNOVISION’16  many group has presented technical paper. Kanojia Anil and Singh Rahul won first prize for the same.</p>
					</div>
					<div class="media-right">
						<i class="fa fa-caret-right rotate-180"></i>
					</div>
				</div>
			</div>
			<div class="space visible-xs"></div>
			<div class="col-sm-6">
				<div class="media">
					<div class="media-left">
						<i class="fa fa-caret-right"></i>
					</div>
					<div class="media-body">
						<p>All staff members had successfully completed NPTEL Soft Skill program. Prof. Shubhangi Verulkar is 1% Topper for the same course.</p>
					</div>
				</div>
				<div class="media">
					<div class="media-left">
						<i class="fa fa-caret-right"></i>
					</div>
					<div class="media-body">
						<p>Arti Jani, from BE-IT was awarded BEST- STUDENT title for 2015-16 academic year.</p>
					</div>
				</div>
				<div class="media">
					<div class="media-left">
						<i class="fa fa-caret-right"></i>
					</div>
					<div class="media-body">
						<p>Department awarded with BEST-DEPARTMENT title 2015-16 academic year.</p>
					</div>
				</div>
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
				<tr>
					<td class="text-left">Final Year</td>
					<td class="text-left">Chodankar Trusha</td>
					<td class="text-left">Dalvi Vaidehi</td>
				</tr>
				<tr>
					<td class="text-left">Third Year</td>
					<td class="text-left">Ayare Pranav</td>
					<td class="text-left">Warsi Maroof</td>
				</tr>
				<tr>
					<td class="text-left">Second Year</td>
					<td class="text-left">Tulsankar Minal</td>
					<td class="text-left">Berde Tejal</td>
				</tr>
				</tbody>
			</table>
		</div>
		<div class="row">
			<p class="lead text-center" style="margin-top: 3%; margin-bottom: 3%;">With academia, our students are doing best in all the areas as well...</p>
			<div class="row">
				<div class="col-md-4">
					<div class="media testimonial">
						<div class="media-left">
							<img src="http://via.placeholder.com/50x50" alt="">
						</div>
						<div class="media-body">
							<h3 class="media-heading">Dilip Mane (B.E.I.T)</h3>
							<blockquote>
								<p>Along with his team formed a company named <b>JB United Agro Pvt Ltd</b> and created a brand <b>OrgoPlus</b> ( which means more than Organic). <b>“India Organic society”</b>, will be a   common single platform for all farmers, suppliers, traders and consumers to interact. They are in process of marketing these products through online shops orgoplus,  amazon, snapdeal etc.</p>
							</blockquote>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="media testimonial">
						<div class="media-left">
							<img src="http://via.placeholder.com/50x50" alt="">
						</div>
						<div class="media-body">
							<h3 class="media-heading">Shruti Patil (B.E.I.T) </h3>
							<blockquote>
								<p>has been participating &amp; won many Ekankika competitions of Lalit kala Kendra …Recently she has worked for a marathi movie MORCHA which is going to release on 10th march. The first teaser of the movie is her monologue &amp; she also has done dubbing for that movie …</p>
							</blockquote>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="media testimonial">
						<div class="media-left">
							<img src="http://via.placeholder.com/50x50" alt="">
						</div>
						<div class="media-body">
							<h3 class="media-heading">Vinod Rajput (T.E.I.T) </h3>
							<blockquote>
								<p>is a Youtuber. He makes mobile gaming list at different category, have 30k+ followers with almost 1.5 million people watching his video monthly. 90 lac people have already watched his videos.</p>
							</blockquote>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="media testimonial">
						<div class="media-left">
							<img src="http://via.placeholder.com/50x50" alt="">
						</div>
						<div class="media-body">
							<h3 class="media-heading">Nisha Raju (T.E.I.T)</h3>
							<blockquote>
								<p> is a writer and has published stories and poems  in more than 20 books and magazines. Her books namely, ‘Shades of Life’, ‘The Master Stroke’, ‘Dad’s Darling Daughter’, ‘Half baked love’, ‘Memoirs of heart’, and many more have been bestsellers over time. She has won First prize in ‘Creative story writing’ and ‘Creative poetry writing’ organized by Youth Writers, Mumbai. She has also won First prize in Elocution and Quiz Competition organized by Iskcon Group and many other prizes in extempores, story and poetry writing.Also she has been awarded the “Best Rotaractor of the Year” award.</p>
							</blockquote>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="media testimonial">
						<div class="media-left">
							<img src="http://via.placeholder.com/50x50" alt="">
						</div>
						<div class="media-body">
							<h3 class="media-heading">Tanaji Mandavkar (S.E.I.T)</h3>
							<blockquote>
								<p>has been practicing and excelling in Mallar Kambam, a traditional Indian sport in which a gymnast performs feast and poses in concert with a vertical wooden pole or rope. He has done shows throughout the country and has offers lined up from countries like China and Greece. His team was finalist in INDIA’s GOT Talent reality TV show for their athletics.</p>
							</blockquote>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<h1 class="title text-center">Departmental Activities/STTP/Workshop</h1>
	<div class="row">
		<div class="col-sm-6">
			<div class="footer-content">
				<h2>Angular JS</h2>
				<p>Guest lecture on Angular JS was organized for second year students by Mr.Khozema Nullwala from NIIT,Thane. It helped student to apply the knowledge of Angular Js and build real-life based programming exercises. It helped the students to understand following contents: Agile Modelis Multiskilled Resource, Need Of Market,Green Filed Hiring Space, Github----------Commit Work At Any Time, Stacks Of Agile Method, IOT.</p>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="footer-content">
				<h2>Core Java Concepts</h2>
				<p>A workshop was organized on CORE JAVA CONCEPTS for Final year students by Mr.Sanjay Makhija from Mikado Solutions, Thane. This workshop helped the students to build real world based programs using core java concepts. Also it gave hands on experience of writing programs on variety of java concepts.</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="footer-content">
				<h2>Short Term Training Program</h2>
				<p>A workshop was organized on CORE JAVA CONCEPTS for Final year students by Mr.Sanjay Makhija from Mikado Solutions, Thane. This workshop helped the students to build real world based programs using core java concepts. Also it gave hands on experience of writing programs on variety of java concepts.</p>
			</div>
		</div>
	</div>
</div>
<div class="container">
<h1 class="title text-center" style="margin-top: 2%;margin-bottom: 2%;">List of Staff:</h1>
	<div class="container">
		@foreach (App\Staff::where('department', $dep->url)->get() as $staff)
			<div class="col-md-3 col-sm-3">
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
							<p><b>Area of Interest:</b>{{$staff->interest}} Years</p>
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
