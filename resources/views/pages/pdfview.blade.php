@extends('layouts.master')
@section('pre')
	@php
	$menu_item = 'academics';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content">
			<div class="row">
					<iframe src="http://docs.google.com/viewer?url={{$url}}&embedded=true" width="100%" height="100%" style="border: none;"></iframe>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
