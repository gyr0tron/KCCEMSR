<div class="row">
  <div class="col-xs-12">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">All Upcmong events</h3>
      </div>
      <div class="box-body">
        <table id="stories-table" class="table table-bordered table-hover table-responsive datatable-full">
          <thead>
            <tr>
              <th width="10%">#</th>
              <th width="40%">Name</th>
              <th width="20%">Date</th>
              <th width="20%">Timing</th>
              <th width="10%">Actions</th>
            </tr>
          </thead>
          <tbody>
            @php
            $no = 1;
            @endphp
            @foreach (App\Story::where('type', '1')->orderBy('created_at', 'DESC')->get() as $story)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$story->title}}</td>
                <td>{{$story->date}}</td>
                <td>{{$story->from.' to '.$story->to}}</td>
                <td><a class="btn btn-sm btn-danger btn-table" onclick="dashboard.removeYesNo('Are you sure you want to remove {{$story->title}}?', '/api/admin/stories/remove', {{$story->id}})"><i class="fa fa-trash-o"></i></a></td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th width="10%">#</th>
              <th width="40%">Name</th>
              <th width="20%">Date</th>
              <th width="20%">Timing</th>
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
        <h3 class="box-title">Add New Upcoming Event</h3>
      </div>
      <div class="box-body">
        <form id="form-committee-add" action="/api/admin/stories/add" method="post" enctype="multipart/form-data" class="form-horizontal" data-form="sr">
          <input type="hidden" name="type" value="1" />
          <div class="form-group">
            <label class="control-label col-sm-2" for="title">Title:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="title" name="title">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="date">Date:</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" id="date" name="date">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="from">From (Date):</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="from" name="from">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="to">To (Date):</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="to" name="to">
              <p class="help-block"></p>
            </div>
          </div>
          {{-- <div class="form-group">
            <label class="control-label col-sm-2" for="file">File:</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" id="file" name="file">
              <p class="help-block"></p>
            </div>
          </div> --}}
          <div class="form-group">
            <label class="control-label col-sm-2" for="url">Url:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="url" name="url">
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
