@extends('layouts.master')
@section('pre')
	@php
	$title = "Curriculum Plan";
	$menu_item = 'academics';
@endphp
@endsection
@section('content')
	<div id="curriculum-plan" class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div id="members" class="container main-content-sub tab-pane fade in">
			<h1 class="text-center title"><span>Curriculum Plan</span></h1>
			<table class="table">
				<thead>
					<tr>
						<th>Sr. No</th>
						<th>Date</th>
						<th>Activity</th>
						<th>Year</th>
					</tr>
				</thead>
				<tbody>
					@php
						$no = 1;
					@endphp
					@foreach (App\FileUpload::where('type', 'curriculum-plan')->orderBy('section','ASC')->get() as $fp)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$fp->section}}</td>
							<td>{{$fp->name}}</td>
							<td>{{$fp->department}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection
@section('post')
@endsection
