@extends('mails.master')
@section('title')
  Career At KC
@endsection
@section('content')
We have received a new application
</br>
<h3>{{$title}}</h3>
</br>
Name: {{$name}}</br>
Email: {{$email}}</br>
Phone: {{$phone}}</br>
@endsection
