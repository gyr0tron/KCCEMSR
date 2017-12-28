<div class="box box-primary">
  <div class="box-header">
    <h3 class="box-title">Curriculum Plan</h3>
  </div>
  <div class="box-body">
<form id="form-curriculum-plan" action="/api/admin/academics/curriculum-plan" method="post" enctype="multipart/form-data" data-form="sr">
      {{ csrf_field() }}
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
    </form>
  </div>
</div>
