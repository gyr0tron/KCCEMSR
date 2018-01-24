@extends('layouts.master')
@section('pre')
	@php
	$title = "Question Papers";
	$menu_item = 'library';
@endphp
@endsection
@section('content')
	<div id="app" class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="row">
				<h1 class="text-center"><strong><span>Question Papers</span></strong></h1>
				<div class="space"></div>
				<question-papers></question-papers>
			</div>
		</div>
	</div>
@endsection
@section('post')
	<script type="text/javascript" src="{{ asset('js/vue.js') }}"></script>
@endsection
