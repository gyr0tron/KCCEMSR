@extends('mails.master')
@section('title')
  Welcome
@endsection
@section('content')
  Welcome {{$user->fullname}}<br>
  Your account has been verified you can now start filling your admission application form.
  Logon to <a href="{{route("admissions-apply")}}">{{route('admissions-apply')}}</a>
@endsection
