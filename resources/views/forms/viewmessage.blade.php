<div id="MessageModal-{{$message->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{{$message->name}}</h4>
        <h5>{{$message->email}}</h5>
        <small>{{$message->created_at->diffForHumans()}}</small>
      </div>
      <div class="modal-body">
        {{$message->message}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
