@extends('layouts.master')
@section('pre')
	@php
	$title = "Staff Notices";
	$menu_item = 'about';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content">
			<div class="row">
				<h1>Staff Notices</h1>
				<ul>
					@foreach (App\FileUpload::where('type','staff-notices')->get() as $file)
						<li><a href="{{route('staff-notices-id', $file->id)}}">{{$file->name}}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
