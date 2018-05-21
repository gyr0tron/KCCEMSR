<form id="form-editevent" action="/api/admin/events/edit" method="post" class="form-horizontal" data-form="sr">
  <div class="col-sm-10">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Edit Event</h3>
      </div>
      {{-- Edit Form --}}
      <div class="box-body">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$event->id}}">
        <div class="form-group">
          <label class="control-label col-sm-2" for="name">Name:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="name" name="name" value="{{$event->name}}">
            <p class="help-block"></p>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="department">Department:</label>
          <div class="col-sm-9">
            <select class="form-control" name="department" id="department">
              <option value="all">College</option>
              @foreach (App\Department::all() as $dep)
                <option value="{{$dep->url}}" {{$dep->url==$event->department?"selected":""}}>{{$dep->name}}</option>
              @endforeach
              @foreach (App\Committee::getAll() as $dep)
                <option value="{{$dep->url}}" {{$dep->url==$event->department?"selected":""}}>{{$dep->name}}</option>
              @endforeach
            </select>
            <p class="help-block"></p>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="description">Description:</label>
          <div class="col-sm-9">
            <textarea name="description" id="description" class="textarea" style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$event->description}}</textarea>
            <p class="help-block"></p>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="images">Images:</label>
          <div class="col-sm-9">
            @foreach ($images as $image)
              @php
              $onclick = "dashboard.deleteEventImage(event, $image->id);";
              $onfav = "dashboard.favEventImage(event, $image->id, $event->id);";
              @endphp
              @include('forms.imagepreview', ["url" => $image->getUrl(),"thumb"=> $image->getThumb(), "group" => "groupImages", "id"=>$image->id, "onclick"=>$onclick, 'fav'=>$image->id==$event->featured, 'onfav'=>$onfav])
            @endforeach
          </div>
          <p class="help-block"></p>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="name">Upload Images:</label>
          <div class="col-sm-9">
            <div id="preview-images"></div>
            <label for="images" class="btn btn-success" style="color:white">Upload photos</label>
            <input type="file" id="images" name="images[]" style="display: none" multiple>
            <p class="help-block"></p>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="date">Date:</label>
          <div class="col-sm-9">
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="date" name="date" value="{{$event->date->format('d/m/Y')}}">
            </div>
            <p class="help-block"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Actions</h3>
      </div>
      <div class="box-body">
        <center>
          <button type="submit" class="btn btn-primary btn-wide" style="margin-bottom:10px;">Update</button><br />
          <a class="btn btn-default btn-wide" href="{{route("admin_events")}}"  style="margin-bottom:10px;">Cancel</a><br />
          <a class="btn btn-danger btn-wide" onclick="dashboard.removeYesNo('Are you sure you want to remove {{$event->name}} ?', '/api/admin/events/remove', {{$event->id}})" style="margin-bottom:10px;">Remove</a>
        </center>
      </div>
    </div>
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Featured Image</h3>
        <br/>
        <br/>
        <a href="{{$event->getFeaturedImage()}}" data-fancybox="featured"><img src="{{$event->getFeaturedImage()}}" alt="featured-image" class="img-responsive" width="250" height="150"></a>
      </div>
      <div class="box-body">
        <center>

        </center>
      </div>
    </div>
    <div class="box box-info">
      <div class="box-header">
        <h3 class="box-title">Details</h3>
      </div>
      <div class="box-body">
        <center>
          @php
          $name = App\User::find($event->updated_by)->fullname;
          $date = $event->updated_at->diffForHumans();
          @endphp
          <span><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Last updated by {{$name}}<br /> {{$date}}.</span>
        </center>
      </div>
    </div>
  </div>
</form>
@section('post')
  <script type="text/javascript" src="{{ asset('js/bootstrap3-wysihtml5.all.min.js') }}"></script>
  <script>
  $(function () {
    $('#description').wysihtml5({
      toolbar: {
        "font-styles": true,
        "emphasis": true,
        "lists": true,
        "html": false,
        "link": true,
        "image": false,
        "color": false,
        "blockquote": true
      }
    });
    $('#date').datepicker({
      format: 'dd/mm/yyyy',
      autoclose: true
    })
  })
  </script>
@endsection
