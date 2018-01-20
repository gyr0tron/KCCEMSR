<div class="row">
  <div class="col-xs-12">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">All Committees</h3>
      </div>
      <div class="box-body">
        <table id="committees-table" class="table table-bordered table-hover table-responsive datatable-full">
          <thead>
            <tr>
              <th width="30%"></th>
              <th width="20%">Name</th>
              <th width="20%">Description</th>
              <th width="10%">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach (App\Committee::all() as $committee)
              <tr>
                <td><img src="{{$committee->getUrl()}}" width="174" height="174"/></td>
                <td>{{$committee->name}}</td>
                <td>{{$committee->description}}</td>
                <td>
                  <a class="btn btn-sm btn-danger btn-table" onclick="dashboard.removeYesNo('Are you sure you want to remove {{$committee->name}}?', '/api/admin/committee/remove', {{$committee->id}})"><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th width="20%"></th>
              <th width="20%">Name</th>
              <th width="20%">Description</th>
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
        <form id="form-committee-add" action="/api/admin/committee/add" method="post" enctype="multipart/form-data" class="form-horizontal" data-form="sr">
          <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="name" name="name">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="image">Photo:</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" id="image" name="image" accept="image/*">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="description">Description:</label>
            <div class="col-sm-9">
              <textarea class="form-control" id="description" name="description" rows="8"></textarea>
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
