@extends('layouts.master')
@section('pre')
	@php
	$menu_item = 'careeratkc';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content">
			<h1 class="text-center title" id="portfolio"><span>Career At KC</span></h1>
		</div>
	</div>
@endsection
@php
function is_in_type($name, $types) {
	foreach ($types as $type) {
		if($name == $type->url)
		return true;
	}
	return false;
}
@endphp
@section('post')
@endsection
