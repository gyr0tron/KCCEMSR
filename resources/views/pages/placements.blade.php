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
			{{-- <h1 class="title"><h1> --}}
			<placement-stats></placement-stats>
		</div>
	</div>
@endsection
@section('post')
	<script type="text/javascript" src="js/chart.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/vue.js') }}"></script>
@endsection
