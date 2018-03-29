@extends('mails.master')
@section('title')
  Admission Register
@endsection
@section('content')
  Hello {{$user->fullname}}<br>
  <a href="{{route('verify')}}?token={{$ev->token}}">Verify</a>
@endsection
