<div class="box box-primary">
  <div class="box-header">
    <h3 class="box-title">Publications</h3>
  </div>
  <div class="box-body">
    <table id="academics-publication" class="table table-bordered table-hover">
      <thead>
        <tr>
          <th width="20%"></th>
          <th width="50%">Name</th>
          <th width="20%">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach (App\Publication::all() as $pub)
          <tr>
            <td><a href="{{$pub->getUrl()}}" data-fancybox><img src={{$pub->getUrl()}} height="100"/></a></td>
            <td>{{$pub->name}}</td>
            <td>
              <a class="btn btn-warning btn-sm btn-table"><i class="fa fa-pencil"></i></a>
              <a class="btn btn-danger btn-sm btn-table" onclick="dashboard.removeYesNo('Are you sure you want to remove {{$pub->name}} ?', '/api/admin/academics/publication/remove', {{$pub->id}})"><i class="fa fa-trash-o"></i></a>
            </td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th width="20%"></th>
          <th width="50%">Name</th>
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
    <form id="form-publication-add" action="/api/admin/academics/publication/add" method="post" enctype="multipart/form-data" class="form-horizontal" data-form="sr">
      <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="name" name="name">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="image">Image:</label>
        <div class="col-sm-9">
          <input type="file" class="form-control" id="image" name="image" accept="image/*">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="description">Description:</label>
        <div class="col-sm-9">
          <textarea id="description" class="form-control" name="description" rows="8"></textarea>
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
