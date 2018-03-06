<form id="form-editcarousel" action="/api/admin/carousel/edit" method="post" class="form-horizontal" data-form="sr">
  {{ csrf_field() }}
  <input type="hidden" name="name" value="{{$car->name}}">
  <input type="hidden" name="slug" value="{{$car->type}}">
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" value="{{$car->name}}" disabled>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="slug">Slug:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" value="{{$car->name}}" disabled>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="images">Images:</label>
    <div class="col-sm-9">
      @foreach ($car->images as $id)
        @php
          $image = App\ImageUpload::where('id', $id)->first();
          if(!$image) continue;
          $onclick = "dashboard.deleteCarouselImage($car->id, $image->id)"
        @endphp
        <div class="image-container">
           <img src="{{$image->getUrl()}}" class="img-thumbnail img-padding" width="260" height="150">
           <button type="button" class="btn btn-sm btn-danger delete" onclick="{{$onclick}}"><i class="fa fa-trash-o"></i></button>
        </div>
        {{-- @include('forms.imagepreview', ["url" => $image->getUrl(), "group" => "groupImages", "onclick"=>$onclick]) --}}
      @endforeach
    </div>
    <p class="help-block"></p>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="images">Uplaod Images:</label>
    <div class="col-sm-9">
      <div id="preview-images"></div>
      <label for="images" class="btn btn-success" style="color:white">Upload photos</label>
      <input type="file" id="images" name="images[]" style="display: none" multiple>
    </div>
    <p class="help-block"></p>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-4">
      <button type="submit" class="btn btn-primary btn-wide">Update</button>
    </div>
  </div>
</form>
