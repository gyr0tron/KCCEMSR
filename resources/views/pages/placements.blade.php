@extends('layouts.master')
@section('pre')
	@php
	$title = 'Placements';
	$menu_item = 'placements';
@endphp
@endsection
@section('content')
	<div id="app" class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content">
			<div class="row">
				<div class="col-md-12">
					<h1 id="about" class="title text-center"><span>Functions &amp; Responsibilities </span></h1>
				</div>
				<div class="col-md-12">
					<p>Training and Placement Office takes care of the following functions and responsibilities:</p>
					<div class="col-md-12">
						<ul class="list-unstyled">
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">To have close liaison with Industry to facilitate Training &amp; Placement activities.</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Perform Training Need Analysis of students after analysing industry needs and skill gaps</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Organize pre-recruitment, technical and soft skill trainings for the second and third year students</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Plan recruitment drives for final year students</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Conduct pre-recruitment trainings by the placed students</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Organize internships and industrial visits for students</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Collect feedback from companies visiting institute for recruitment</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Co-ordinate periodical meetings with students and HOD’s, Principal for feedback on Training &amp; Placement activities</p></li>
							<li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img"></i> <p class="list-text-ovrflw-fix">Prepare schedule, budget, policies for Training &amp; Placement Office.</p></li>
						</ul>
					</div>
				</div>
			</div>
			<placement-stats></placement-stats>
		</div>
	</div>
@endsection
@section('post')
	<script type="text/javascript" src="js/chart.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/vue.js') }}"></script>
@endsection
