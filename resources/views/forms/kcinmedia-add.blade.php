<div class="row">
  <div class="col-xs-12">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">All</h3>
      </div>
      <div class="box-body">
        <table id="kcinmedia-table" class="table table-bordered table-hover table-striped datatable-full">
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
            @foreach (App\KCinMedia::orderBy('id','desc')->get() as $media)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$media->name}}</td>
                <td>
                  <a class="btn btn-sm btn-danger btn-table " onclick="dashboard.removeYesNo('Are you sure you want to remove {{$media->name}} ?', '/api/admin/kcinmedia/remove', {{$media->id}})"><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
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
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Add New</h3>
      </div>
      <div class="box-body">
        <form id="form-kcinmedia-add" action="/api/admin/kcinmedia/add" method="post" enctype="multipart/form-data" class="form-horizontal" data-form="sr">
          <div class="form-group">
            <label class="control-label col-sm-2" for="title">Title:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="title" name="title">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="description">Description:</label>
            <div class="col-sm-9">
              <textarea name="description" id="description" class="textarea" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              <p class="help-block"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="carousel">Carousel:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="carousel" name="carousel">
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
