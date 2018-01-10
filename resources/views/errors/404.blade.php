@extends('layouts.master')
@section('pre')
@php
$title = "404 Not Found";
$menu_item = '404';
@endphp
@endsection
@section('content')
{{-- Start your content here --}}
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
                background-color: #fff;
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
                font-weight: 300;
                text-shadow: 3px 3px 4px #000000;
            }

            @media (max-width: 900px){
              .position-ref {
                margin: 0px;
                position: absolute;
                top: 20%;
                font-size: 0.7em;
                font-weight: 300;
                text-shadow: 3px 3px 4px #000000;
              }
            }

            .position-ref2 {
              margin: 0px;
              font-size: 0.5em;
              position: absolute;
              top: 60%;
              font-weight: 100;
              text-shadow: 3px 3px 10px #000000;
            }

            @media (max-width: 900px){
              .position-ref2 {
                margin: 0px;
                font-size: 0.5em;
                position: absolute;
                top: 50%;
                font-weight: 100;
                text-shadow: 3px 3px 10px #000000;
              }
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            #particles-js{
                background-color: #1a82f7;
                background: url(images/linear_bg_2.png);
                background-repeat: repeat-x;

                /* Safari 4-5, Chrome 1-9 */
                background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#1a82f7), to(#2F2727));

                /* Safari 5.1, Chrome 10+ */
                background: -webkit-linear-gradient(top, #2F2727, #1a82f7);

                /* Firefox 3.6+ */
                background: -moz-linear-gradient(top, #2F2727, #1a82f7);

                /* IE 10 */
                background: -ms-linear-gradient(top, #2F2727, #1a82f7);

                /* Opera 11.10+ */
                background: -o-linear-gradient(top, #2F2727, #1a82f7);
            }
        </style>
    </head>
    <body>
        <div id="particles-js" class="title flex-center full-height  ">
            <p class="position-ref">404 Page Not Found</p>
            <p class="position-ref2">The link you clicked may be broken or the page may have been removed.</p>
        </div>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script>
            particlesJS.load('particles-js', '/js/particles.json', function(){
            });
        </script>
    </body>
</html>

@endsection
@section('post')
@endsection
