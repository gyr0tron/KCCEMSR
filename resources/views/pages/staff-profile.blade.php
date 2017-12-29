@extends('layouts.master')
@section('pre')
	@php
	$title = $staff->name;
	$menu_item = 'staff';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content">
			{{-- Media body
			Left side image ( profile photo ) (If possible adjust name and email field below image without label ex-prof.abc <br/><small>emal@gmail.com</small>		)
			Right side Name, , Email id, designation, qualification(List), experience, Area of intrest(para)
			Below both ^^
			workshops and training attended(list), publications(list) --}}
			<div class="col-md-4 col-sm-4 col-xs-4">
				<div style="width:100%; height:30%;">
					<img src="http://via.placeholder.com/400x500" alt="">
				</div>
				<h1 style="margin-bottom: 1%;">Kaci Jerde</h1>
				<a href="mailto:name@email.com">name@email.com</a>
			</div>
			<div class="col-md-8 col-sm-8 col-xs-8 line">
				<div class="row">
					<h2 class="title text-center"><strong><span>Designation</span></strong></h1>
					<p class="text-center" style="font-size:1.7em">Insert Designation Here</p>
				</div>
				<div class="row">
					<h2 class="text-center"><strong>Qualification</strong></h1>
					<ul class="list-unstyled" style="font-size:1.4em">
						<li><i class="fa fa-chevron-right pr-10 text-colored" style="margin-left: 3%;"></i>Qualification #1</li>
						<li><i class="fa fa-chevron-right pr-10 text-colored" style="margin-left: 3%;"></i>Qualification #2</li>
						<li><i class="fa fa-chevron-right pr-10 text-colored" style="margin-left: 3%;"></i>Qualification #3</li>
						<li><i class="fa fa-chevron-right pr-10 text-colored" style="margin-left: 3%;"></i>Qualification #4</li>
						<li><i class="fa fa-chevron-right pr-10 text-colored" style="margin-left: 3%;"></i>Qualification #5</li>
					</ul>
				</div>
				<div class="row" style="height: 160px;">
					<h2 class="text-center"><strong>Experience</strong></h1>
					<div class="stats">
						<div class="counting text-center" data-count="8">0</div>
						<h5 class="text-center">Years</h5>
					</div>
				</div>
				<div class="row">
					<h2 class="text-center"><strong>Area of Interest</strong></h1>
					<p class="lead text-center" style="margin-left: 3%;">Ad culpa qui fugiat enim culpa eiusmod labore. Nostrud reprehenderit nisi velit in pariatur cillum nostrud pariatur. Culpa laborum excepteur aliquip pariatur id enim commodo mollit eu tempor officia sint elit tempor. Lorem culpa commodo in nulla ex. Voluptate proident reprehenderit incididunt deserunt elit cillum non. Do sit anim mollit deserunt incididunt nostrud qui eiusmod anim nisi do sint quis consectetur. Officia eu magna cupidatat nostrud laboris sunt enim exercitation labore officia.</p>
				</div>
				<div class="row">
					<h2 class="text-center"><strong>Workshops and Training Attended</strong></h1>
					<ul class="list-unstyled" style="font-size:1.4em">
						<li><i class="fa fa-chevron-right pr-10 text-colored" style="margin-left: 3%;"></i>Workshop #1</li>
						<li><i class="fa fa-chevron-right pr-10 text-colored" style="margin-left: 3%;"></i>Workshop #2</li>
						<li><i class="fa fa-chevron-right pr-10 text-colored" style="margin-left: 3%;"></i>Workshop #3</li>
						<li><i class="fa fa-chevron-right pr-10 text-colored" style="margin-left: 3%;"></i>Workshop #4</li>
						<li><i class="fa fa-chevron-right pr-10 text-colored" style="margin-left: 3%;"></i>Workshop #5</li>
					</ul>
				</div>
				<div class="row">
					<h2 class="text-center"><strong>Publications</strong></h1>
					<ul class="list-unstyled" style="font-size:1.4em">
						<li><i class="fa fa-chevron-right pr-10 text-colored" style="margin-left: 3%;"></i>Publications #1</li>
						<li><i class="fa fa-chevron-right pr-10 text-colored" style="margin-left: 3%;"></i>Publications #2</li>
						<li><i class="fa fa-chevron-right pr-10 text-colored" style="margin-left: 3%;"></i>Publications #3</li>
						<li><i class="fa fa-chevron-right pr-10 text-colored" style="margin-left: 3%;"></i>Publications #4</li>
						<li><i class="fa fa-chevron-right pr-10 text-colored" style="margin-left: 3%;"></i>Publications #5</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
