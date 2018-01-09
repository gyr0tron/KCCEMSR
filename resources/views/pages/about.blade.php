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
					<p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta officia, aspernatur.</p>
					<div class="space"></div>
					<div class="row">
						<div class="col-md-6">
							{{-- <img src="http://via.placeholder.com/1140x615" alt=""> --}}
							<iframe width="100%" height="300" src="https://www.youtube.com/embed/HG2thJowMAU" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
							<div class="space"></div>
						</div>
						<div class="col-md-6">
							Excelssior Education Society is an educational and charitable trust that is dedicated to the pursuit of excellence and welfare of the students since 1978 and is affiliated to Mumbai University. It aims to maximise the capabilities of individuals in all generes educational, intellectual and moral. Our endeavour is to align education with innovation and practical exposure needed to meet the current industry’s requirement. Dr Harssh Khanna and late Mr K. C. Khanna are the milestone in the establishment of KCCOEMSR.

						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h1 id="about" class="title text-center"><span>Vision</span></h1>
					<ul class="list-unstyled">
						<li><i class="fa fa-caret-right pr-10 text-colored"></i>To be an organization of excellence, leveraging human potential in engineering and management for a better tomorrow</li>
					</ul>
				</div>
				<div class="col-md-6">
					<h1 id="about" class="title text-center"><span>Mission</span></h1>
					<ul class="list-unstyled">
						<li><i class="fa fa-caret-right pr-10 text-colored"></i> To nurture scientific temperament through the process of intellectual stimulation.</li>
						<li><i class="fa fa-caret-right pr-10 text-colored"></i> To inculcate a sense of life-long learning and developing positive qualities.</li>
						<li><i class="fa fa-caret-right pr-10 text-colored"></i> To excel in academics, practical engineering and research endeavors.</li>
						<li><i class="fa fa-caret-right pr-10 text-colored"></i> To collaborate with institutions and industries for mutual benefits and to achieve excellence.</li>
						<li><i class="fa fa-caret-right pr-10 text-colored"></i> To facilitate employability, entrepreneurial ability along with social responsibility.</li>
					</ul>
				</div>
			</div>
			<div class="space"></div>

			<div class="row" id="slider">
						<h2 class="title text-center resp-text-head title-marg-resp align-marg"><span>Chairperson Message</span></h1>
				<div class="col-md-5 col-sm-5 col-xs-12">
					<div style="width:100%;">
						<img src="http://via.placeholder.com/1140x615" style="margin: 0 auto;" alt="">
					</div>
				</div>
				<div class="col-md-7 col-sm-7 col-xs-12">
					<div class="row">
						<p class="text-left align-marg">Tempor sunt in in fugiat nostrud laborum consequat. Tempor adipisicing quis minim laboris ad dolor veniam culpa exercitation sit in ut. Ullamco dolor Lorem tempor reprehenderit non veniam esse elit commodo elit. Nostrud laboris dolore consectetur elit ullamco fugiat veniam ea deserunt tempor dolor ea voluptate. Consequat duis consectetur dolore elit.</p>
					</div>
				</div>
			</div>
			<div class="space"></div>

			<div class="row" id="slider">
						<h2 class="title text-center resp-text-head title-marg-resp align-marg"><span>MD Message</span></h1>
				<div class="col-md-7 col-sm-7 col-xs-12">
					<div class="row">
						<p class="text-left align-marg">Tempor sunt in in fugiat nostrud laborum consequat. Tempor adipisicing quis minim laboris ad dolor veniam culpa exercitation sit in ut. Ullamco dolor Lorem tempor reprehenderit non veniam esse elit commodo elit. Nostrud laboris dolore consectetur elit ullamco fugiat veniam ea deserunt tempor dolor ea voluptate. Consequat duis consectetur dolore elit.</p>
					</div>
				</div>
				<div class="col-md-5 col-sm-5 col-xs-12">
					<div style="width:100%;">
						<img src="http://via.placeholder.com/1140x615" style="margin: 0 auto;" alt="">
					</div>
				</div>
			</div>
			<div class="space"></div>

			<div class="row" id="slider">
						<h2 class="title text-center resp-text-head title-marg-resp align-marg"><span>CEO Message</span></h1>
				<div class="col-md-5 col-sm-5 col-xs-12">
					<div style="width:100%;">
						<img src="http://via.placeholder.com/1140x615" style="margin: 0 auto;" alt="">
					</div>
				</div>
				<div class="col-md-7 col-sm-7 col-xs-12">
					<div class="row">
						<p class="text-left align-marg">Tempor sunt in in fugiat nostrud laborum consequat. Tempor adipisicing quis minim laboris ad dolor veniam culpa exercitation sit in ut. Ullamco dolor Lorem tempor reprehenderit non veniam esse elit commodo elit. Nostrud laboris dolore consectetur elit ullamco fugiat veniam ea deserunt tempor dolor ea voluptate. Consequat duis consectetur dolore elit.</p>
					</div>
				</div>
			</div>
			<div class="space"></div>

			<div class="row" id="slider">
						<h2 class="title text-center resp-text-head title-marg-resp align-marg"><span>Principal Message</span></h1>
				<div class="col-md-7 col-sm-7 col-xs-12">
					<div class="row">
						<p class="text-left align-marg">Tempor sunt in in fugiat nostrud laborum consequat. Tempor adipisicing quis minim laboris ad dolor veniam culpa exercitation sit in ut. Ullamco dolor Lorem tempor reprehenderit non veniam esse elit commodo elit. Nostrud laboris dolore consectetur elit ullamco fugiat veniam ea deserunt tempor dolor ea voluptate. Consequat duis consectetur dolore elit.</p>
					</div>
				</div>
				<div class="col-md-5 col-sm-5 col-xs-12">
					<div style="width:100%;">
						<img src="http://via.placeholder.com/1140x615" style="margin: 0 auto;" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
