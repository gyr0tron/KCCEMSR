<a href="{{$url}}" data-fancybox="{{$group or ''}}" class="image-container">
   <img src="{{$thumb or $url}}" class="img-thumbnail img-padding">
   <button type="button" class="btn btn-sm btn-danger delete" onclick="{{$onclick}}"><i class="fa fa-trash-o"></i></button>
</a>
