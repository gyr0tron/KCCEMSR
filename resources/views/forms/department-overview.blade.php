<div class="box box-primary">
  <div class="box-header">
    <h3 class="box-title">Overview</h3>
  </div>
  <div class="box-body">
    <form id="form-department-overview" action="" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$dep->id}}">
        <div class="form-group">
          <label class="control-label col-sm-2" for="description">Description:</label>
          <div class="col-sm-9">
            <textarea name="description" id="description" class="textarea" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$dep->description}}</textarea>
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
            <p class="help-block"></p>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="objectives">Objectives:</label>
          <div class="col-sm-9">
            <textarea name="objectives" id="objectives" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$dep->objectives}}</textarea>
            <p class="help-block"></p>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="placement">Placement Record:</label>
          <div class="col-sm-9">
            <textarea name="placement" id="placement" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$dep->placement}}</textarea>
            <p class="help-block"></p>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-4">
            <button type="submit" class="btn btn-primary btn-wide">Save</button>
            {{-- <a class="btn btn-default btn-wide" href="{{route("admin_carousel")}}">Cancel</a> --}}
          </div>
        </div>
    </form>
  </div>
</div>
