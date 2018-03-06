<form id="form-newcarousel" action="/api/admin/carousel/add" method="post" class="form-horizontal" data-form="sr">
  {{ csrf_field() }}
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="name" name="name">
      <p class="help-block"></p>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="slug">Slug:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="slug" name="slug">
      <p class="help-block">The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</p>
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
