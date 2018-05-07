<!DOCTYPE html>
<!-- Made by: Simmar Kalsi and Bhaktij Koli -->
@yield('pre')
<html lang="en">
<head>
  @if (config('app.env') == 'production')
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113452648-1"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'UA-113452648-1');</script>
  @endif
  <meta charset="utf-8">
  <meta name="robots" content="index, follow">
  <meta name="description" content="K.C. College of Engineering (KCCOE) is a private engineering college located in Thane, Mumbai, Maharashtra, India. The college is affiliated to the University of Mumbai and approved by Directorate of Technical Education (DTE), Maharashtra State and All India Council of Technical Education (AICTE), New Delhi. KCCOE offers undergraduate courses of study in engineering. The four year undergraduate programme leads to the degree of Bachelor of Engineering (BE).">
  <meta name="keywords" content="K.C. College,kccoe,kc college of engineering,kc college thane, kc engineering college">
  <meta name="author" content="Simmar Kalsi, Bhaktij Koli">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $title or config('app.name') }}</title>
  <link rel="icon" href="{{url('favicon.ico')}}" type="image/ico" sizes="16x16">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/animations.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/select2.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/select2-bootstrap.css') }}">
</head>
<body class="no-trans">
  <div class="scrollToTop"><i class="icon-up-open-big"></i></div>
  @if (!isset($nonav))
    @include('layouts.nav')
    @include('layouts.nav-mobile')
  @endif
  @yield('content')
  @include('layouts.footer')
  <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.backstretch.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.appear.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/template.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/axios.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/contact.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/formhandler.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/select2.full.js') }}"></script>
  @yield('post')
</body>
</html>
