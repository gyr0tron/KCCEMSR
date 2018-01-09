@extends('layouts.master')
@section('pre')
	@php
	$title = "Infrastructure & Activities";
	$menu_item = 'about';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			@php
			$publications = App\Publication::all();
			$total = count($publications);
			@endphp
			@for ($i=0; $i < $total; $i++)
				<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
					<div class="row">
						<div class="col-md-6" {!!$i/2==0?'':'style="float:right"'!!}>
							<img src="{{$publications[$i]->getUrl()}}"/>
						</div>
						<div class="col-md-6">
							<h2 class="title"><span>{{$publications[$i]->name}}</span></h2>
							{{$publications[$i]->description}}
						</div>
					</div>
				</div>
				<div class="space" style="margin-top:50px"></div>
			@endfor
		</div>
	</div>
@endsection
@section('post')
@endsection
