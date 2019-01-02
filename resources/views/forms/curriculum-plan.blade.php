<div class="box box-primary">
  <div class="box-header">
    <h3 class="box-title">Curriculum Plan</h3>
  </div>
  <div class="box-body">
    <table id="curriculum-plan-table" class="table table-bordered table-hover datatable-full">
      <thead>
        <tr>
          <th width="10%">#</th>
          <th width="20%">Name</th>
          <th width="20%">Date</th>
          <th width="20%">Year</th>
          <th width="20%">Actions</th>
        </tr>
      </thead>
      <tbody>
        @php
          $no = 1;
        @endphp
        @foreach (App\FileUpload::where("type",'curriculum-plan')->orderBy('id','DESC')->get() as $fp)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$fp->name}}</td>
            <td>{{$fp->section}}</td>
            <td>{{$fp->department}}</td>
            <td>
              <a class="btn btn-sm btn-danger btn-table" onclick="dashboard.removeYesNo('Are you sure you want to remove {{$fp->name}}?', '/api/admin/academics/curriculum-plan/remove', {{$fp->id}})"><i class="fa fa-trash-o"></i></a>
            </td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th width="10%">#</th>
          <th width="20%">Name</th>
          <th width="20%">Date</th>
          <th width="20%">Year</th>
          <th width="20%">Actions</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<div class="box box-primary">
  <div class="box-header">
    <h3 class="box-title">Add New</h3>
  </div>
  <div class="box-body">
    <form id="form-curriculum-plan" action="/api/admin/academics/curriculum-plan/add" method="post" enctype="multipart/form-data" data-form="sr">
      {{ csrf_field() }}
      <div class="form-group">
        <label class="control-label col-sm-2" for="title">Title:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="title" name="title">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="date">Date:</label>
        <div class="col-sm-9">
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control pull-right" id="date" name="date">
          </div>
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="title">Year:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="year" name="year">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
          <button type="submit" class="btn btn-primary btn-wide">Upload</button>
        </div>
      </div>
    </form>
  </div>
</div>
