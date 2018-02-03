@extends('layouts.master')
@section('pre')
	@php
	$title = "Syllabus";
	$menu_item = 'library';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="row">
				<h1 class="text-center"><strong><span>{{$title}}</span></strong></h1>
				<div class="col-md-12">
									
					<button class="accordion active"><strong style="text-transform: none;">Humanities and Applied Sciences</strong></button>
					<div class="panel show">
						<ul class="list-unstyled resp-text-sub align-marg">
							<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="">Syllabus</a></li>
							<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="">Syllabus</a></li>
						</ul>
					</div>

					<button class="accordion"><strong style="text-transform: none;">Computer Engineering</strong></button>
					<div class="panel">
						<ul class="list-unstyled resp-text-sub align-marg">
							<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="">Syllabus</a></li>
							<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="">Syllabus</a></li>
						</ul>
					</div>

					<button class="accordion"><strong style="text-transform: none;">Electronics Engineering</strong></button>
					<div class="panel">
						<ul class="list-unstyled resp-text-sub align-marg">
							<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="">Syllabus</a></li>
							<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="">Syllabus</a></li>
						</ul>
					</div>

					<button class="accordion"><strong style="text-transform: none;">Electronics &amp; Telecommunication</strong></button>
					<div class="panel">
						<ul class="list-unstyled resp-text-sub align-marg">
							<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="">Syllabus</a></li>
							<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="">Syllabus</a></li>
						</ul>
					</div>

					<button class="accordion"><strong style="text-transform: none;">Information Technology</strong></button>
					<div class="panel">
						<ul class="list-unstyled resp-text-sub align-marg">
							<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="">Syllabus</a></li>
							<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="">Syllabus</a></li>
						</ul>
					</div>

					<button class="accordion"><strong style="text-transform: none;">MMS</strong></button>
					<div class="panel">
						<ul class="list-unstyled resp-text-sub align-marg">
							<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="">Syllabus</a></li>
							<li><i class="fa fa-chevron-right pr-10 text-colored align-marg"></i><a href="">Syllabus</a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
