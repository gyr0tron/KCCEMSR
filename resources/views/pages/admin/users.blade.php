@extends('layouts.master2')
@section('pre')
  @php
  $title = "Users";
  $menu_item = 'users';
@endphp
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Users
      <small>Manage users</small>
      <button type="button" name="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#user-addnew">Add new</button>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a class="active">Users</a></li>
    </ol>
  </section>

  {{-- Add New --}}
  <div id="user-addnew" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New User</h4>
        </div>
        <div class="modal-body">
          @include('forms.newuser')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">All Users</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="users-table" class="table table-bordered table-hover  datatable-full">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach (App\User::where('type','0')->get() as $user)
                  <tr>
                    <td>{{$user->username}}</td>
                    <td>{{$user->fullname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->getRole()}}</td>
                    <td>
                      <a class="btn btn-warning btn-sm btn-table " href="{{route("admin_edituser", $user->id)}}"><i class="fa fa-pencil"></i></a>
                      @if ($user->id != 1)
                        <a class="btn btn-sm btn-danger btn-table " onclick="dashboard.removeYesNo('Are you sure you want to remove {{$user->fullname}} ?', '/api/admin/removeuser', {{$user->id}})"><i class="fa fa-trash-o"></i></a>
                      @endif
                    </td>
                  </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>Username</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
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
