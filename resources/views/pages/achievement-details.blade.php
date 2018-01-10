@extends('layouts.master')
@section('pre')
	@php
	$title = $achivement->name;
	$menu_item = 'achievement';
@endphp
@endsection
@section('content')
<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
	<div class="container main-content-sub">
		<h1 id="about" class="title text-center"><span>Achievement Name</span></h1>
		<div class="row" id="slider">
			<div class="col-md-5 col-md-5 col-md-12">
				<div style="width:100%;">
					<img src="http://placehold.it/1200x800" style="margin: 0 auto;" alt="">
				</div>
			</div>
			<div class="col-md-7 col-md-7 col-md-12">
				<div class="row">
					<h2 class="title text-left resp-text-head title-marg-resp align-marg">Title</h1>
					<p class="text-left align-marg">Proident in reprehenderit in sunt aliqua occaecat ipsum sunt cillum velit elit voluptate velit magna. Occaecat magna ullamco sint ut sunt exercitation reprehenderit culpa. Deserunt sit culpa voluptate labore velit amet cupidatat.</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('post')
@endsection
