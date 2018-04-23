@extends('mails.master')
@section('title')
  Application submitted
@endsection
@section('content')
  Hello {{$user->fullname}}<br>
  Thank you for applying.
@endsection
