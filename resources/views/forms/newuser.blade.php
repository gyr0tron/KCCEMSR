<form id="form-newuser" action="/api/admin/adduser" method="post" data-form="sr">
  <div class="form-group">
    <span for="username">Username:</span>
    <input type="text" class="form-control" id="username" name="username">
    <p class="help-block"></p>
  </div>
  <div class="form-group">
    <span for="fullname">Fullname:</span>
    <input type="text" class="form-control" id="fullname" name="fullname">
    <p class="help-block"></p>
  </div>
  <div class="form-group">
    <span for="fullname">Email:</span>
    <input type="email" class="form-control" id="email" name="email">
    <p class="help-block"></p>
  </div>
  <div class="form-group">
    <span for="fullname">Role:</span>
    <select class="form-control" id="role" name="role">
      <option value="0" selected>User</option>
      <option value="1">Editor</option>
      <option value="2">Administrator</option>
    </select>
    <p class="help-block"></p>
  </div>
  <div class="form-group">
    <span for="password">Password:</span>
    <input type="password" class="form-control" id="password" name="password" data-toggle="password">
    <p class="help-block"></p>
  </div>
  <button type="submit" name="button" class="btn btn-primary btn-wide">Add New User</button>
</form>
