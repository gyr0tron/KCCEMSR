@extends('layouts.master')
@section('pre')
  @php
  $title = "404 Not Found";
  $menu_item = '404';
@endphp
<style media="screen">
.error-template {padding: 40px 15px;text-align: center;}
.error-actions {margin-top:15px;margin-bottom:15px;}
.error-actions .btn { margin-right:10px; }
</style>
@endsection
@section('content')
  <div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
    <div class="container main-content">
      <div class="row">
        <div class="col-md-12">
          <div class="error-template">
            <h1>Oops!</h1>
            <h2>404 Not Found</h2>
            <div class="error-details">
              Sorry, an error has occured, Requested page not found!
            </div>
            <div class="error-actions">
              <a href="/" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                Take Me Home </a><a href="/#contact" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact us </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection
  @section('post')
    <script type="text/javascript">
    $( document ).ready(function() {
      setTimeout(function () {
        window.location = "/";
      }, 5000);
    });
    </script>
  @endsection
