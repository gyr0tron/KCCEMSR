<div class="box box-primary">
  <div class="box-header">
    <h3 class="box-title">Exam results</h3>
  </div>
  <div class="box-body">
    <table id="academics-staff-notices" class="table table-bordered table-hover datatable-full">
      <thead>
        <tr>
          <th width="50%">Name</th>
          <th width="20%">Download</th>
          <th width="20%">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach (App\FileUpload::where("type","exam-results")->get() as $fp)
          <tr>
            <td>{{$fp->name}}</td>
            <td><a href="{{$fp->getUrl()}}">Download</a></td>
            <td><a class="btn btn-sm btn-danger btn-table" onclick=""><i class="fa fa-trash-o"></i></a></td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th width="50%">Name</th>
          <th width="20%">Download</th>
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
    <form id="form-staff-notices" action="/api/admin/academics/exam-results/add" method="post" enctype="multipart/form-data" class="form-horizontal" data-form="sr">
      <div class="form-group">
        <label class="control-label col-sm-2" for="title">Name:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="name" name="name">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="file">File:</label>
        <div class="col-sm-9">
          <input type="file" class="form-control" id="file" name="file">
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
