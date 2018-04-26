@extends('mails.master')
@section('title')
  Grievance Redressal
@endsection
@section('content')
We have received a new grievance redressal
</br>
Name: {{$name}}</br>
Email: {{$email}}</br>
Phone: {{$phone}}</br>
Subject: {{$topic}}</br>
<p>{{$data}}</p>
@endsection
