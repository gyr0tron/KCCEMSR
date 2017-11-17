<form id="form-carousel-editimage" action="/api/admin/carousel/editimage" method="post" enctype="multipart/form-data" class="form-horizontal" data-form="sr">
  <input type="hidden" name="id" id="id" value="{{$car->id}}">
  <div class="form-group">
    <label class="control-label col-sm-2" for="title">Title:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="title" name="title" value="{{$car->title}}">
      <p class="help-block"></p>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="description">Description:</label>
    <div class="col-sm-4">
      <textarea name="description" id="description" rows="8" cols="80" class="form-control">{{$car->description}}</textarea>
      <p class="help-block"></p>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="title">Image:</label>
    <div class="col-sm-4">
      <a href="{{$car->getUrl()}}" data-fancybox><img src="{{$car->getThumb()}}" height="260" width="360" class="img-thumbnail"></a>
      <br />
      <br />
      <input type="file" class="form-control" id="image" name="image">
      <p class="help-block"></p>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-4">
      <button type="submit" class="btn btn-primary btn-wide">Save</button>
      <a class="btn btn-default btn-wide" href="{{route("admin_carousel")}}">Cancel</a>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-4">
      @php
        $name = App\User::find($car->updated_by)->fullname;
        $date = $car->updated_at->diffForHumans();
      @endphp
      <span>Last updated by {{$name}} , {{$date}}.</span>
    </div>
  </div>
</form>
