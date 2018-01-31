<div class="row">
  <div class="col-xs-12">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">All Posts</h3>
      </div>
      <div class="box-body">
        <table id="committees-table" class="table table-bordered table-hover table-responsive datatable-full">
          <thead>
            <tr>
              <th width="20%">Title</th>
              <th width="10%">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach (App\JobList::all() as $job)
              <tr>
                <td>{{$job->name}}</td>
                <td>
                  {{-- <a class="btn btn-sm btn-warning btn-table" href="{{route('admin_committees_edit', $job->id)}}"><i class="fa fa-pencil"></i></a> --}}
                  <a class="btn btn-sm btn-danger btn-table" onclick="dashboard.removeYesNo('Are you sure you want to remove {{$job->name}}?', '/api/admin/career/remove', {{$job->id}})"><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th width="20%">Title</th>
              <th width="10%">Actions</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
  <div class="col-xs-12">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Add New</h3>
      </div>
      <div class="box-body">
        <form id="form-job-add" action="/api/admin/career/add" method="post" enctype="multipart/form-data" class="form-horizontal" data-form="sr">
          <div class="form-group">
            <label class="control-label col-sm-2" for="name">Title:</label>
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
  </div>
</div>
