$(function () {
  if($("users-table").length = 1) {
    $('#users-table').DataTable();
  }
  if($("#carousel-table").length = 1) {
    $("#carousel-table").DataTable();
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
  alert($("#form-usersettings").serialize());
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
// Carousel add new image
$("#form-carousel-newimage").submit(function(event) {
  event.preventDefault();
  fh.hide_button();
  axios.post('/api/admin/carousel/newimage', new FormData(this))
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
// Carousel edit image
$("#form-carousel-editimage").submit(function(event) {
  event.preventDefault();
  fh.hide_button();
  axios.post('/api/admin/carousel/editimage', new FormData(this))
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


// EVENTS
$(':radio[name="skin"]').change(function() {
  $("body").attr("class", "skin-" + this.value + " sidebar-mini");
});


// ADMIN REMOVE FUNCTIONS
window.dashboard = {
  removeCarouselImage: function(id) {
    axios.post('/api/admin/carousel/removeimage', {id:id})
    .then(function (response) {
      var data = response.data;
      if(fh.is_success(data)) {
        fh.redirect(data);
      }
    })
    .catch(function (error) {
      fh.show_errorpage(error);
    });
  },
  deleteUser: function() {
    showPasswordBox(function(password){
      alert(password);
    });
  }
};
// function removeCarouselImage(id) {
//   axios.post('/api/admin/carousel/removeimage', {id:id})
//     .then(function (response) {
//       var data = response.data;
//       if(fh.is_success(data)) {
//         fh.redirect(data);
//       }
//     })
//     .catch(function (error) {
//       fh.show_errorpage(error);
//     });
// }


function showPasswordBox(callback) {
  $("body").append(`  <div class="modal fade" id="passwordBox" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Password</h4>
  </div>
  <div class="modal-body">
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="modalPassword" placeholder="Enter your password">
    <p class="help-block"></p>
  </div>
  </div>
  <div class="modal-footer">
  <button type="button" class="btn btn-primary btn-wide" id="modalYes">Ok</button>
  <button type="button" class="btn btn-default  btn-wide" data-dismiss="modal">Cancel</button>
  </div>
  </div>
  </div>
  </div>`);
  $('#passwordBox').modal();
  $('#passwordBox #modalYes').click(function(event) {
    if(typeof callback == "function")
    callback($('#passwordBox #modalPassword').val());
    // $('#passwordBox').modal("hide")
  });
  $("#passwordBox").on('hidden.bs.modal', function () {
    $('#passwordBox').remove();
  });
}
