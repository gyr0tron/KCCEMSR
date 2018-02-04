@php
$file = App\FileUpload::where('type',$action)->first();
@endphp
<div class="box box-primary">
  <div class="box-header">
    <h3 class="box-title">Placement Process</h3>
  </div>
  <div class="box-body">
    <form id="form-placement-process" action="/api/admin/placement/placement-process" method="post" enctype="multipart/form-data" data-form="sr">
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
