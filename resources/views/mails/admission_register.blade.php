@extends('mails.master')
@section('title')
  Admission Register
@endsection
@section('content')
  Hello {{$user->fullname}}<br>
  Welcome to KC College of Engineering, please click the link to verify your account.
  <a href="{{route('verify')}}?token={{$ev->token}}">Verify</a>
@endsection
