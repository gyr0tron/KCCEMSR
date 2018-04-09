@extends('layouts.master')
@section('pre')
	@php
@endphp
<style media="screen">
</style>
@endsection
@section('content')
	@if (isset($no_download))
		<a href="{{$url}}" id="notification"><i class="fa fa-download"></i></a>
	@endif
	<iframe id="viewer" src="http://docs.google.com/viewer?url={{$url}}&embedded=true" width="100%" height="300" style="border: none;"></iframe>
@endsection
@section('post')
	<script type="text/javascript">
	$('#viewer').height($(document).height() - $('.header').height());
	$("#viewer").css('margin-top', $('.header').height() + 17);
	</script>
@endsection
