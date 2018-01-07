@extends('layouts.master')
@section('pre')
	@php
	$title = $achivement->name;
	$menu_item = 'achievement';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content">
		</div>
	</div>
@endsection
@section('post')
@endsection
