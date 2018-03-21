@php
$file = App\FileUpload::where('type',$action)->first();
@endphp
<div class="row">
  <div class="col-xs-12">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">All {{$action_name}}</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="events-table" class="table table-bordered table-hover table-striped datatable-full">
          <thead>
            <tr>
              <th width="10%">#</th>
              <th width="20%">Name</th>
              <th width="20%">Actions</th>
            </tr>
          </thead>
          <tbody>
            @php
            $no=1;
            @endphp
            @foreach (App\FileUpload::where('type', $action)->orderBy('id','desc')->get() as $file)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$file->name}}</td>
                <td>
                  <a class="btn btn-sm btn-danger btn-table " onclick="dashboard.removeYesNo('Are you sure you want to remove {{$file->name}} ?', '/api/admin/admission/{{$action}}/remove', {{$file->id}})"><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              @php
              $no++;
              @endphp
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th width="10%">#</th>
              <th width="20%">Name</th>
              <th width="20%">Actions</th>
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
<div class="row">
  <div class="col-xs-12">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Add New</h3>
      </div>
      <div class="box-body">
        <form id="form-aicte-affiliation" action="/api/admin/admission/{{$action}}" method="post" enctype="multipart/form-data" data-form="sr">
          <div class="form-group">
            <label class="control-label col-sm-2" for="title">Title:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="title" name="title">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="description">File:</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" id="file" name="file">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-4">
              <button type="submit" class="btn btn-primary btn-wide">Upload</button>
            </div>
          </div>
          @if ($file)
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-4">
                @php
                $name = App\User::find($file->updated_by)->fullname;
                $date = $file->updated_at->diffForHumans();
                @endphp
                <span>Last updated by {{$name}} , {{$date}}.</span>
              </div>
            </div>
          @endif
        </form>
      </div>
    </div>
  </div>
</div>
