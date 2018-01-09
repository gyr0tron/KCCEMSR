@extends('layouts.master')
@section('pre')
	@php
	$title = "Infrastructure & Activities";
	$menu_item = 'about';
@endphp
@endsection
@section('content')
	<div class="container main-content">
		@php
		$infrastructure = App\Infrastructure::all();
		$total = count($infrastructure);
		@endphp
		@for ($i=0; $i < $total; $i++)
			<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
				<div class="row">
					@if ($i/2 == 0)
						<div class="col-md-6">
							<img src="{{$infrastructure[$i]->getUrl()}}"/>
						</div>
						<div class="col-md-6">
							<h2 class="title"><span>{{$infrastructure[$i]->name}}</span></h2>
							{{$infrastructure[$i]->description}}
						</div>
					@else
						<div class="col-md-6">
							<h2 class="title"><span>{{$infrastructure[$i]->name}}</span></h2>
							{{$infrastructure[$i]->description}}
						</div>
						<div class="col-md-6">
							<img src="{{$infrastructure[$i]->getUrl()}}"/>
						</div>
					@endif
				</div>
			</div>
			<div class="space" style="margin-top:50px"></div>
		@endfor
	</div>
@endsection
@section('post')
@endsection
