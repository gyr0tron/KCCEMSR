
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{setting('break-title','Service Unavailable')}}</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <style>
  html, body {
    background-image: url('{{asset('images/bg-image-1.jpg')}}');
    color: #fff;
    font-family: 'Raleway', sans-serif;
    font-weight: 100;
    height: 100vh;
    margin: 0;
  }

  .full-height {
    height: 100vh;
  }

  .flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
  }

  .position-ref {
    margin: 0px;
    position: absolute;
    top: 40%;
    font-size: 1em;
  }

  .content {
    text-align: center;
  }

  .title {
    font-size: 84px;
  }
  #particles-js{
    background-color: #000000b0;
  }
  </style>
</head>
<body>
  <div id="particles-js" class="title flex-center full-height  ">
    {{-- <p class="position-ref">Be right back.</p> --}}
    <h1 class="position-ref">We are <span
      class="txt-rotate"
      data-period="2000"
      data-rotate='["simple.", "creative.", "saints of technology!", "developers.", "nerdy." ]'></span>
    </h1>
  </div>
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
  <script>
  particlesJS.load('particles-js', 'js/particles.json', function(){
  });
  </script>
</body>
</html>
