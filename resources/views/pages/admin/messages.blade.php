@extends('layouts.master2')
@section('pre')
  @php
  $title = "Contact Messages";
  $menu_item = 'messages';
@endphp
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Contact Messages
      <small>Manage Messages</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a class="active">Messages</a></li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">All Messages</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="users-table" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th width="20%">Name</th>
                  <th width="20%">Email</th>
                  <th width="40%">Message</th>
                  <th width="10%">Time</th>
                  <th width="10%">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach (App\Message::all() as $message)
                  <tr>
                    <td>{{$message->name}}</td>
                    <td>{{$message->email}}</td>
                    <td><span>{{$message->message}}</span></td>
                    <td>{{$message->created_at->diffForHumans()}}</td>
                    <td>
                      <button type="button" class="btn btn-sm btn-primary" style="margin-right:10px;" data-toggle="modal" data-target="#MessageModal-{{$message->id}}">View</button>
                      @if (Auth::user()->is_admin())
                        <button type="button" class="btn btn-sm btn-danger" style="margin-right:10px;" onclick="dashboard.deleteMessage({{$message->id}})">Delete</button>
                      @endif
                    </td>
                    @include('forms.viewmessage',["message"=>$message])
                  </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Message</th>
                  <th>Time</th>
                  <th>Actions</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
@endsection
@section('post')
@endsection
