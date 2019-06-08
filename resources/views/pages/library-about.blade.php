@extends('layouts.master')
@section('pre')
	@php
	$title = "About Library";
	$menu_item = 'library';
@endphp
@endsection
@section('content')
	<div id="about" class="section clearfix object-non-visible"  data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="section clearfix object-non-visible" style="padding-top:0px;" data-animation-effect="fadeIn">
				<div class="row">
					<h1 id="about" class="title text-center"><span>Library</span></h1>
					{{-- <div class="space"></div> --}}
					<img src="{{ url("images/lib2.jpg") }}" width="500" style="margin-bottom:3%;margin-left: auto;margin-right: auto;" class="img-responsive" alt="">
					<div class="col-md-12">
						{{-- @php
						$car = App\Carousel::where('type', 'library')->first();
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
						@endphp --}}
						<p style="text-align: center;">The institution has a library, which is located at 4th floor of the college campus and functions independently.  The library has a well-ventilated and lighted reading room, research reference section, periodical section, processing section and counter stations for circulation.</p>
					</div>
				</div>
			</div>
			<div class="section clearfix object-non-visible" style="padding-top: 0px" data-animation-effect="fadeIn">
				<div class="row">
					<h1 id="general-rules" class="title text-center"><span>Aims and Objectives</span></h1>
					<div class="col-md-12">
						<ul class="list-unstyled">
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Provide current library materials and databases that support the academic curriculum.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Provide access to information resources, regardless of location.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Collect library materials in all formats, broaden and update all collections to meet the needs of programs and support the various aspects of the institution: teaching, training, research and services.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Educate and assist college students, faculty and staff in the identification and effective use of information resources.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Continue to strengthen and update all collections to meet the needs of programs.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Preserve collections and materials, and maintain and upgrade physical and technological infrastructure to enhance the quality of services.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Provide access to library resources and servers via web pages and online resources.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Ensure that e-resources available are currently appropriate and accessible 24/7.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Work closely with users; known their needs and interests.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Enhance information literacy, especially in the student community, by developing effective plans aiming at improving student ability to:</p>
								<ul class="list-unstyled" style="padding-left: 1%;">
									<li><i class="fa fa-arrow-right pr-10 text-colored list-dept-page-uorder-img" aria-hidden="true"></i> <p class="list-text-ovrflw-fix">Access information effectively and efficiently</p></li>
									<li><i class="fa fa-arrow-right pr-10 text-colored list-dept-page-uorder-img" aria-hidden="true"></i> <p class="list-text-ovrflw-fix">Evaluate information and its sources critically</p></li>
									<li><i class="fa fa-arrow-right pr-10 text-colored list-dept-page-uorder-img" aria-hidden="true"></i> <p class="list-text-ovrflw-fix">Understand Economic, legal and social issues when using information</p></li>
									<li><i class="fa fa-arrow-right pr-10 text-colored list-dept-page-uorder-img" aria-hidden="true"></i> <p class="list-text-ovrflw-fix">Access and use information critically and legally</p></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="section clearfix object-non-visible" style="padding-top: 0px" data-animation-effect="fadeIn">
				<div class="row">
					<h1 id="general-rules" class="title text-center"><span>Collections</span></h1>
					<div class="col-md-12">
						<table class="table">
							<thead>
								<tr>
									<th>Sr. No</th>
									<th>Sections</th>
									<th>Quantity</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>UG Engineering Books</td>
									<td>18337</td>
								</tr>
								<tr>
									<td>2</td>
									<td>PG MMS Books</td>
									<td>2408</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Journals/Periodicals (Engg.+MMS)</td>
									<td>48</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Online e-books</td>
									<td>More than 1300</td>
								</tr>
								<tr>
									<td>5</td>
									<td>CD’s</td>
									<td>1116</td>
								</tr>
								<tr>
									<td>6</td>
									<td>Newspapers</td>
									<td>11</td>
								</tr>
								<tr>
									<td>7</td>
									<td>Online e-Journals</td>
									<td>More than 1500+</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="section clearfix object-non-visible" style="padding-top: 0px" data-animation-effect="fadeIn">
				<div class="row">
					<h1 id="general-rules" class="title text-center"><span>Facilities</span></h1>
					<img src="{{ url("images/lib1.jpg") }}" width="500" style="margin-bottom:3%;margin-left: auto;margin-right: auto;" class="img-responsive" alt="">
					<div class="col-md-12">
						<ul class="list-unstyled">
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">The library is automated using indigenously developed Biyani Software: Library Management System, integrated software with OPAC and bar code technology.  Library has completed the automation work of the library holdings and circulation is started with barcodes.  OPAC facility is made available at various stations and on library portal of college website for searching the books to students and faculty.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Ten computers are networked(LAN) with the server for accessing e-resources and library OPAC</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Institutional repository of our library contains college magazines, project, college seminar/workshop proceedings, research articles and books by the faculty, syllabi, question bank etc.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Reprographic service for users.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Book-Bank scheme for students.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Library has established Conductive atmosphere with provision of tables and Chairs for reading with good ventilation for the students. Library is providing OPAC (Online Public Accessing Catalogue) Facility to access the books easily.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Library works for 9 hours daily from Monday to Saturday.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Seating capacity of Library : 150</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Students are allowed to borrow up to 4 books for a period of 10 days.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">There are 10 Computer with internet facility in the library.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">The free book bank facility is available for SC/EBC/TOPPER.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">The Library has taken keen initiatives in arranging book exhibitions spreading the awareness amongst the reader community. Book exhibition comprise of new books as well as less read collection of our library collection.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Open Access Facility is available Library staff helps students for searching.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Student opts to refer the old question papers while preparing for the examination. Old question papers files are maintained.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">To enhance the usage of library resource and make the readers familiar with library facilities, Library orientation program for all students is arranged for every year.</p></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="section clearfix object-non-visible" style="padding-top: 0px" data-animation-effect="fadeIn">
				<div class="row">
					<h1 id="general-rules" class="title text-center"><span>Working Hours</span></h1>
					<div class="col-md-12">
						<table class="table">
							<thead>
								<tr>
									<th>On working days 9:00 AM - 6:00 PM</th>
									<th>During/Before Examination Days 9:00 AM - 7:00 PM</th>
									<th>During Vacation 9:30 AM - 6:00 PM</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>

			<div class="section clearfix object-non-visible" style="padding-top: 0px" data-animation-effect="fadeIn">
				<div class="row">
					<div class="col-md-6">
						<h2 id="general-rules" class="title text-center"><span>Functioning</span></h2>
						<ul class="list-unstyled">
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Research Reference, Journals & Text books Book-Bank Section.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Open Access Library System with Reading Facility.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Online / E-library Open to All (on College website: <a>https://www.kccemsr.edu.in/library</a>).</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Reading Rooms.</p></li>
						</ul>
					<img src="{{ url("images/lib4.jpg") }}" width="300" style="margin-bottom:3%;margin-left: auto;margin-right: auto;" class="img-responsive" alt="">
					</div>
					<div class="col-md-6">
						<h2 id="general-rules" class="title text-center"><span>Highlights</span></h2>
						<ul class="list-unstyled">
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Total LAN Terminals in the Library 12.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">BIYANI SOFTWARE: Library Management System Software.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Computerized Library.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">OPAC in the Library.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Circulation of Books by Barcodes.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Free Internet Section for Students (10 Nodes).</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">E-Books CD ROMS.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Bar-Coded Library Cards for Students.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Display of Useful Education Web-Sites.</p></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="section clearfix object-non-visible" style="padding-top: 0px" data-animation-effect="fadeIn">
				<div class="row">
					<h1 id="general-rules" class="title text-center"><span>E-Library</span></h1>
					<div class="col-md-12">
						<p>Online/e-library portal is established on college library website. i.e. <a>https://www.kccemsr.edu.in/</a></p>
						<p>There are scholarly literature links which includes competitive examination Guidance, Employment Zone, Syllabus & question papers.  Some important links are with their e-Resources:</p>
						<div class="col-md-6">
						<ul class="list-unstyled">
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Total e-Resources - 3,00,000+ </p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">LAN Terminals in the Central Library 10</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Biyani Software : Library Management System Software</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Complete Computerized & Bar-coded Library</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Web OPAC</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Online /E-Library with  links on college website (30+lacs e-Resources)</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Circulation of Books by Barcodes</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Free Internet section for Faculty, Students (10 Nodes)</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Use of Barcode Scanners</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Membership of:</p>
								<ul class="list-unstyled" style="padding-left: 1%;">
									<li><i class="fa fa-arrow-right pr-10 text-colored list-dept-page-uorder-img" aria-hidden="true"></i> <p class="list-text-ovrflw-fix">National Digital Library</p></li>
									<li><i class="fa fa-arrow-right pr-10 text-colored list-dept-page-uorder-img" aria-hidden="true"></i> <p class="list-text-ovrflw-fix">JGATE</p></li>
									<li><i class="fa fa-arrow-right pr-10 text-colored list-dept-page-uorder-img" aria-hidden="true"></i> <p class="list-text-ovrflw-fix">DELNET</p></li>
									<li><i class="fa fa-arrow-right pr-10 text-colored list-dept-page-uorder-img" aria-hidden="true"></i> <p class="list-text-ovrflw-fix">IET</p></li>
									<li><i class="fa fa-arrow-right pr-10 text-colored list-dept-page-uorder-img" aria-hidden="true"></i> <p class="list-text-ovrflw-fix">E-Shodhsindhu</p></li>
									<li><i class="fa fa-arrow-right pr-10 text-colored list-dept-page-uorder-img" aria-hidden="true"></i> <p class="list-text-ovrflw-fix">IIT Mumbai</p></li>
								</ul>
							</li>
						</ul>
						</div>
						<div class="col-md-6">
						<ul class="list-unstyled">
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">E-Books/ CD ROMS (1116)</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Book-Bank Circulation Based On Barcodes</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">User Awareness Programmed</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Content Pages</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">DDC Resources Arrangement</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Bar-Coded library Cards for Students</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">News Paper &amp; Clippings</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Free Internet</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Reading Room</p></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="section clearfix object-non-visible" style="padding-top: 0px" data-animation-effect="fadeIn">
				<div class="row">
					<h1 id="general-rules" class="title text-center"><span>Best Practices</span></h1>
					<div class="col-md-12">
						<ul class="list-unstyled">
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix"><strong>Library Computerization:</strong> To cope with the automated environment and cater better service to users, computerization practice is maintained regularly</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix"><strong>Open Access Library System (OALS):</strong> To achieve Optimum use of Space, Books, Time, Satisfactions and Security, college has established this innovative project. Hundreds of students are taking benefits and they are fully satisfied.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix"><strong>Service without days/class restriction:</strong> To get maximum access and happenings more reading library have withdrawn the restriction of time table of days/class.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix"><strong>Best reader award:</strong> To inspire and inculcate the reading habits in the mind of students this award is given on Prize Distribution Day yearly.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix"><strong>Book-Bank Scheme:</strong> For maximum study and saving time at the beginning of each semester a set of books is issued to needy students</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix"><strong>Students feedback /suggestion:</strong> To cope up with needs of users, there is a provision of suggestion box,  library attends these procedures and makes improvements in functioning</p></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="section clearfix object-non-visible" style="padding-top: 0px" data-animation-effect="fadeIn">
				<div class="row">
					<h1 id="general-rules" class="title text-center"><span>Rules</span></h1>
					<img src="{{ url("images/lib3.jpg") }}" width="500" style="margin-bottom:3%;margin-left: auto;margin-right: auto;" class="img-responsive" alt="">
					<div class="col-md-12">
						<p style="text-align: center;">To establish complete silence and utmost use of library holding, the library has formed some rules & regulations.</p>
						<ul class="list-unstyled">
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Working Hours – 9.00 am to 7.00 pm. Lunch Break from 1.30 pm to 2.00pm.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">After maximum use of <strong>Open Access Library System</strong>, the Library expects enhancement in your quality and merits in your examinations.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Present your ID and Library card at counter and make an entry in the visit register for record.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix"><strong>Mobile phones are not allowed</strong>. Switch off your mobile phones for keeping compete silence.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Leave your bags, books, files, notebooks at the counter and only blank papers for taking/writing notes are allowed to bring with you.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">There are competitive examinations, general magazines and newspapers reading.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">You are allowed to use any section for your study.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Keep silence. Do not speak or make noise</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Write your feedback, suggestion and Brain Activity in the suggestion box.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Reference books are restricted for issuing. Use these books in the library only.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">If you have any query, or demand of information/book, you can meet the Librarian.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">There is provision of book recommendation forms for students and staff.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">If you disobey the rules of Library, you will not be allowed to use it.</p></li>
						</ul>
						<p style="text-align: center;">Students, faculty & staff are taking benefits of this innovative & ideal facility with increasing number day by day.</p>
					</div>
				</div>
			</div>

			<div class="section clearfix object-non-visible" style="padding-top: 0px" data-animation-effect="fadeIn">
				<div class="row">
					<h1 id="digital-library" class="title text-center"><span>Important Links</span></h1>
					<div class="col-md-12">
						<div class="col-md-2 col-md-offset-1">
								<a href="https://ndl.iitkgp.ac.in/" target="_blank"><img src="{{ url("images/NDLI.png") }}" style="margin: 0 auto;" alt="" height="100" width ="100" class="img-responsive"></a>
						</div>
						<div class="col-md-2">
								<a href="http://delnet.in/" target="_blank"><img src="{{ url("images/delnet.jpg") }}" style="margin: 0 auto;" alt="" height="" width ="" class="img-responsive"></a>
						</div>
						<div class="col-md-2">
								<a href="https://digital-library.theiet.org/" target="_blank"><img src="{{ url("images/iet.gif") }}" style="margin: 0 auto;padding-top: 5%;padding-bottom: 5%;" alt="" class="img-responsive"></a>
						</div>
						<div class="col-md-2">
								<a href="https://www.inflibnet.ac.in/ess/" target="_blank"><img src="{{ url("images/eshodh.png") }}" style="margin: 0 auto;" alt="" height="" width ="" class="img-responsive"></a>
						</div>
						<div class="col-md-2">
								<a href="https://ndl.iitkgp.ac.in/" target="_blank"><img src="{{ url("images/IITB.png") }}" style="margin: 0 auto;" alt="" height="100" width ="100" class="img-responsive"></a>
						</div>
					</div>
				</div>
			</div>

			<div class="section clearfix object-non-visible" style="padding-top: 0px" data-animation-effect="fadeIn">
				<div class="row">
					<h1 id="general-rules" class="title text-center"><span>Contact Person</span></h1>
					<div class="col-md-12">
						<p style="text-align: center;">Librarian</p>
						<a href="mailto:library@kccemsr.edu.in"><p style="text-align: center;">library@kccemsr.edu.in</p></a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
