$(function () {
  if($("users-table").length = 1) {
    $('#users-table').DataTable();
  }
})
// New User
$("#form-newuser").submit(function(event) {
  event.preventDefault();
  fh.hide_button();
  axios.post('/api/admin/adduser', $("#form-newuser").serialize())
  .then(function (response) {
    var data = response.data;
    if(fh.is_success(data)) {
      fh.redirect(data);
    }
    else {
      fh.set_multierrors(data);
    }
    fh.show_button();
  })
  .catch(function (error) {
    fh.show_errorpage(error);
  });
});
// Edit User
$("#form-edituser").submit(function(event) {
  event.preventDefault();
  fh.hide_button();
  axios.post('/api/admin/edituser', $("#form-edituser").serialize())
  .then(function (response) {
    var data = response.data;
    if(fh.is_success(data)) {
      fh.redirect(data);
    }
    else {
      fh.set_multierrors(data);
    }
    fh.show_button();
  })
  .catch(function (error) {
    fh.show_errorpage(error);
  });
});
// Settings
$("#form-usersettings").submit(function(event) {
  event.preventDefault();
  fh.hide_button();
  axios.post('/api/admin/usersettings', $("#form-usersettings").serialize())
  .then(function (response) {
    var data = response.data;
    if(fh.is_success(data)) {
      fh.redirect(data);
    }
    else {
      fh.set_multierrors(data);
    }
    fh.show_button();
  })
  .catch(function (error) {
    fh.show_errorpage(error);
  });
});
