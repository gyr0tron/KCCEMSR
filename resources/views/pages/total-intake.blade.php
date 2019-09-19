@extends('layouts.master')
@section('pre')
	@php
	$title = "Total Intake";
	$menu_item = 'admissions';
@endphp
@endsection
@section('content')
	<div id="total-intake" class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<h1 class="text-center" style="margin-bottom:3%;"><strong><span>Total Intake</span></strong></h1>
			<h3><span><strong>Bachelor Degree Programme (B.E):</strong></span>
			<ul class="list-unstyled">
				<li><i class="fa fa-caret-right pr-10 text-colored"></i> Computer Engineering - 90 Seats</li>
				<li><i class="fa fa-caret-right pr-10 text-colored"></i> Electronics &amp; Telecomm. Engineering – 90 Seats</li>
				<li><i class="fa fa-caret-right pr-10 text-colored"></i> Information Technology - 60 Seats</li>
			</ul>

			<div class="space"></div>
			
			<h3><span><strong>Bachelor Degree Programme (Direct Second Year):</strong></span>
			<ul class="list-unstyled">
				<li><i class="fa fa-caret-right pr-10 text-colored"></i> Computer Engineering</li>
				<li><i class="fa fa-caret-right pr-10 text-colored"></i> Electronics &amp; Telecomm. Engineering</li>
				<li><i class="fa fa-caret-right pr-10 text-colored"></i> Information Technology</li>
			</ul>

			<div class="space"></div>
			
			<h3><span><strong>Masters Degree Programme:</strong></span>
			<ul class="list-unstyled">
				<li><i class="fa fa-caret-right pr-10 text-colored"></i> Finance</li>
				<li><i class="fa fa-caret-right pr-10 text-colored"></i> Marketing</li>
				<li><i class="fa fa-caret-right pr-10 text-colored"></i> Human Resources</li>
				<li><i class="fa fa-caret-right pr-10 text-colored"></i> Information Technology</li>
				<li><i class="fa fa-caret-right pr-10 text-colored"></i> Systems</li>
			</ul>
		</div>
	</div>
@endsection
@section('post')
@endsection
