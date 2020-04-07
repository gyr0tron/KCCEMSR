@extends('mails.master')
@section('title')
  Welcome
@endsection
@section('content')
  Hello {{$name}}<br>
  You can register from below link
  <a href="https://forms.gle/FqpBM1LxzxRPhtSy5">Register Now</a>
@endsection
