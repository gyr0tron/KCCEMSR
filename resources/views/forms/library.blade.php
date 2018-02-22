<div class="box box-primary">
  <div class="box-header">
    <h3 class="box-title">{{$action_name}}</h3>
  </div>
  <div class="box-body">
    <table id="academics-staff-notices" class="table table-responsive table-bordered table-hover datatable-full">
      <thead>
        <tr>
          <th width="20%">Name</th>
          @if ($action != "e-books")
            <th width="20%">Department</th>
            <th width="20%">Year</th>
          @endif
          @if ($action=="question-papers")
            <th width="20%">Sem</th>
            <th width="40%">YOE</th>
          @endif
          <th width="20%">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach (App\FileUpload::where("type",$action)->get() as $fp)
          <tr>
            <td>{{$fp->name}}</td>
            @if ($action != "e-books")
              <td>{{$fp->department}}</td>
              <td>{{$fp->getYear()}}</td>
            @endif
            @if ($action=="question-papers")
              <td>{{$fp->sem}}</td>
              <td>{{$fp->section}}</td>
            @endif
            <td>
              <a class="btn btn-sm btn-info btn-table" onclick=""><i class="fa fa-eye"></i></a>
              <a class="btn btn-sm btn-danger btn-table" onclick="dashboard.removeYesNo('Are you sure you want to remove {{$fp->name}}?', '/api/admin/library/{{$action}}/remove', {{$fp->id}})"><i class="fa fa-trash-o"></i></a>
            </td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th width="50%">Name</th>
          @if ($action != "e-books")
            <th width="20%">Department</th>
            <th width="20%">Year</th>
          @endif
          @if ($action=="question-papers")
            <th width="20%">Sem</th>
            <th width="40%">YOE</th>
          @endif
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
    <form id="form-staff-notices" action="/api/admin/library/{{$action}}/add" method="post" enctype="multipart/form-data" class="form-horizontal" data-form="sr">
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name:</label>
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
      @if ($action != "e-books")
        <div class="form-group">
          <label class="control-label col-sm-2" for="year">Department:</label>
          <div class="col-sm-9">
            <select class="form-control" id="department" name="department">
              @foreach (App\Department::all() as $dep)
                <option value="{{$dep->url}}">{{$dep->name}}</option>
              @endforeach
            </select>
            <p class="help-block"></p>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="year">Year:</label>
          <div class="col-sm-9">
            <select class="form-control" id="year" name="year">
              <option value="1">FE</option>
              <option value="2">SE</option>
              <option value="3">TE</option>
              <option value="4">BE</option>
            </select>
            <p class="help-block"></p>
          </div>
        </div>
      @endif

      @if ($action=="question-papers")
        <div class="form-group">
          <label class="control-label col-sm-2" for="sem">Sem:</label>
          <div class="col-sm-9">
            <select class="form-control" id="sem" name="sem">
              @for ($i=1; $i <= 8; $i++)
                <option value="{{$i}}">{{$i}}</option>
              @endfor
            </select>
            <p class="help-block"></p>
          </div>
        </div>
      @endif
      @if ($action=="question-papers")
        <div class="form-group">
          <label class="control-label col-sm-2" for="section">Year of Exam:</label>
          <div class="col-sm-9">
            <select class="form-control" id="section" name="section">
              @foreach (App\FileUpload::getSectionArray() as $sec)
                <option value="{{$sec}}">{{$sec}}</option>
              @endforeach
            </select>
          </div>
        </div>
      @endif
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
          <button type="submit" class="btn btn-primary btn-wide">Add</button>
        </div>
      </div>
    </form>
  </div>
</div>
