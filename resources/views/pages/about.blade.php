@extends('layouts.master')
@section('pre')
	@php
	$title = "About";
	$menu_item = 'about';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content">
			<div class="row">
				<div class="col-md-12">
					<h1 id="about" class="title text-center">About <span>K.C.</span></h1>
					<div class="space"></div>
					<div class="row">
						<div class="col-md-6">
							{{-- <img src="http://via.placeholder.com/1140x615" alt=""> --}}
							<iframe width="100%" height="300" src="https://www.youtube.com/embed/HG2thJowMAU" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
							<div class="space"></div>
						</div>
						<div class="col-md-6" style="text-align: justify;">
							Excelssior Education Society is an educational and charitable trust that is dedicated to the pursuit of excellence and welfare of the students since 1978 and is affiliated to Mumbai University. It aims to maximise the capabilities of individuals in all generes educational, intellectual and moral. Our endeavour is to align education with innovation and practical exposure needed to meet the current industry’s requirement. Dr Harssh Khanna and late Mr K. C. Khanna are the milestone in the establishment of KCCOEMSR.

						</div>
					</div>
				</div>
			</div>
			<div class="space"></div>
			<div class="row">
				<div class="col-md-6">
					<h1 id="vison" class="title text-center"><span>Vision</span></h1>
					<ul class="list-unstyled">
						<li><i class="fa fa-caret-right text-colored"></i> To be an organization with potential for excellence in engineering and management for the advancement of society and human kind.</li>
					</ul>
				</div>
				<div class="col-md-6">
					<h1 id="progOutcms" class="title text-center"><span>Mission</span></h1>
					<ul class="list-unstyled">
						<li><i class="fa fa-caret-right text-colored"></i> To excel in academics, practical engineering, management and to commence research endeavors.</li>
						<li><i class="fa fa-caret-right text-colored"></i> To prepare students for future opportunities.</li>
						<li><i class="fa fa-caret-right text-colored"></i> To nurture students with social and ethical responsibilities.</li>
					</ul>
				</div>
			</div>
			<div class="space"></div>

			<h2 style="margin-top: 0px; margin-bottom: 5px;"><span>Program Outcomes:</span></h2>
			<p style="margin: 10px 0 0 0;">Engineering Graduates will be able to:</p>
			<ul class="list-unstyled">
				<li><i class="fa fa-caret-right pr-10 text-colored"></i><strong>Engineering knowledge:</strong><p style="padding-left:2%">Apply the knowledge of mathematics, science, engineering fundamentals, and an engineering specialization to the solution of complex engineering problems.</p></li>
				<li><i class="fa fa-caret-right pr-10 text-colored"></i><strong>Problem analysis:</strong><p style="padding-left:2%">Identify, formulate, review research literature, and analyze complex engineering problems reaching substantiated conclusions using first principles of mathematics, natural sciences, and engineering sciences.</p></li>
				<li><i class="fa fa-caret-right pr-10 text-colored"></i><strong>Design/development of solutions:</strong><p style="padding-left:2%">Design solutions for complex engineering problems and design system components or processes that meet the specified needs with appropriate consideration for the public health and safety, and the cultural, societal, and environmental considerations.</p></li>
				<li><i class="fa fa-caret-right pr-10 text-colored"></i><strong>Conduct investigations of complex problems:</strong><p style="padding-left:2%">Use research-based knowledge and research methods including design of experiments, analysis and interpretation of data, and synthesis of the information to provide valid conclusions.</p></li>
				<li><i class="fa fa-caret-right pr-10 text-colored"></i><strong>Modern tool usage:</strong><p style="padding-left:2%">Create, select, and apply appropriate techniques, resources, and modern engineering and IT tools including prediction and modeling to complex engineering activities with an understanding of the limitations.</p></li>
				<li><i class="fa fa-caret-right pr-10 text-colored"></i><strong>The engineer and society:</strong><p style="padding-left:2%">Apply reasoning informed by the contextual knowledge to assess societal, health, safety, legal and cultural issues and the consequent responsibilities relevant to the professional engineering practice.</p></li>
				<li><i class="fa fa-caret-right pr-10 text-colored"></i><strong>Environment and sustainability:</strong><p style="padding-left:2%">Understand the impact of the professional engineering solutions in societal and environmental contexts, and demonstrate the knowledge of, and need for sustainable development.</p></li>
				<li><i class="fa fa-caret-right pr-10 text-colored"></i><strong>Ethics:</strong><p style="padding-left:2%">Apply ethical principles and commit to professional ethics and responsibilities and norms of the engineering practice.</p></li>
				<li><i class="fa fa-caret-right pr-10 text-colored"></i><strong>Individual and team work:</strong><p style="padding-left:2%">Function effectively as an individual, and as a member or leader in diverse teams, and in multidisciplinary settings.</p></li>
				<li><i class="fa fa-caret-right pr-10 text-colored"></i><strong>Communication:</strong>Communicate effectively on complex engineering activities with the engineering community and with society at large, such as, being able to comprehend and write effective reports and design documentation, make effective presentations, and give and receive clear instructions.</p></li>
				<li><i class="fa fa-caret-right pr-10 text-colored"></i><strong>Project management and finance:</strong><p style="padding-left:2%">Demonstrate knowledge and understanding of the engineering and management principles and apply these to one’s own work, as a member and leader in a team, to manage projects and in multidisciplinary environments.</p></li>
				<li><i class="fa fa-caret-right pr-10 text-colored"></i><strong>Life-long learning:</strong><p style="padding-left:2%">Recognize the need for, and have the preparation and ability to engage in independent and life-long learning in the broadest context of technological change.</p></li>
			</ul>
			<div class="space"></div>

			<div class="row" id="">
				<a class="anchor_guide" id="chp-msg"></a>
				<h1 class="title text-center resp-text-head title-marg-resp align-marg" id="chairperson"><strong><span>Chairperson Message</span></strong></h1>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div style="width:100%;">
						<img src="{{url("images/chairperson.jpg")}}" style="margin: 0 auto;" alt="" width="235" height="245" class="img-responsive">
					</div>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12">
					<div class="row">
						<h2 class="title text-left resp-text-head title-marg-resp align-marg"><span>Dr. Harssh Khanna</span></h2>
						<blockquote class="blockquote2">
							<p class="text-left align-marg" style="text-align: justify;">To embark on a journey of success, one needs the tool of preparedness, foresight and strategy. These lead to the path of growth and excellence. It is imperative to combine these three forces in knowledge assimilation, where every day and every semester acts like a pivot tilting the pan balance of life in favour of professional excellence. In K.C College of Engineering and Management Studies and Research, learning is beyond the limits of conventional thoughts as students and faculty push the boundaries of human understanding.</p>
							<p class="text-left align-marg" style="text-align: justify;">We invite you to explore K.C College of Engineering and Management Studies and Research, both online and in person. We welcome the opportunity to share with your our community of talented individual and their commitment to excellence in research, education and service.</p>
						</blockquote>
					</div>
				</div>
			</div>
			<div class="space"></div>

			<div class="row" id="">
				<a class="anchor_guide" id="md-msg"></a>
				<h1 class="title text-center resp-text-head title-marg-resp align-marg"><strong><span>MD Message</span></strong></h1>
				<div class="col-md-3 col-sm-3 col-xs-12" style="float:right">
					<div style="width:100%;">
						<img src="http://via.placeholder.com/235x245" style="margin: 0 auto;" alt="">
					</div>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12">
					<div class="row">
						<h2 class="title text-left resp-text-head title-marg-resp align-marg"><span>Mr.Sai Kiran Khanna</span></h2>
						<blockquote class="blockquote2">
							<p class="text-left align-marg" style="text-align: justify;">My dear students,</p>
							<p class="text-left align-marg" style="text-align: justify;">At the outset, I wish to thank you for your interest in joining this institution and I welcome you to our website. As being young, I am fully aware of the aspirations and hopes of the youngsters. I deem it an honor to be at the helm of an institution that helps so many youth like you to achieve their heart's desire in entering the vocation of their choice. I wish to assure you that our predominant aim is to ensure that you build the foundation of your successful career in this institution.</p>
							<p class="text-left align-marg" style="text-align: justify;">Modern education is all about preparing for the future. Here I am referring to educational standards that are in vogue all over the world. And with our country launching itself into the globalization process, it is quite likely that many of you will rub shoulders with the academic cream of the world and will find yourselves competing with the best among the best. In such a scenario, the realization is clear that the precious years immediately ahead need to be concentrated with productive activity. Every minute needs to be planned and accounted for. Every hour must be programmed to contribute to your preparation for the arduous but glorious days ahead. Each drop of sweat and each step of effort go towards conditioning you in every manner in order that you may surge ahead of others.</p>
							<p class="text-left align-marg" style="text-align: justify;">At this point of time, I wish to reiterate two points the first being that in the light of what I have just mentioned, the institution will do all in its capacity to bring out the best in you. The second is that on your part, we would like you to supplement the efforts of the management by co-operating in its overall plan to establish the highest standards of academic excellence.</p>
							<p class="text-left align-marg" style="text-align: justify;">I look forward to greet you.</p>
						</blockquote>
					</div>
				</div>
			</div>
			<div class="space"></div>

			<div class="row" id="">
				<a class="anchor_guide" id="dir_id-msg"></a>
				<h1 class="title text-center resp-text-head title-marg-resp align-marg"><strong><span>Director - Institutional Development Message</span></strong></h1>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div style="width:100%;">
						<img src="{{url("images/director.jpg")}}" style="margin: 0 auto;" alt="" width="235" height="245" class="img-responsive">
					</div>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12">
					<div class="row">
						<h2 class="title text-left resp-text-head title-marg-resp align-marg"><span>Dr. Puja Rai Pradhan</span></h2>
						<blockquote class="blockquote2">
							<p class="text-left align-marg" style="text-align: justify;">Welcome  to the  KC  college campus at Thane east.  Since its inception in  2001 it  has made remarkable progress in the field of technical teaching . The excellence in teaching and research comes with a committed  team  working relentlessly towards it   . The students are mentored  here in a very personalized and customized pattern keeping their strengths and weakness in mind. We believe that an individual‘s personality must not come in conflict with the environment and every one should engage technically with a free mind.</p>
							<p class="text-left align-marg" style="text-align: justify;">Having freedom of choice is very essential to the well being of all. So we offer a host of technical and non technical events, workshops and opportunities to the students to understand and develop themselves as a person and as a technocrat.</p>
							<p class="text-left align-marg" style="text-align: justify;">We at KC believe  in the motto of "technology for humanity". If our technical knowledge and advancements do not contribute in  improving our quality of life then it is of no use . So, to develop the Humane face of Technology  we ensure that our students are exposed through the various committees and events that we have. If on one side our students are engaged in IOT based research, health care projects, students are giving solution to national problems through participating in smart India Hackathon and drone‘s are made and flown in the campus then we also have equal number of events to stimulate their minds about the importance of green environment , sensitize them about the  importance of women safety and women freedom, develop their perspectives on the national and international issues of importance where their learning can offer a solution.</p>
							<p class="text-left align-marg" style="text-align: justify;">We have a strong connection between the students, faculties and corporate. We have host of events in the form of KED talks, T talks where ideas gets exchanged, fuelling the young minds. The young aspiring entrepreneurs are making a mark by small but relevant success stories right from winning national championships to offering solutions to  neighborhood society . In line with our national mission of developing villages KC students and faculties have adopted a village “pimpri” in Thane district for developing it with our technical know how in the form of skill transfer programmes and women empowerment, ecology conservation.</p>
						</blockquote>
					</div>
				</div>
			</div>
			<div class="space"></div>

			{{-- <div class="row" id="">
				<a class="anchor_guide" id="ceo-msg"></a>
				<h1 class="title text-center resp-text-head title-marg-resp align-marg"><strong><span>CEO Message</span></strong></h1>
				<div class="col-md-3 col-sm-3 col-xs-12" style="float:right">
					<div style="width:100%;">
						<img src="{{url("images/ceo.jpg")}}" style="margin: 0 auto;" alt="" width="235" height="245" class="img-responsive">
					</div>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12">
					<div class="row">
						<h2 class="title text-left resp-text-head title-marg-resp align-marg"><span>Dr. H. S. Cheema</span></h2>
						<blockquote class="blockquote2">
							<p class="text-left align-marg" style="text-align: justify;">I am experiencing surge complex emotions while writing this message to you. It makes me really proud to send this message to my promising engineering minds who really work very hard to make themselves best so that they can ably handle the challenges of the new millennium.</p>
							<p class="text-left align-marg" style="text-align: justify;">But at the back of my mind what overwhelms me is the complex challenges of this new millennium, especially for engineering students. The pace of technological development is so fast that what is new today becomes obsolete the next day. The knowledge horizon has widened so much that there is an inevitable synthesis of different streams. You are no more just an engineer but a part of a completely complex social system that demands your engineering expertise to be all inclusive.</p>
							<p class="text-left align-marg" style="text-align: justify;">Here lies the real challenge. You can no more work in isolation but you have to work, invent, innovate and create in a larger context now. Now you are not just an engineer but a multitasking and multidimensional individual who has to go along with so many entities to achieve a holistic growth; a growth that is inclusive and not exclusive. This is the demand of the present millennium. By being exclusive, we have caused a grave damage to our eco system, we have played havoc with our social structure. There is a mad rush after mindless irresponsible growth.</p>
							<p class="text-left align-marg" style="text-align: justify;">Today I want you to wake up to the new reality; the new reality of holistic and inclusive growth. Growth that is healthy. We cannot create to kill but we have work to build. You cannot grow at the cost of others’ lives but you have to lead the life of co-existence. As an engineer, you will have to be an entrepreneur, an economist, an environmentalist and a socialist who works responsibly to contribute to each of these areas. Only then and then we can build a society where we can all coexist peacefully, help each other to survive and grow. This is the only way we can build a healthy society around us, a nation of healthy growth and a world of peaceful co-existence. These are my genuine feelings that I have communicated to you. This is how I see the world and this is the stark reality of the moment.</p>
							<p class="text-left align-marg" style="text-align: justify;">I am proud of you as promising young citizens of our nation. You are our hope for tomorrow. In your success lies the future of the nation. Never ever waver from the righteous path. Success founded on unethical base always comes to a tragic end. We have hundreds and thousands of examples of unethical enterprises coming to a tragic end.</p>
							<p class="text-left align-marg" style="text-align: justify;">So, cheer up enterprising young men. All the best to you for a bright future of tomorrow.</p>
						</blockquote>
					</div>
				</div>
			</div>
			<div class="space"></div> --}}

			<div class="row" id="">
				<a class="anchor_guide" id="prncp-msg"></a>
				<h1 class="title text-center resp-text-head title-marg-resp align-marg"><strong><span>Principal Message</span></strong></h1>
				<div class="col-md-3 col-sm-3 col-xs-12" style="float:right">
					<div style="width:100%;">
						<img src="{{url("images/principal.jpg")}}" style="margin: 0 auto;" alt="" width="235" height="245" class="img-responsive">
					</div>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12">
					<div class="row">
						<h2 class="title text-left resp-text-head title-marg-resp align-marg"><span>Dr. Hansraj Guhilot BE,MTech,PhD,FIETE,SMIEEE</span></h2>
						<blockquote class="blockquote2">
							<p class="text-left align-marg" style="text-align: justify;">All are welcome  to the website which will introduce you to a place of transformation, a place where caterpillars are converted into beautiful butterflies, the youth is transformed into  multi faceted engineers. We at K C College nurture technical proficiency and expertise of students in wide range of functional, organizational and cultural environments . K C College works to serve the society by developing “ classroom ready” study materials for student fraternity in pursuit of making “ industry ready “ engineers and managers.</p>
							<p class="text-left align-marg" style="text-align: justify;">At K C College student’s competency in solving contemporary problems is enhanced by providing them exemplary infrastructural facilities and well equipped laboratories. Here students are empowered and enlightened by highly dedicated and committed , research oriented, challenge seeking, well qualified and devoted faculty members. We orient and orchestrate students for smart India Challenge through National level Project exhibition competition and Detroix the robotic competition.</p>
							<p class="text-left align-marg" style="text-align: justify;">We believe, the quality of education impacts everyone: students, employers, communities, and societies. So when we prepare students to accomplish more, we also inspire them to tackle local and global challenges. That contributes to a better workforce, expands innovation, creates opportunities for growth, and builds stronger communities.</p>
							<p class="text-left align-marg" style="text-align: justify;">We, at KC, ensure that students gain critical skills and knowledge to succeed. By combining strong curriculum standards with accurate assessments, you can more effectively measure students’ knowledge, skills, and progress across various subjects.</p>
							<p class="text-left align-marg" style="text-align: justify;">We boast of pro-active Training and Placement Cell where students are being trained in aptitude test, group discussion, soft skills and personal interviews on regular basis and arrange campus recruitment every year. Many of our past students are now leaders in their professions at various industries such as Microsoft, Reliance, TCS, Infosys etc.</p>
							<p class="text-left align-marg" style="text-align: justify;">The ultimate aim of our management and staff is to prepare our students to “Think Global and Act Local” for purposeful placement in multi-national companies. We conduct Seminars, Workshops, STTP, National and International conferences to update the development in science technology.</p>
							<p class="text-left align-marg" style="text-align: justify;">We believe that the institute will continue to produce competent technocrats and managers who will make significant contribution to the corporate world and industries all over the world .</p>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
