@extends('mails.master')
@section('title')
  Welcome
@endsection
@section('content')
  Welcome {{$user->fullname}}<br>
  Get started by filling the application form
@endsection
