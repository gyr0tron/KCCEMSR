<header class="header fixed clearfix navbar navbar-fixed-top" id="navmobile" {{isset($nav_trans)?"data-navtransparent":""}}>
	<div class="container" id="head-container">
		<div class="row">
			<div class="icon-menu">
					<i class="fa fa-bars fa-lg" aria-hidden="true" style="color: #fff;"></i>
      </div>
			<div class="menu">

				<!-- Menu icon -->
				<div class="icon-close">
					<img src="/images/close.png">
				</div>

				<!-- Menu -->
				<!--NAV DATA START-->
				<ul class="accordion-menu">
					<li>
						<div class="dropdownlink">
							<a href="/">Home</a>
						</div>
					</li>
					<li class="dropper id0" data-id="0">
						<div class="dropdownlink">
							<a href="#">Academics<i class="plus fa fa-chevron-down" aria-hidden="true"></i></a>
						</div>
						<ul class="submenuItems">
							<li><a href="{{route('curriculum-plan')}}">Curriculum Plan</a></li>
							<li><a href="{{route('department-list')}}">Departments</a></li>
							<li><a href="http://www.learningatkc.com/moodle/login/index.php">KC-Moodle</a></li>
							<li><a href="{{route('publications')}}">Publications / News Letter</a></li>
						</ul>
					</li>

					<li class="dropper">
						<div class="dropdownlink">
							<a href="#">Library<i class="plus fa fa-chevron-down" aria-hidden="true"></i></a>
						</div>
						<ul class="submenuItems">
							<li><a href="#">Question Papers</a></li>
							<li><a href="#">E-Books &amp; Journals</a></li>
							<li><a href="#">Syllabus</a></li>
							<li><a href="#">Timetable</a></li>
						</ul>
					</li>

					<li class="dropper">
						<div class="dropdownlink">
							<a href="#">Admissions<i class="plus fa fa-chevron-down" aria-hidden="true"></i></a>
						</div>
						<ul class="submenuItems">
							<li><a href="{{route('admissions', 'admission-criteria')}}">Admission Criteria</a></li>
							<li><a href="{{route('admissions', 'fees-notices')}}">Fees Notices</a></li>
							<li><a href="{{route('admissions', 'institute-prospectus')}}">Institute Prospectus</a></li>
							<li><a href="{{route('admissions', 'dte-admission-information-brochure')}}">DTE Admission Information Brochure</a></li>
							<li><a href="{{route('admissions', 'total-intake')}}">Total Intake</a></li>
							<li><a href="{{route('admissions', 'cap-rount-allottment')}}">Cap Round Allottment</a></li>
							<li><a href="{{route('admissions', 'direct-second-year')}}">Direct Second Year</a></li>
							<li><a href="{{route('admissions', 'anti-ragging-affidavit')}}">Anti-ragging Affidavit</a></li>
							<li><a href="{{route('admissions', 'scholarship')}}">Scholarship</a></li>
						</ul>
					</li>
					
					<li class="dropper">
						<div class="dropdownlink">
							<a href="#">Exam<i class="plus fa fa-chevron-down" aria-hidden="true"></i></a>
						</div>
						<ul class="submenuItems">
							<li><a href="{{route('exam', 'notices')}}">Exam Notices</a></li>
							<li><a href="{{route('exam', 'timetable')}}">Exam Timetable</a></li>
							<li><a href="{{route('exam', 'results')}}">Exam Results</a></li>
							<li><a href="#">Exam Rules &amp; Procedures</a></li>
						</ul>
					</li>

					<li class="dropper">
						<div class="dropdownlink">
							<a href="#">Alumni<i class="plus fa fa-chevron-down" aria-hidden="true"></i></a>
						</div>
						<ul class="submenuItems">
							<li><a href="#">Alumni Portal</a></li>
							<li><a href="#">Alumni Association</a></li>
						</ul>
					</li>

					<li class="dropper">
						<div class="dropdownlink">
							<a href="#">Placements<i class="plus fa fa-chevron-down" aria-hidden="true"></i></a>
						</div>
						<ul class="submenuItems">
							<li><a href="">Function &amp; Responsibilities</a></li>
							<li><a href="">Placement Statistics</a></li>
							<li><a href="">Training &amp; Placement Process</a></li>
							<li><a href="">Higher Studies</a></li>
							<li><a href="">Reviews</a></li>
						</ul>
					</li>

					<li>
						<div class="dropdownlink">
							<a href="/#contact">Life At KC</a>
						</div>
					</li>

					<li>
						<div class="dropdownlink">
							<a href="/#contact">Career At KC</a>
						</div>
					</li>

					<li class="dropper">
						<div class="dropdownlink">
							<a href="#">Statutory Affiliations<i class="plus fa fa-chevron-down" aria-hidden="true"></i></a>
						</div>
						<ul class="submenuItems">
							<li><a href="{{route('mandatory-disclosure', 'mandatory-disclosure')}}">Mandatory Disclosure</a></li>
							<li><a href="{{route('mandatory-disclosure', 'nirf-data')}}">NIRF data</a></li>
							<li><a href="{{route('mandatory-disclosure', 'dte')}}">DTE</a></li>
							<li><a href="{{route('mandatory-disclosure', 'university-affiliation')}}">University affiliation</a></li>
						</ul>
					</li>

					<li class="dropper">
						<div class="dropdownlink">
							<a href="#">About<i class="plus fa fa-chevron-down" aria-hidden="true"></i></a>
						</div>
						<ul class="submenuItems">
							<li><a href="{{route('about')}}">College Info</a></li>
							<li><a href="{{route('about')}}#chp-msg">Chairperson Message</a></li>
							<li><a href="{{route('about')}}#md-msg">MD Message</a></li>
							<li><a href="{{route('about')}}#ceo-msg">CEO Message</a></li>
							<li><a href="{{route('about')}}#prncp-msg">Principal's Message</a></li>
							<li><a href="{{route('about')}}">Vision &amp; Mission</a></li>
							<li><a href="{{route('about')}}">Board of Governance</a></li>
							<li><a href="{{route('infrastructures')}}">Infrastructure</a></li>
							<li><a href="{{route('committees')}}">Committees</a></li>
						</ul>
					</li>

					<li>
						<div class="dropdownlink">
							<a href="#">Contact</a>
						</div>
					</li>
				</ul>
			</div>
				<!--NAV DATA END-->

			<div class="clg-name container">
				<div class="header-left clearfix">

					<div class="logo smooth-scroll"  style="float: left;">
						<a href="/"><img id="logo" src="{{ asset('images/logo.png') }}" alt="KC College logo" height="60" width="60"></a>
					</div>

					<div class="smooth-scroll">
						<div class="site-name" style="padding-bottom: 0px;">
							<p style="font-size: 0.6em;margin: 0px;padding: 0px;line-height: 0.8;">Excelssior Education Society's</p>
							<a href="/" id="head-site-name" style="text-decoration:none;">K.C. College of Engineering &amp; Management Studies &amp; Research</a>
						</div>
					</div>
				</div>
				<!-- header-left end -->
			</div>		
		</div><!-- #wrapper -->
	</div>
</header>
<!-- header end -->
