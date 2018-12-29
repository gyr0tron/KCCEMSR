<div class="row">
  <div class="col-xs-12">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">All Stories</h3>
      </div>
      <div class="box-body">
        <table id="stories-table" class="table table-bordered table-hover table-responsive datatable-full">
          <thead>
            <tr>
              <th width="10%">#</th>
              <th width="80%">Title</th>
              <th width="10%">Actions</th>
            </tr>
          </thead>
          <tbody>
            @php
              $no = 1;
            @endphp
            @foreach (App\Story::where('type', '0')->orderBy('created_at', 'DESC')->get() as $story)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$story->title}}</td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th width="10%">#</th>
              <th width="80%">Title</th>
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
        <form id="form-committee-add" action="/api/admin/stories/add" method="post" enctype="multipart/form-data" class="form-horizontal" data-form="sr">
          <input type="hidden" name="type" value="0" />
          <div class="form-group">
            <label class="control-label col-sm-2" for="title">Title:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="title" name="title">
              <p class="help-block"></p>
            </div>
          </div>
            <div class="col-sm-offset-2 col-sm-4">
              <button type="submit" class="btn btn-primary btn-wide">Add</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
