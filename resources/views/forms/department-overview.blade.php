<div class="box box-primary">
  <div class="box-header">
    <h3 class="box-title">Overview</h3>
  </div>
  <div class="box-body">
    <form id="form-department-overview" action="/api/admin/department/overview" method="post" class="form-horizontal" data-form="sr" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="hidden" id="id" name="id" value="{{$dep->id}}">
      <div class="form-group">
        <label class="control-label col-sm-2" for="title">Image:</label>
        <div class="col-sm-4">
          @if(strlen($dep->image) > 3)
            <a href="{{$dep->getUrl()}}" data-fancybox><img src="{{$dep->getUrl()}}" class="img-thumbnail"></a>
            <br />
            <br />
          @endif
          <input type="file" class="form-control" id="image" name="image" accept="image/*">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="description">Description:</label>
        <div class="col-sm-9">
          <textarea name="description" id="description" class="textarea" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$dep->description}}</textarea>
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="message">HOD's Message:</label>
        <div class="col-sm-9">
          <textarea name="message" id="message" class="textarea" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$dep->message}}</textarea>
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="vision">Vision:</label>
        <div class="col-sm-9">
          <textarea name="vision" id="vision" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$dep->vision}}</textarea>
          <p class="help-block"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="mission">Mission:</label>
        <div class="col-sm-9">
          <textarea name="mission" id="mission" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$dep->mission}}</textarea>
          <p class="help-block">Enter each point ending with a '.'</p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="objectives">Program objectives:</label>
        <div class="col-sm-9">
          <textarea name="objectives" id="objectives" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$dep->objectives}}</textarea>
          <p class="help-block">Enter each point ending with a '.'</p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="placement">Program outcomes:</label>
        <div class="col-sm-9">
          <textarea name="outcome" id="outcome" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$dep->outcome}}</textarea>
          <p class="help-block">Enter each point ending with a '.'</p>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
          <button type="submit" class="btn btn-primary btn-wide">Save</button>
        </div>
      </div>
    </form>
  </div>
</div>
