@extends('layouts.master')
@section('pre')
	@php
	$menu_item = 'exam';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="row">
				<h1 class="text-center"><strong><span>{{$title}}</span></strong></h1>
<hr>
				@if ($type == "exam-notices")
					<ul class="list-unstyled resp-text-sub" style="margin-left: 12px;">
						@foreach (App\FileUpload::where('type',$type)->orderBy('created_at', 'DESC')->get() as $fp)
							<li><i style="float: left;margin-top: 7px;" class="fa fa-chevron-right pr-10 text-colored"></i><a style="display: block;" href="{{route('exam-id', [$action, $fp->id])}}"><p style="display:flex;">{{$fp->name}}</p></a><small>&nbsp;&nbsp;{{$fp->created_at->format('d/m/Y')}}</small></li>
						@endforeach
					</ul>
				@else
					@foreach (App\Department::orderBy('id', 'ASC')->get() as $dep)
						<h2 class="title text-left resp-text-head"><strong>{{$dep->name}}</strong></h2>
				<hr>
						<ul class="list-unstyled resp-text-sub">
							@foreach (App\FileUpload::where('type',$type)->where('department',$dep->url)->orderBy('id', 'DESC')->get() as $fp)
								<li><i class="fa fa-chevron-right pr-10 text-colored"></i><a href="{{route('exam-id', [$action, $fp->id])}}">{{$fp->name}}</a></li>
							@endforeach
						</ul>
						<div class="space"></div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
