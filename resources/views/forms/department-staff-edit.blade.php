@php
$staff = App\Staff::where('id',$edit)->first();
if(!$staff) abort('404',"Not found!");
@endphp
<div class="box box-primary">
  <div class="box-header">
    <h3 class="box-title">Edit Staff</h3>
  </div>
  <div class="box-body">
    <form id="form-department-staff" action="/api/admin/department/staff/edit" method="post" enctype="multipart/form-data" class="form-horizontal" data-form="sr">
      <input type="hidden" name="department" value="{{$dep->url}}">
      <input type="hidden" name="staff-id" value="{{$staff->id}}">
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="name" name="name" value="{{$staff->name}}">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="display">Display Name:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="display" name="display" value="{{$staff->displayname}}">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-9">
          <input type="email" class="form-control" id="email" name="email" value="{{$staff->email}}">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="image">Photo:</label>
        <div class="col-sm-9">
          <img src="{{$staff->getUrl()}}" class="img-thumbnail" width="172"/>
          <br />
          <br />
          <input type="file" class="form-control" id="image" name="image" accept="image/*">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="designation">Designation:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="designation" name="designation" value="{{$staff->designation}}">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="qualification">Qualification:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="qualification" name="qualification" value="{{$staff->qualification}}">
          <p class="help-block">"," indicates new line.</p>
        </div>
      </div>
      <div class="form-group has-feedback">
        <label class="control-label col-sm-2" for="experience">Experience:</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" id="experience" name="experience" style="padding-right: 50px;" value="{{$staff->experience}}">
          <span class="form-control-feedback" style="right: 25px;">Years</span>
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="interest">Area of Interest:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="interest" name="interest" value="{{$staff->interest}}">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="workshops">Workshops and Training Attended:</label>
        <div class="col-sm-9">
          <textarea class="form-control" id="workshops" name="workshops" rows="4">{{$staff->workshops}}</textarea>
          <p class="help-block">"." indicates new line.</p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="publications">Publications:</label>
        <div class="col-sm-9">
          <textarea class="form-control" id="publications" name="publications" rows="4">{{$staff->publications}}</textarea>
          <p class="help-block">"." indicates new line.</p>
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
@section('post')
  <script>
  $(function () {
    $('#name').keyup(function(event) {
      $('#display').val('Prof. ' + this.value);
    });
  })
  </script>
@endsection
