<form id="form-edituser" action="" method="post" class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-2" for="username">Username:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="username" name="username" value="{{$user->username}}" readonly>
      <p class="help-block"></p>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="fullname">Fullname:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="fullname" name="fullname" value="{{$user->fullname}}">
      <p class="help-block"></p>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-4">
      <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
      <p class="help-block"></p>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="role">Role:</label>
    <div class="col-sm-4">
      <select class="form-control" id="role" name="role">
        <option value="0" {{$user->access==0?"selected":""}}>User</option>
        <option value="1" {{$user->access==1?"selected":""}}>Editor</option>
        <option value="2" {{$user->access==2?"selected":""}}>Administrator</option>
      </select>
      <p class="help-block"></p>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-4">
      <button type="submit" class="btn btn-primary btn-wide">Save</button>
    </div>
  </div>
</form>
