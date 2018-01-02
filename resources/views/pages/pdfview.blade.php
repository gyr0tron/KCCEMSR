@extends('layouts.master')
@section('pre')
	@php
	$menu_item = 'academics';
@endphp
<style media="screen">
#viewer {
	margin-top: 131px;
}
</style>
@endsection
@section('content')
	<iframe id="viewer" src="http://docs.google.com/viewer?url={{$url}}&embedded=true" width="100%" height="300" style="border: none;"></iframe>
@endsection
@section('post')
	<script type="text/javascript">
	$('#viewer').height($(document).height() - $('.header').height());
	</script>
@endsection
