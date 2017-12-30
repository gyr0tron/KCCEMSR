<div class="box box-primary">
  <div class="box-header">
    <h3 class="box-title">Staff</h3>
  </div>
  <div class="box-body">
    <table id="department-student-achievenments-table" class="table table-bordered table-hover">
      <thead>
        <tr>
          <th width="10%">Photo</th>
          <th width="20%">Name</th>
          <th width="20%">Designation</th>
          <th width="20%">Qualification</th>
          <th width="20%">Interest</th>
          <th width="30%">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach (App\Staff::where("department",$dep->url)->get() as $staff)
          <tr>
            <td><img src="{{$staff->getUrl()}}" alt="" width="60" height="60"></td>
            <td>{{$staff->name}}</td>
            <td>{{$staff->designation}}</td>
            <td>{{$staff->qualification}}</td>
            <td>{{$staff->interest}}</td>
            <td>
              <a class="btn btn-warning btn-sm btn-table" href=""><i class="fa fa-pencil"></i></a>
              <a class="btn btn-sm btn-danger btn-table" onclick="dashboard.removeYesNo('Are you sure you want to remove {{$staff->name}}?', '/api/admin/department/staff/remove', {{$staff->id}})"><i class="fa fa-trash-o"></i></a>
            </td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th width="10%">Photo</th>
          <th width="20%">Name</th>
          <th width="20%">Designation</th>
          <th width="20%">Qualification</th>
          <th width="20%">Interest</th>
          <th width="30%">Actions</th>
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
    <form id="form-department-staff" action="/api/admin/department/staff/add" method="post" enctype="multipart/form-data" class="form-horizontal" data-form="sr">
      <input type="hidden" name="department" value="{{$dep->url}}">
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="name" name="name">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="display">Display Name:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="display" name="display">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-9">
          <input type="email" class="form-control" id="email" name="email">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="image">Photo:</label>
        <div class="col-sm-9">
          <input type="file" class="form-control" id="image" name="image">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="designation">Designation:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="designation" name="designation">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="qualification">Qualification:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="qualification" name="qualification">
          <p class="help-block">"," indicates new line.</p>
        </div>
      </div>
      <div class="form-group has-feedback">
        <label class="control-label col-sm-2" for="experience">Experience:</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" id="experience" name="experience" style="padding-right: 50px;">
          <span class="form-control-feedback" style="right: 25px;">Years</span>
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="interest">Area of Interest:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="interest" name="interest">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="workshops">Workshops and Training Attended:</label>
        <div class="col-sm-9">
          <textarea class="form-control" id="workshops" name="workshops" rows="4"></textarea>
          <p class="help-block">"." indicates new line.</p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="publications">Publications:</label>
        <div class="col-sm-9">
          <textarea class="form-control" id="publications" name="publications" rows="4"></textarea>
          <p class="help-block">"." indicates new line.</p>
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
@section('post')
  <script>
  $(function () {
    $('#name').keyup(function(event) {
      $('#display').val('Prof. ' + this.value);
    });
  })
  </script>
@endsection
