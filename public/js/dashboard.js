$(function () {
  if($("users-table").length = 1) {
    $('#users-table').DataTable();
  }
  if($("#carousel-table").length = 1) {
    $("#carousel-table").DataTable();
  }
  if($("#department-table").length =1) {
    $("#department-table").DataTable();
  }
  if($("#department-student-achievenments-table").length==1) {
    $("#department-student-achievenments-table").DataTable();
  }
  $("[data-fancybox]").fancybox();
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

// New Event
$("#form-newevent").submit(function(event) {
  event.preventDefault();
  fh.hide_button();
  axios.post('/api/admin/events/add', new FormData(this))
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

// Edit Event
$("#form-editevent").submit(function(event) {
  event.preventDefault();
  fh.hide_button();
  axios.post('/api/admin/events/edit', new FormData(this))
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

// Department
// Edit Overview
$("#form-department-overview").submit(function(event) {
  event.preventDefault();
  fh.hide_button();
  axios.post('/api/admin/department/overview', new FormData(this))
  .then(function (response) {
    var data = response.data;
    if(!fh.is_success(data)) {
      fh.set_multierrors(data);
    };
    fh.show_button();
  })
  .catch(function (error) {
    fh.show_errorpage(error);
  });
});
// Add Student Achievement
$("#form-department-student-achievements").submit(function(event) {
  event.preventDefault();
  fh.hide_button();
  axios.post('/api/admin/department/sa/add', new FormData(this))
  .then(function (response) {
    var data = response.data;
    if(fh.is_success(data)) {
      fh.redirect(data);
    } else {
      fh.set_multierrors(data);
    }
    fh.show_button();
  })
  .catch(function (error) {
    fh.show_errorpage(error);
  });
});
// Add Departmental Success
$("#form-department-departmental-achievements").submit(function(event) {
  event.preventDefault();
  fh.hide_button();
  axios.post('/api/admin/department/da/add', new FormData(this))
  .then(function (response) {
    var data = response.data;
    if(fh.is_success(data)) {
      fh.redirect(data);
    } else {
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
$("[data-skin]").click(function(event) {
  $val = $(this).attr("data-skin");
  $('body').find("input[value='"+$val+"']").attr('checked', true);
  $("body").attr("class", "skin-" + $val + " sidebar-mini");
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
  removeEvent: function(id) {
    showYesNo("Remove Event", "Are you sure you want to remove this event ?", function(){
      axios.post('/api/admin/events/remove', {id:id})
      .then(function (response) {
        var data = response.data;
        if(fh.is_success(data)) {
          fh.redirect(data);
        }
      })
      .catch(function (error) {
        fh.show_errorpage(error);
      });
    });
  },
  deleteMessage: function(id) {
    showYesNo("Delete Message", "Are you sure you want to delete this message ?", function(){
      axios.post('/api/admin/message/delete', {id:id})
      .then(function (response) {
        var data = response.data;
        if(fh.is_success(data)) {
          fh.redirect(data);
        }
      })
      .catch(function (error) {
        fh.show_errorpage(error);
      });
    });
  },
  deleteUser: function() {
    showPasswordBox(function(password){
      alert(password);
    });
  },
  deleteEventImage: function(event, id) {
    event.preventDefault();
    var btn = $(document.activeElement);
    showYesNo("Remove Image", "Are you sure you want to remove this image ?", function(){
      axios.post('/api/admin/events/edit/removeimage', {id:id})
      .then(function (response) {
        var data = response.data;
        if(fh.is_success(data)) {
          btn.closest('.image-container').hide('slow/400/fast', function() {
            btn.closest('.image-container').remove();
          });
        }
      })
      .catch(function (error) {
        fh.show_errorpage(error);
      });
    });
  },
  deleteDepartmentalEvent(id) {
    showYesNo("Remove Achievement", "Are you sure you want to remove this achievement ?", function(){
      axios.post('/api/admin/department/da/remove', {id:id})
      .then(function (response) {
        var data = response.data;
        if(fh.is_success(data)) {
          fh.redirect(data);
        }
      })
      .catch(function (error) {
        fh.show_errorpage(error);
      });
    });
  },
  deleteStudentAchievementEvent(id) {
    showYesNo("Remove Achievement", "Are you sure you want to remove this achievement ?", function(){
      axios.post('/api/admin/department/sa/remove', {id:id})
      .then(function (response) {
        var data = response.data;
        if(fh.is_success(data)) {
          fh.redirect(data);
        }
      })
      .catch(function (error) {
        fh.show_errorpage(error);
      });
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

$(function(){
  function previewImages() {

    var $preview = $('#preview-images').empty();
    if (this.files) $.each(this.files, readAndPreview);

    function readAndPreview(i, file) {
      if($('#images')[0].files.length > 100) {
        return fh.set_error($('#preview-images'), "You can only upload 3 photos.");
      }
      if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
        return fh.set_error($('#preview-images'), file.name +" is not an valid image.");
        // return alert(file.name +" is not an image";
      } // else...
      fh.remove_error('#preview-images')
      var reader = new FileReader();
      reader.readAsDataURL(file);
      $(reader).on("load", function() {
        $preview.append($("<img />", {src:this.result, height:162, class:"img-thumbnail img-padding"}));
      });
    }
  }
  $('#images').on("change", previewImages);
})

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
function showYesNo(title, content, callback) {
  $("body").append(`  <div class="modal fade" id="YesNoBox" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">${title}</h4>
      </div>
      <div class="modal-body">
        ${content}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-wide" id="modalYes">Yes</button>
        <button type="button" class="btn btn-default  btn-wide" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>`);
$('#YesNoBox').modal();
$('#YesNoBox #modalYes').click(function(event) {
  if(typeof callback == "function")
  callback();
  $('#YesNoBox').modal("hide")
});
$("#YesNoBox").on('hidden.bs.modal', function () {
  $('#YesNoBox').remove();
});
}
