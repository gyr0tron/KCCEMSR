@extends('layouts.master2')
@section('pre')
  @php
  $title = "Contact Messages";
  $menu_item = 'messages';
@endphp
@endsection
@section('content')
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
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">All Messages</h3>
          </div>
          <div class="box-body">
            <table id="messages-table" class="table table-bordered table-hover datatable-full">
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
                        <button type="button" class="btn btn-sm btn-danger" style="margin-right:10px;" onclick="dashboard.removeYesNo('Are you sure you want to delete this message ?', '/api/admin/message/delete',{{$message->id}})">Delete</button>
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
        </div>

        @if (Auth::user()->is_admin())
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Contact Details</h3>
            </div>
            <div class="box-body">
              <form id="form-newevent" action="/api/admin/contact/edit" method="post" class="form-horizontal" data-form="sr">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="address">Address:</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" id="address" name="address" rows="8" cols="80">{{setting('contact-address')}}</textarea>
                    <p class="help-block"></p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Email:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="email" name="email" value="{{setting('contact-email')}}">
                    <p class="help-block"></p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="phone">Phone:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="phone" name="phone" value="{{setting('contact-phone')}}">
                    <p class="help-block"></p>
                  </div>
                </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-4">
                      <button type="submit" class="btn btn-primary btn-wide">Save</button>
                    </div>
                  </div>
                </form>

            </div>
          </div>
        @endif
      </div>
    </div>
  </section>
@endsection
@section('post')
@endsection
