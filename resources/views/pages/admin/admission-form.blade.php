@extends('layouts.master2')
@section('pre')
  @php
  $title = "Admission Forms";
  $menu_item = 'admission_form';
@endphp
@endsection
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Admission Forms
      <small>Manage admission Forms</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route("admin_dashboard")}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a class="active">Admission Forms</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">All Admission Forms</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="users-table" class="table table-bordered table-hover  datatable-full">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Date</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach (App\User::where('type','1')->get() as $user)
                  @php
                    $admission = App\Admission::where('userid', $user->id)->where('completed', '1')->first();
                    if(!$admission) continue;
                    $data = json_decode($admission->data);
                  @endphp
                  <tr>
                    <td>{{strtoupper($data->surname . " " . $data->firstname . " " . $data->fathername . " " . $data->mothername)}}</td>
                    <td>{{$admission->updated_at}}</td>
                    <td><a href="{{route('admin_admission_form_id', $admission->id)}}" class="btn btn-sm btn-info" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                  </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Date</th>
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
