<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
</head>
<body>
  @yield('content')
  <br/>
  <br/>
  <p>For more infomration contact {{Setting::get('contact-email')}}</p>
</body>
</html>
