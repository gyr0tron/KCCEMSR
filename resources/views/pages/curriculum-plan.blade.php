@extends('layouts.master')
@section('pre')
	@php
	$title = "Curriculum Plan";
	$menu_item = 'academics';
@endphp
@endsection
@section('content')
	<div id="curriculum-plan" class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<h1 class="text-center title"><span>Curriculum Plan</span></h1>
			<table class="table-fill" style="max-width: max-content;">
				<thead>
					<tr>
						<th>Sr. No</th>
						<th>Date</th>
						<th>Activity</th>
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
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection
@section('post')
@endsection
