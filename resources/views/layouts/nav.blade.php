<header class="header fixed clearfix navbar navbar-fixed-top" id="navmain" {{isset($nav_trans)?"data-navtransparent":""}}>
	<div class="container" id="head-container">
		<div class="row">
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
		<div class="navbar-container-listholder">
			<!-- header-right start -->
			<!-- ================ -->
			<div class="header-right clearfix">

				<!-- main-navigation start -->
				<!-- ================ -->
				<div class="main-navigation animated">

					<!-- navbar start -->
					<!-- ================ -->
					<nav class="navbar navbar-default" role="navigation">
						<div class="container-fluid">

							<!-- Toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="{{$menu_item=='home'?'active':''}} sub-menu-parent"><a href="/" style="padding-left: 0px;">Home</a>
									</li>
									<li class="{{$menu_item=='academics'?'active':''}} sub-menu-parent"><a href="#">Academics</a>
										<ul class="sub-menu">
											<li><a href="{{route('curriculum-plan')}}">Curriculum Plan</a></li>
											<li><a href="{{route('department-list')}}">Departments</a></li>
											<li><a href="http://www.learningatkc.com/moodle/login/index.php" target="_blank">KC-Moodle</a></li>
											<li><a href="{{route('publications')}}">Publications</a></li>
											<li><a href="{{route('newsletter')}}">News Letter</a></li>
										</ul>
									</li>
									<li class="{{$menu_item=='library'?'active':''}} sub-menu-parent"><a href="#">Library</a>
										<ul class="sub-menu">
											<li><a href="{{route('library-about')}}">About Library</a></li>
											<li><a href="{{route('question-papers')}}">Question Papers</a></li>
											<li><a href="{{route('ebooks')}}">E-Books &amp; Journals</a></li>
											<li><a href="{{route('syllabus')}}">Syllabus</a></li>
										</ul>
									</li>
									<li class="{{$menu_item=='admissions'?'active':''}} sub-menu-parent"><a href="#">Admissions</a>
										<ul class="sub-menu" id="large-sub-menu">
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
									<li class="{{$menu_item=='exam'?'active':''}} sub-menu-parent"><a href="#">Exam</a>
										<ul class="sub-menu">
											<li><a href="{{route('exam', 'notices')}}">Exam Notices</a></li>
											<li><a href="{{route('exam', 'timetable')}}">Exam Timetable</a></li>
											<li><a href="{{route('exam', 'results')}}">Exam Results</a></li>
											<li><a href="#">Exam Rules &amp; Procedures</a></li>
										</ul>
									</li>
									<li class="sub-menu-parent"><a href="#">Alumni</a>
										<ul class="sub-menu">
											{{-- <li><a href="#">Student Login/Information</a></li>
											<li><a href="#">Student Feedback</a></li> --}}
											<li><a href="#">Alumni Portal</a></li>
											<li><a href="#">Alumni Association</a></li>
										</ul>
									</li>
									<li class="{{$menu_item=='placements'?'active':''}} sub-menu-parent"><a href="#">Placements</a>
										<ul class="sub-menu">
											<li><a href="{{route('placements')}}">About TPO</a></li>
											<li><a href="{{route('placements')}}">Function &amp; Responsibilities</a></li>
											<li><a href="{{route('placements')}}#chart_placements">Placement Statistics</a></li>
											<li><a href="{{route('placements')}}">Training &amp; Placement Process</a></li>
											<li><a href="{{route('placements')}}">Higher Studies</a></li>
											<li><a href="{{route('placements')}}#reviews">Reviews</a></li>
										</ul>
									</li>
									</li>
									<li class="sub-menu-parent"><a href="http://www.kcecell.org/">E-Cell</a>
									</li>
									<li class="{{$menu_item=='lifeatkc'?'active':''}} sub-menu-parent"><a href="{{route('lifeatkc')}}">Life At KC</a>
									</li>
									<li class="{{$menu_item=='careeratkc'?'active':''}} sub-menu-parent"><a href="{{route('careeratkc')}}">Career At KC</a>
									</li>
									<li class="sub-menu-parent"><a href="#">Statutory Affiliations</a>
										<ul class="sub-menu">
											<li><a href="{{route('mandatory-disclosure', 'mandatory-disclosure')}}">Mandatory Disclosure</a></li>
											<li><a href="{{route('mandatory-disclosure', 'aicte-affiliation')}}">AICTE Affiliation</a></li>
											<li><a href="{{route('mandatory-disclosure', 'dte')}}">DTE Affiliation</a></li>
											<li><a href="{{route('mandatory-disclosure', 'university-affiliation')}}">University affiliation</a></li>
											<li><a href="{{route('mandatory-disclosure', 'nirf-data')}}">NIRF Data</a></li>
											<li><a href="{{route('grievance-redressal')}}">Grievance Redressal</a></li>
										</ul>
									</li>
									<li class="{{$menu_item=='about'?'active':''}} sub-menu-parent"><a href="#">About</a>
										<ul class="sub-menu">
											<li><a href="{{route('about')}}">College Info</a></li>
											<li><a href="{{route('about')}}#chp-msg">Chairperson Message</a></li>
											<li><a href="{{route('about')}}#md-msg">MD Message</a></li>
											<li><a href="{{route('about')}}#dir_id-msg">Director ID Message</a></li>
											<li><a href="{{route('about')}}#ceo-msg">CEO Message</a></li>
											<li><a href="{{route('about')}}#prncp-msg">Principal's Message</a></li>
											<li><a href="{{route('about')}}#vision">Vision &amp; Mission</a></li>
											<li><a href="{{route('about')}}">Board of Governance</a></li>
											<li><a href="{{route('infrastructures')}}">Infrastructure</a></li>
											<li><a href="{{route('committees')}}">Committees</a></li>
										</ul>
									</li>
									<li class="sub-menu-parent"><a href="/#contact" style="padding-right: 0px;">Contact</a>
									</li>
								</ul>
							</div>

						</div>
					</nav>
					<!-- navbar end -->

				</div>
				<!-- main-navigation end -->

			</div>
			<!-- header-right end -->
			</div>
		</div>
	</div>
</header>
<!-- header end -->
