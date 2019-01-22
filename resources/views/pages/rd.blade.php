@extends('layouts.master')
@section('pre')
	@php
	$title = "Research & Development";
	$menu_item = 'academics';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="col-sm-4 col-md-4">
				<ul class="nav nav-tabs nav-stacked">
					<li class="{{$action=='aim'?'active':''}}"><a href="{{route('rd', 'aim')}}">Aim</a></li>
					<li class="{{$action=='objectives'?'active':''}}"><a href="{{route('rd', 'objectives')}}">Objectives</a></li>
					<li class="{{$action=='activities'?'active':''}}"><a href="{{route('rd', 'activities')}}">Activities</a></li>
					<li class="{{$action=='members'?'active':''}}"><a href="{{route('rd', 'members')}}">Members</a></li>
					<li class="{{$action=='coe'?'active':''}}"><a href="{{route('rd', 'coe')}}">Code Of Ethics</a></li>
					<li class="{{$action=='events'?'active':''}}"><a href="{{route('rd', 'events')}}">Events</a></li>
				</ul>
			</div>
			<div class="col-sm-8 col-md-8">
				<div class="tab-content">
					<div id="aim" class="{{$action=='aim'?'tab-pane fade in active':'tab-pane fade'}}">
						<h3>Aim</h3>
						<ol>
							<li>To create awareness about research amongst our faculty members and students.</li>
							<li>To promote collaboration between researchers for interdisciplinary research.</li>
							<li>To develop a correlation among different sectors like Industry, R&amp;D organizations, foreign universities and apex bodies.</li>
						</ol>
					</div>
					<div id="objectives" class="{{$action=='objectives'?'tab-pane fade in active':'tab-pane fade'}}">
						<h3>Objectives</h3>
						<p>
							Research and development is an important avenue of an organization. This platform will help in understanding the role and importance of research among faculties and students.
						</p>
						<ol>
							<li>To indoctrinate creative thinking and problem solving skills in research.</li>
							<li>To develop skills for effective writing of Research Paper.</li>
							<li>To organize national and international conferences.</li>
							<li>To organize workshops on research methodology and patents.</li>
							<li>To arrange symposia and guest lectures to enhance awareness in various research area.</li>
							<li>To encourage every faculty member for research proposal writing and to participate in R&amp;D activities leading to Doctoral degree.</li>
							<li>To facilitate collaboration and interaction of researchers working on disciplinary and interdisciplinary research.</li>
						</ol>
					</div>
					<div id="activities" class="{{$action=='activities'?'tab-pane fade in active':'tab-pane fade'}}">
						<h3>Activities</h3>
						<ol>
							<li>Establishment and promotion of the research environment in the institute by academic and research training activities.</li>
							<li>Developing and enhancing the institute’s research infrastructural facilities.</li>
							<li>Eyeing the recent trend, to foster the idea of interdisciplinary research and projects among faculties and students.</li>
						</ol>
					</div>
					<div id="members" class=" table-responsive {{$action=='members'?'tab-pane fade in active':'tab-pane fade'}}">
						<h3 style="padding: 3%;margin: 0px;">Members</h3>
						<table class="table table-hover">
							<thead>
									<th>Sr.No.</th>
									<th>Name of Faculty</th>
									<th>Position</th>
									<th>Designation</th>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Dr. Hansraj Guhilot</td>
									<td>Chairman</td>
									<td>Principal, K.C College of Engineering and Management Studies and Research, Thane.</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Dr. Alhad Kuwdekar</td>
									<td>External Advisory</td>
									<td>CTO, My Life Guard Ltd, UK</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Dr. N.S Poonawala</td>
									<td>Internal Advisory</td>
									<td>Dean (IIPP) and Director, K.C College of Engineering and Management Studies and Research, Thane.</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Dr. Shelley Oberoi</td>
									<td>Coordinator</td>
									<td>HOD, Humanities and Applied Sciences</td>
								</tr>
								<tr>
									<td>5</td>
									<td>Dr. Arundhati Chakrabarti</td>
									<td>Member</td>
									<td>Assistant Professor, Humanities and Applied Sciences</td>
								</tr>
								<tr>
									<td>6</td>
									<td>Ms. Aarti Bakshi</td>
									<td>Member</td>
									<td>Assistant Professor, Electronics and Telecommunication</td>
								</tr>
								<tr>
									<td>7</td>
									<td>Mr. Rajiv Iyer</td>
									<td>Member	</td>
									<td>Assistant Professor, Electronics and Telecommunication</td>
								</tr>
								<tr>
									<td>8</td>
									<td>Mr. Yogesh Karunakar</td>
									<td>Member</td>
									<td>Assistant Professor, Electronics Engineering</td>
								</tr>
								<tr>
									<td>9</td>
									<td>Ms. Prasannati Kulkarni</td>
									<td>Member</td>
									<td>Assistant Professor, Electronics Engineering</td>
								</tr>
								<tr>
									<td>10</td>
									<td>Mr. Pratap Nair</td>
									<td>Member</td>
									<td>Assistant Professor, Computer Engineering</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div id="coe" class="{{$action=='coe'?'tab-pane fade in active':'tab-pane fade'}}">
						<h3>CODE OF ETHICS FOR AUTHORS</h3>
						<h5 style="text-transform: capitalize;font-weight: 200;">Ethical guidelines for authors (Staff /Student):</h5>
						<ul>
							<li>Researcher/Author must properly cite any relevant studies of your work in your manuscript.</li>
							<li>Author must cite the source and should quote the words into quotation marks unless it is paraphrased and Author should also quote text which is from another publication even if it’s your own.</li>
							<li>Author should not submit his/hers manuscript to more than one journal at a time.</li>
							<li>While awaiting the decision of the first journal, Author should not submit his/her’s manuscript to a new journal.</li>
							<li>Author should find any methodology or apparatus used which are having any threat inherent in their use.</li>
							<li>Author must declare any personal or other relationships which might cause a competing interest related to the work described in the manuscript.</li>
							<li>To become eligible as an Author an individual must contribute significantly to study design and conception, data collection, data analysis and data interpretation.</li>
							<li>He/she should agree to be listed as an author on the manuscript and also approve the version submitted and the final version to be published in the journal.</li>
						</ul>
						<h5 style="text-transform: capitalize;font-weight: 200;">Ethics topics to consider when publishing:</h5>
						<ol>
							<li>Authorship: He/She will be given authorship of the paper who have made important contribution to the conception, design, execution or interpretation of the study.</li>
							<li>Plagiarism: The author should assure that content of the manuscript written is completely original and if any of the contents are taken from the used work and/or words of others it must be cited or quoted appropriately.</li>
							<li>Data access and retention: Author should be ready with raw data in connection with the given paper whenever asked to provide for editorial review and data should be provided with public access.</li>
							<li>Multiple, repetitious or simultaneous publication: Author should not publish general manuscripts explaining actual & the same research in more than one journals or publications.</li>
							<li>Acknowledgement: Sources should be acknowledge properly.</li>
							<li>Disclosure and conflicts of interest: Manuscript must include disclosure of all the relationships which can be viewed as the a potential conflict of interest.</li>
							<li>Error correction in published works: Author will be obliged to notify the journal editor or publisher for correction of the manuscript in case of errors or inaccuracy detection.</li>
							<li>Reporting standards: Author should prepare proper reports of original research with accurate account of the work performed as well as important objectives.</li>
							<li>Use of patient images or case details: Author using case studies of patients or volunteers should get ethics committee approval and informed consent which would be documented in the manuscript.</li>
						</ol>
					</div>
					<div id="events" class="{{$action=='events'?'tab-pane fade in active':'tab-pane fade'}}">
						@php
						$car = App\Carousel::where('type', 'rd')->first();
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
				</div>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
