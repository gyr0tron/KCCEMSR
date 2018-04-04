@extends('layouts.master')
@section('pre')
	@php
	$title = "Print student Application";
	$menu_item = 'admissions';
	$nonav = true;
@endphp
@endsection
@section('content')
	<link rel="stylesheet" href="/css/gridforms.css">
	<script src="/js/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment-with-locales.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content">

		</div>
	</div>
@endsection
@section('post')
@endsection
