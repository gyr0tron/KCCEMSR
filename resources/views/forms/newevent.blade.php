<form id="form-newevent" action="/api/admin/events/add" method="post" class="form-horizontal" data-form="sr">
  {{ csrf_field() }}
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="name" name="name">
      <p class="help-block"></p>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="department">Department:</label>
    <div class="col-sm-9">
      <select class="form-control" name="department" id="department">
        <option value="all">College</option>
        @foreach (App\Department::all() as $dep)
          <option value="{{$dep->url}}">{{$dep->name}}</option>
        @endforeach
      </select>
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
    <label class="control-label col-sm-2" for="images">Images:</label>
    <div class="col-sm-9">
      <div id="preview-images"></div>
      <label for="images" class="btn btn-success" style="color:white">Upload photos</label>
      <input type="file" id="images" name="images[]" style="display: none" multiple>
    </div>
    <p class="help-block"></p>
  </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-4">
        <button type="submit" class="btn btn-primary btn-wide">Save</button>
      </div>
    </div>
  </form>
