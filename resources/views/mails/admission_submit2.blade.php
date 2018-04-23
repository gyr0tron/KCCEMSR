@extends('mails.master')
@section('title')
  Application received
@endsection
@section('content')
  We have received a new application
</br>
  <a href={{route('admin_admission_form_id', $admission->id)}}>View</a>
@endsection
