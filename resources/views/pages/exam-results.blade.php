@extends('layouts.master')
@section('pre')
	@php
	$title = "Exam Results";
	$menu_item = 'about';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="row">
				<h1 class="text-center"><strong><span>Exam Results</span></strong></h1>
				<h2 class="title text-left resp-text-head align-marg"><strong>Department 1</strong></h1>
					<ul class="list-unstyled resp-text-sub align-marg">
								<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="">Dept 1 -> link 1</a></li>
								<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="">Dept 1 -> link 2</a></li>
					</ul>
				<h2 class="title text-left resp-text-head align-marg"><strong>Department 2</strong></h1>
					<ul class="list-unstyled resp-text-sub align-marg">
								<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="">Dept 2 -> link 1</a></li>
								<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="">Dept 2 -> link 2</a></li>
					</ul>
				<h2 class="title text-left resp-text-head align-marg"><strong>Department 3</strong></h1>
					<ul class="list-unstyled resp-text-sub align-marg">
								<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="">Dept 3 -> link 1</a></li>
								<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="">Dept 3 -> link 2</a></li>
					</ul>
				<h2 class="title text-left resp-text-head align-marg"><strong>Department 4</strong></h1>
					<ul class="list-unstyled resp-text-sub align-marg">
								<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="">Dept 4 -> link 1</a></li>
								<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="">Dept 4 -> link 2</a></li>
					</ul>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
