@extends('layouts.master')
@section('pre')
	@php
	$title = "Syllabus";
	$menu_item = 'library';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="row">
				<h1 class="text-center"><strong><span>{{$title}}</span></strong></h1>
				<div class="col-md-12">
					@php
						$no = 0;
					@endphp
					@foreach (App\Department::orderBy('id',"ASC")->get() as $dep)
						<button class="accordion {{$no==0?'active':''}}"><strong style="text-transform: none;">{{$dep->name}}</strong></button>
						<div class="panel {{$no++==0?'show':''}}">
							<ul class="list-unstyled resp-text-sub" style="font-size:1em;margin-left:0px;margin-top:20px">
								@foreach (App\FileUpload::where('Department',$dep->url)->where('type','syllabus')->orderBy('sem','ASC')->get() as $fp)
									<li><i class="fa fa-chevron-right text-colored align-marg"></i>&nbsp;&nbsp;<a href="{{$fp->getUrl()}}">{{$fp->name}}</a></li>
								@endforeach
							</ul>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
