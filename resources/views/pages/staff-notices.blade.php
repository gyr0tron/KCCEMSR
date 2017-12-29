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
				<h1 class="text-center"><strong>Staff Notices</strong></h1>
				<ul class="list-unstyled" style="font-size:1.4em">
					@foreach (App\FileUpload::where('type','staff-notices')->get() as $file)
						<li><a href="{{route('staff-notices-id', $file->id)}}"><i class="fa fa-chevron-right pr-10 text-colored" style="margin-left: 3%;"></i>{{$file->name}}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
