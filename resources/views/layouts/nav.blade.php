<header style="padding:0px;"class="header fixed clearfix navbar navbar-fixed-top" id="navmain" {{isset($nav_trans)?"data-navtransparent":""}}>
	<div class="container" id="head-container">
		<div class="row">
			@if (Auth::check())
				<div class="navbar-container-listholder" style="background-color: #3598db;">
					<!-- header-right start -->
					<!-- ================ -->
					<div class="container clearfix">

						<!-- main-navigation start -->
						<!-- ================ -->
						<div class="main-navigation animated">

							<!-- navbar start -->
							<!-- ================ -->
							<nav class="navbar navbar-default" role="navigation" style="min-height: 38px;">
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
										<ul class="nav navbar-nav" style="width: 100%;" >
											<li class="{{$menu_item=='home'?'active':''}} sub-menu-parent"><a href="" style="color: #fff; pointer-events: none;cursor: default;padding-left: 0px;">Hello, {{Auth::user()->fullname}}</a>
											</li>
										</li>
										<li class="sub-menu-parent" style="float: right;" ><a href="{{route('admin_logout')}}" id="hover_black_nav" style="padding-right: 0px;">Logout</a>
										</li>
										@if (Auth::user()->type == 0)
											<li class="sub-menu-parent" style="float: right;" ><a href="{{route('admin_dashboard')}}" id="hover_black_nav" style="padding-right: 10px;">Dashboard</a>
											</li>
										@endif
										@if (Auth::user()->type == 1)
											<li class="sub-menu-parent" style="float: right;" ><a href="{{route('admissions-application')}}" id="hover_black_nav" style="padding-right: 10px;">Application Form</a>
											</li>
										@endif
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
	@endif

	<div class="navbar-container-listholder" style="background-color: rgba(0, 0, 0, 0.5);">
		<!-- header-right start -->
		<!-- ================ -->
		<div class="container clearfix">

			<!-- main-navigation start -->
			<!-- ================ -->
			<div class="main-navigation animated">
				<!-- navbar start -->
				<!-- ================ -->
				<nav class="navbar navbar-default" role="navigation" style="min-height: 40px !important;">
					<div class="container-fluid">
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="/">Home</a></li>
								<li><a href="/#contact">Contact Us</a></li>
								<li><a href="{{route('kcinmedia')}}">KC in Media</a></li>
								<li><a href="{{route('careeratkc')}}">Careers</a></li>
								<li><a href="https://www.orionhack.com" style="text-shadow: 1px 1px 1.4px #48a9ed;">OrionHack</a></li>
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
	<div class="clg-name container">
		<div class="header-left clearfix">

			<div class="logo smooth-scroll"  style="float: left;">
				<a href="/"><img id="logo" src="{{ asset('images/logo.png') }}" alt="KC College logo" height="65" width="65"></a>
			</div>

			<div class="smooth-scroll">
				<div class="site-name" style="padding-bottom: 0px;">
					<p class="text-center" style="font-size: 0.6em;margin: 0px;padding: 0px;line-height: 0.8;">Excelssior Education Society's</p>
					<a href="/" id="head-site-name" style="text-decoration:none;">K.C. College of Engineering &amp; Management Studies &amp; Research</a>
					<p class="lead text-center" style="margin:0px;font-size:15px;"><i>(NAAC Accredited with B++ Grade)</i></p>
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
								{{-- <li class="{{$menu_item=='home'?'active':''}} sub-menu-parent"><a href="/" style="padding-left: 0px;">Home</a>
								</li> --}}
								<li class="{{$menu_item=='about'?'active':''}} sub-menu-parent"><a href="#">About</a>
									<ul class="sub-menu">
										<li><a href="{{route('about')}}">College Info</a></li>
										<li><a href="{{route('about')}}#vision">Vision &amp; Mission</a></li>
										<li><a href="{{route('about')}}#chp-msg">Chairperson's Message</a></li>
										<li><a href="{{route('about')}}#md-msg">MD's Message</a></li>
										<li><a href="{{route('about')}}#coo-msg">COO's Message</a></li>
										{{-- <li><a href="{{route('about')}}#ceo-msg">CEO Message</a></li> --}}
										<li><a href="{{route('about')}}#prncp-msg">Principal's Message</a></li>
										<li><a href="{{route('hr-handbook')}}">HR Handbook</a></li>
										{{-- <li><a href="{{route('about')}}">Board of Governance</a></li> --}}
										<li><a href="{{route('infrastructures')}}">Infrastructure</a></li>
										<li><a href="{{route('committees')}}">Committees</a></li>
										{{-- <li><a href="{{route('careeratkc')}}">Career At KC</a></li> --}}
									</ul>
								</li>
								<li class="{{$menu_item=='academics'?'active':''}} sub-menu-parent"><a href="#">Academics</a>
									<ul class="sub-menu">
										<li><a href="{{route('academic-calendar')}}">Academic Calendar</a></li>
										<li><a href="{{route('department-list')}}">Departments</a></li>
										<li><a href="http://www.learningatkc.com/moodle/login/index.php" target="_blank">KC-Moodle</a></li>
										<li><a href="{{route('publications')}}">Publications</a></li>
										{{-- <li><a href="{{route('publications')}}">News Letter</a></li> --}}
										<li><a href="{{route('rd', 'aim')}}">Research &amp; Development</a></li>
										<li><a href="{{route('vac')}}">Value Added Cell</a></li>
									</ul>
								</li>
								<li class="{{$menu_item=='library'?'active':''}} sub-menu-parent"><a href="#">Library</a>
									<ul class="sub-menu">
										<li><a href="{{route('library-about')}}">About Library</a></li>
										<li><a href="{{route('library-about')}}/#digital-library">Digital Library</a></li>
										<li><a href="http://library.biyanitechnologies.com/LogInPageController/LogInUser?Username=kc_student&Password=kc_student" target="_blank">OPAC</a></li>
										<li><a href="{{route('question-papers')}}">Question Papers</a></li>
										<li><a href="{{route('ebooks')}}">Journals</a></li>
										<li><a href="{{route('syllabus')}}">Syllabus</a></li>
									</ul>
								</li>
								<li class="{{$menu_item=='admissions'?'active':''}} sub-menu-parent"><a href="#">Admissions</a>
									<ul class="sub-menu" id="large-sub-menu">
										<li><a href="{{route('admissions-details')}}">Admissions 2019</a></li>
										<li><a href="{{route('admissions-apply')}}">Apply Online</a></li>
										<li><a href="{{route('admissions', 'admission-criteria')}}">Admission Criteria</a></li>
										{{-- <li><a href="{{route('admissions', 'fees-notices')}}">Fees Notices</a></li> --}}
										<li><a href="{{url('/public/files/institute-prospectus.pdf')}}">Institute Prospectus</a></li>
										<li><a href="{{route('admissions', 'dte-admission-information-brochure')}}">DTE Admission Information Brochure</a></li>
										<li><a href="{{route('admissions', 'total-intake')}}">Total Intake</a></li>
										{{-- <li><a href="{{route('admissions', 'cap-rount-allottment')}}">Cap Round Allottment</a></li> --}}
										{{-- <li><a href="{{route('admissions', 'direct-second-year')}}">Direct Second Year</a></li> --}}
										<li><a href="{{route('admissions', 'anti-ragging-affidavit')}}">Anti-ragging Affidavit</a></li>
										<li><a href="{{route('admissions', 'scholarship')}}">Scholarship</a></li>
									</ul>
								</li>
								<li class=" sub-menu-parent"><a href="#">Exam</a>
									<ul class="sub-menu">
										<li><a href="{{route('exam', 'notices')}}">Exam Notices</a></li>
										<li><a href="{{route('exam', 'timetable')}}">Exam Timetable</a></li>
										{{-- <li><a href="{{route('exam', 'results')}}">Exam Results</a></li> --}}
										<li><a href="#">Exam Rules &amp; Procedures</a></li>
									</ul>
								</li>
							</li>
							<li class="{{$menu_item=='student-corner'?'active':''}} sub-menu-parent"><a href="#">Student Corner</a>
								<ul class="sub-menu">
									<li><a href="http://www.kcecell.org/">KC Ecell</a></li>
									<li><a href="{{route('lifeatkc')}}">Life At KC</a></li>
									<li><a href="{{route('student-corner', 'student-council')}}">Student Council</a></li>
									<li><a href="{{route('student-corner', 'student-handbook')}}">Student Handbook</a></li>
									{{-- <li><a href="{{route('student-corner', 'student-discipline')}}">Student Discipline</a></li> --}}
									<li><a href="{{route('student-development')}}">Student Development</a></li>
									<li><a href="https://www.youtube.com/watch?v=fWECyi8vmL8&list=PLZSzAtoBtkwXHjZ4LJdCDSrYdOhLQSWzf" target="_blank">Video Lectures</a></li>
								</ul>
							</li>
							{{-- <li class="{{$menu_item=='kcinmedia'?'active':''}} sub-menu-parent"><a href="{{route('kcinmedia')}}">KC in Media</a>
							</li> --}}
							{{-- <li class="{{$menu_item=='statutory-affiliation'?'active':''}} sub-menu-parent"><a href="#">Statutory Affiliations</a>
								<ul class="sub-menu">
									<li><a href="{{route('mandatory-disclosure', 'mandatory-disclosure')}}">Mandatory Disclosure</a></li>
									<li><a href="{{route('mandatory-disclosure', 'aicte-affiliation')}}">AICTE Affiliation</a></li>
									<li><a href="{{route('mandatory-disclosure', 'dte')}}">DTE Affiliation</a></li>
									<li><a href="{{route('mandatory-disclosure', 'university-affiliation')}}">University affiliation</a></li>
									<li><a href="{{route('grievance-redressal')}}">Grievance Redressal</a></li>
								</ul>
							</li> --}}
							<li class="{{$menu_item=='naac'?'active':''}} sub-menu-parent"><a href="#">NAAC</a>
								<ul class="sub-menu">
									{{-- <li><a href="{{route('iqac', 'introduction')}}">IQAC</a></li> --}}
									<li><a href="{{route('naac-ssr')}}">SSR</a></li>
									<li><a href="{{route('naac-sop')}}">SOP</a></li>
									<li><a href="{{route('naac-feedback')}}">Feedback</a></li>
									<li><a href="{{route('naac-AQAR-2018-19')}}">AQAR-2018-19</a></li>
									<li><a href="{{route('naac-course-outcome')}}">Course Outcome</a></li>
								</ul>
							</li>
							<li class="{{$menu_item=='iqac'?'active':''}} sub-menu-parent"><a href="{{route('iqac', 'introduction')}}">IQAC</a></li>
							<li class="{{$menu_item=='placements'?'active':''}} sub-menu-parent"><a href="{{route('placements')}}">Placement</a></li>
							<li class="{{$menu_item=='hvecell'?'active':''}} sub-menu-parent"><a href="{{route('hvecell')}}">Human Value Education Cell</a></li>
							{{-- <li><a href="/#contact">Contact Us</a></li> --}}
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
