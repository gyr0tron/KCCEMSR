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
			<div class="col-sm-8">
				<div class="tab-content">
					<div id="aim" class="tab-pane fade in active">
						<h3>Aim</h3>
						<ol>
							<li>To create awareness about research amongst our faculty members and students.</li>
							<li>To promote collaboration between researchers for interdisciplinary research.</li>
							<li>To develop a correlation among different sectors like Industry, R&amp;D organizations, foreign universities and apex bodies.</li>
						</ol>
					</div>
					<div id="objectives" class="tab-pane fade">
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
					<div id="activities" class="tab-pane fade">
						<h3>Activities</h3>
						<ol>
							<li>Establishment and promotion of the research environment in the institute by academic and research training activities.</li>
							<li>Developing and enhancing the institute’s research infrastructural facilities.</li>
							<li>Eyeing the recent trend, to foster the idea of interdisciplinary research and projects among faculties and students.</li>
						</ol>
					</div>
					<div id="members" class="tab-pane fade">
						<h3>Members</h3>
						<table class="table table-hover">
							<tr>
								<td>Sr.No.</td>
								<td>Name of Faculty</td>
								<td>Position</td>
								<td>Designation</td>
							</tr>
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
								<td>ssistant Professor, Electronics and Telecommunication</td>
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
								<td>Ms. Prasannati Kulkarni	Member</td>
								<td>Member</td>
								<td>Assistant Professor, Electronics Engineering</td>
							</tr>
							<tr>
								<td>10</td>
								<td>Mr. Pratap Nair</td>
								<td>Member</td>
								<td>Assistant Professor, Computer Engineering</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<ul class="nav nav-tabs nav-stacked">
					<li class="active"><a data-toggle="pill" href="#aim">Aim</a></li>
					<li><a data-toggle="pill" href="#objectives">Objectives</a></li>
					<li><a data-toggle="pill" href="#activities">Activities</a></li>
					<li><a data-toggle="pill" href="#members">Members</a></li>
				</ul>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
