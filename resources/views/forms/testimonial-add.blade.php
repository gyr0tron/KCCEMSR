<form id="form-testimonial" action="/api/admin/testimonial/add" method="post" enctype="multipart/form-data" class="form-horizontal" data-form="sr">
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
      <input type="file" class="form-control" id="image" name="image">
      <p class="help-block"></p>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="comment">Comment:</label>
    <div class="col-sm-9">
      <textarea class="form-control" id="comment" name="comment" rows="4"></textarea>
      <p class="help-block"></p>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-4">
      <button type="submit" class="btn btn-primary btn-wide">Add</button>
    </div>
  </div>
</form>
