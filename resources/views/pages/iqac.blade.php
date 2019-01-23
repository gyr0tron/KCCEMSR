@extends('layouts.master')
@section('pre')
	@php
	$title = "IQAC";
	$menu_item = 'iqac';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="col-sm-4 col-md-4">
				<ul class="nav nav-tabs nav-stacked">
					<li class="{{$action=='introduction'?'active':''}}"><a href="{{route('iqac', 'introduction')}}">Introduction</a></li>
					<li class="{{$action=='aim'?'active':''}}"><a href="{{route('iqac', 'aim')}}">Aim</a></li>
					<li class="{{$action=='members'?'active':''}}"><a href="{{route('iqac', 'members')}}">Members</a></li>
					<li class="{{$action=='procedure'?'active':''}}"><a href="{{route('iqac', 'procedure')}}">Procedure</a></li>
					<li class="{{$action=='functions_strategy'?'active':''}}"><a href="{{route('iqac', 'functions_strategy')}}">Functions and Strategy</a></li>
					<li class="{{$action=='contact_us'?'active':''}}"><a href="{{route('iqac', 'contact_us')}}">Contact Us</a></li>
					<li class="{{$action=='meetings'?'active':''}}"><a href="{{route('iqac', 'meetings')}}">Meetings</a></li>
				</ul>
			</div>
			<div class="col-sm-8 col-md-8">
				<div class="tab-content">
					<div id="introduction" class="{{$action=='introduction'?'tab-pane fade in active':'tab-pane fade in'}}">
						<h3>Introduction</h3>
						<p>
							National Assessment and Accreditation Council (NAAC) is an autonomous body established under UGC ACT in September 1994. NAAC was entrusted with the responsibility of evaluating performances, assessing and accreditating universities, autonomous and affiliated colleges in the country. NAAC is paving the road for the establishment of “Quality Culture” in the universities and colleges along with enhancing awareness among all stakeholders for the need of Institutional Quality Assurance.
						</p>
						<p>
							To suffice the above NAAC proposes that every institute should establish IQAC as a measure for it quality enrichment.
						</p>
						<p>
							IQAC should function to channelize the effort of the college for academic excellence. It should not be just another record keeping body in the hierarchy of the institution. It will work as a facilitating and planning body of the college becoming a driving force for leading the quality culture of college by removing deficiencies.
						</p>
					</div>
					<div id="aim" class="{{$action=='aim'?'tab-pane fade in active':'tab-pane fade in'}}">
						<h3>Aim</h3>
						<ol>
							<li>To work in harmony and sync with all internal and external agencies for development of a system which assists in advancement for the academic and administrative performance of KCCEMSR.</li>
							<li>To stimulate and provide a path towards quality enhancement of KCCEMSR.</li>
						</ol>
					</div>
					<div id="members" class="{{$action=='members'?'tab-pane fade in active':'tab-pane fade in'}}">
						<h3>Members</h3>
						<table class="table">
							<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Designation</th>
							</tr>
							</thead>
							<tr>
								<td>1</td>
								<td>Dr. V. N. Pawar</td>
								<td>Chairman (Principal) </td>
							</tr>
							<tr>
								<td>2</td>
								<td>Dr. Puja Rai</td>
								<td>Management Representative (COO)</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Dr. Arundhati Chakrabarti</td>
								<td>IQAC Coordinator (Faculty)</td>
							</tr>
							<tr>
								<td>4</td>
								<td>A.P. Rajiv Iyer</td>
								<td>Member (HOD)</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Dr. Shelley Oberoi</td>
								<td>Member (HOD)</td>
							</tr>
							<tr>
								<td>6</td>
								<td>A.P. Amarja Adgaonkar</td>
								<td>Member (HOD)</td>
							</tr>
							<tr>
								<td>7</td>
								<td>A.P. Shirkesh Poojari</td>
								<td>Member (HOD)</td>
							</tr>
							<tr>
								<td>8</td>
								<td>A.P. Vaishali Bhalerao</td>
								<td>Member (Faculty)</td>
							</tr>
							<tr>
								<td>9</td>
								<td>A.P. Ashwini Jayawant</td>
								<td>Member (Faculty)</td>
							</tr>
							<tr>
								<td>10</td>
								<td>A.P. Varsha Wangikar</td>
								<td>Member (Faculty)</td>
							</tr>
							<tr>
								<td>11</td>
								<td>A.P. Sonal Balpande</td>
								<td>Member (Faculty)</td>
							</tr>
							<tr>
								<td>12</td>
								<td>Mr. Mahesh Dalvi</td>
								<td>Member (Non –teaching)</td>
							</tr>
							<tr>
								<td>13</td>
								<td>Ms. Nayna Khandekar</td>
								<td>Member (Non –teaching)</td>
							</tr>
							<tr>
								<td>14</td>
								<td>Mr. Anil Mourya</td>
								<td>Member (Non –teaching)</td>
							</tr>
							<tr>
								<td>15</td>
								<td>Mr. Amanjeet Malhotra</td>
								<td>Member (Student Representative)</td>
							</tr>
							<tr>
								<td>16</td>
								<td>Mr. Harshad Bhoir</td>
								<td>Member (Alumni)</td>
							</tr>
							<tr>
								<td>17</td>
								<td>Dr. Nitin Kale</td>
								<td>Member (External)</td>
							</tr>
							<tr>
								<td>18</td>
								<td>Mrs. Rashmi Joshi</td>
								<td>Member (NGO)</td>
							</tr>
						</table>
					</div>
					<div id="procedure" class="{{$action=='procedure'?'tab-pane fade in active':'tab-pane fade in'}}">
						<h3>Procedure</h3>
						<ol>
							<li>Every member of the committee is appointed for a period of 2 years.</li>
							<li>IQAC meeting will be held every quarter of an academic year to achieve and monitor the progress towards its goal.</li>
							<li>The quorum for meeting shall be two third of the total number of members.</li>
							<li>The agenda, minutes and action taken reports are to be documented with signatures and maintained digitally.
							</li>
							<li>A separate section is needed to be hosted on college website for IQAC, where the strategies, functions, members and contact details will be uploaded.</li>
							<li>In addition to the above, documents related to NAAC, SSR and AQAR reports are also to be uploaded.
							</li>
							<li>Preparation of AQAR of KCCEMSR as per the guidelines laid down by NAAC.</li>
							<li>The AQAR shall be approved by the competent authority.</li>
							<li>IQAC will act as a catalyst for NAAC peer team and other accreditation bodies.</li>
						</ol>
					</div>
					<div id="functions_strategy" class="{{$action=='functions_strategy'?'tab-pane fade in active':'tab-pane fade in'}}">
						<h3>Functions and Strategy</h3>
						<ol>
							<li>Creating a learner centric environment favorable for quality education.</li>
							<li>Connect with potential industrial partners by collaboration or by Memorandum of Understanding who can effectively contribute to offer internship or employment to students. </li>
							<li>Development of an apt feedback collection and analysis methodology for maintaining and upgrading the quality culture of college.</li>
							<li>Synergize modern methods of teaching and learning to cater to student diversity.</li>
							<li>Overall development of student by engaging in participatory teaching learning process.</li>
							<li>Cultivate an analytical mechanism for attainment of program outcomes of students and reform steps for accomplishment of goal.</li>
							<li>Research promotion by development of overall policy for research activities and sensitization, promotion and support for publications and IPR related activities.</li>
							<li>Documentation of various programmes or activities for quality improvement through digital mode.</li>
							<li>Alumni engagement for quality enhancement.</li>
							<li>Empowerment of teaching and administrative staff.</li>
							<li>Steps for quality enhancement by dissemination of good practices and adoption.</li>
							<li>IQAC will work as an interface for other accreditation agencies.</li>
							<li> Preparing Annual Quality Assurance Report (AQAR) as per NAAC guidelines and its submission.</li>
						</ol>
					</div>
					<div id="contact_us" class="{{$action=='contact_us'?'tab-pane fade in active':'tab-pane fade in'}}">
						<h3>Contact Us</h3>
						<p>Phone No: 022-2536088</p>
						<p>Email id: iqac@kccemsr.edu.in</p>
					</div>
					<div id="meetings" class="{{$action=='meetings'?'tab-pane fade in active':'tab-pane fade in'}}">
						<h3>Meetings</h3>
						<ul>
							@for ($i=1; $i < 10; $i++)
								<li><a target="_blank" href="{{route('iqac-meetings',$i)}}">Meeting {{$i}}</a></li>
							@endfor
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
