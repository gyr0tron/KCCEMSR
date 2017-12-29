@extends('layouts.master')
@section('pre')
	@php
	$title = "Exam Results";
	$menu_item = 'about';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content">
			<div class="row">
				<h1>Exam Results</h1>
				<ul>
					@foreach (App\FileUpload::where('type','exam-results')->get() as $file)
						<li><a href="{{route('exam-results-id', $file->id)}}">{{$file->name}}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
