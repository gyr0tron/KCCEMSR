<div class="row">
  <div class="col-xs-12">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Edit Committee</h3>
      </div>
      <div class="box-body">
        <form id="form-committee-add" action="/api/admin/committee/edit" method="post" enctype="multipart/form-data" class="form-horizontal" data-form="sr">
            <input type="hidden" name="id" id="id" value="{{$committee->id}}">
          <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="name" name="name" value="{{$committee->name}}">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="image">Photo:</label>
            <div class="col-sm-9">
              <img src="{{$committee->getUrl()}}" class="img-thumbnail" width="526"/>
              <br />
              <br />
              <input type="file" class="form-control" id="image" name="image" accept="image/*">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="description">Description:</label>
            <div class="col-sm-9">
              <textarea class="form-control" id="description" name="description" rows="8">{{$committee->description}}</textarea>
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
              <button type="submit" class="btn btn-primary btn-wide">Save</button>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-4">
              @php
                $name = App\User::find($committee->updated_by)->fullname;
                $date = $committee->updated_at->diffForHumans();
              @endphp
              <span>Last updated by {{$name}} , {{$date}}.</span>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
