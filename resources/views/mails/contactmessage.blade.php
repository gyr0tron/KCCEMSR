@extends('mails.master')
@section('title')
  [kccemsr.edu.in] New message received.
@endsection
@section('content')
  <p>
    <b>From:</b> {{$contact->name}}<br>
    <b>Mail:</b> {{$contact->email}}<br>
  </p>
  <p>{{$contact->message}}</p>
@endsection
