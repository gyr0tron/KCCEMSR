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
		</div>
	</div>
@endsection
@section('post')
@endsection
