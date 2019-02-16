<div class="box box-primary">
  <div class="box-header">
    <h3 class="box-title">Student Placement</h3>
  </div>
  <div class="box-body">
    <table id="student-placement-table" class="table table-bordered table-hover datatable-full table-responsive">
      <thead>
        <tr>
          <th width="30%">Name</th>
          <th width="20%">Company</th>
          <th width="10%">Package</th>
          <th width="10%">Branch/Year</th>
          <th width="10%">Academic Year</th>
          <th width="10%">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach (App\Placement::all() as $placment)
          <tr>
            <td>{{$placment->name}}</td>
            <td>{{$placment->company}}</td>
            <td>{{$placment->package}}</td>
            <td>{{$placment->year}}</td>
            <td>{{$placment->academic_year}}</td>
            <td>
              <a class="btn btn-sm btn-danger" style="margin-right:10px;"
              onclick="dashboard.removeYesNo('Are you sure you want to remove {{$placment->name}} ?','/api/admin/placement/student-placement/remove',{{$placment->id}})"
              ><i class="fa fa-trash-o"></i></a>
            </td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th width="30%">Name</th>
          <th width="20%">Company</th>
          <th width="10%">Package</th>
          <th width="10%">Branch/Year</th>
          <th width="10%">Academic Year</th>
          <th width="10%">Actions</th>
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
    <form id="form-placement-student-add" action="/api/admin/placement/student-placement/add" method="post" enctype="multipart/form-data" class="form-horizontal" data-form="sr">
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="name" name="name">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="company">Company Name:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="company" name="company">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="package">Package:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="package" name="package">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="year">Branch-Year:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="year" name="year">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="academic_year">Academic Year:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="academic_year" name="academic_year">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
          <button type="submit" class="btn btn-primary btn-wide">Add</button>
        </div>
      </div>
    </form>
  </div>
</div>
