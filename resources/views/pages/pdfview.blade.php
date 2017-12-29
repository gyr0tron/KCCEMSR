@extends('layouts.master')
@section('pre')
	@php
	$menu_item = 'academics';
@endphp
@endsection
@section('content')
	<div style="margin-top:131px">
	</div>
	<iframe src="http://docs.google.com/viewer?url={{$url}}&embedded=true" width="100%" height="100%" style="border: none;"></iframe>
@endsection
@section('post')
@endsection
