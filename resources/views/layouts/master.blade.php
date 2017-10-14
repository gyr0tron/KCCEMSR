<!DOCTYPE html>
@yield('pre')
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $title or config('app.name') }}</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
@include('layouts.nav')
<div id="app">
  @yield('content')
</div>
@include('layouts.footer')
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
@yield('post')
</body>
</html>
