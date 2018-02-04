<!DOCTYPE html>
@yield('pre')
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $title or config('app.name') }}</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/animations.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/AdminLTE.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/skins/_all-skins.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap2-toggle.min.css') }}">
  @yield('styles')
</head>
<body class="skin-{{Auth::check()?Auth::user()->skin:"blue"}} sidebar-mini" style="background:#ecf0f5">
  <div class="wrapper">
    @include('layouts.nav2')
    <div class="content-wrapper">
    @yield('content')
  </div>
  </div>
  <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/axios.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/formhandler.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/adminlte.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/dashboard.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap-show-password.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.fancybox.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap2-toggle.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery-sortable.js') }}"></script>
  @yield('post')
</body>
</html>
