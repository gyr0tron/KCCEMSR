$(function () {
  $(".datatable-full").DataTable();
  $("[data-fancybox]").fancybox();
})

$("[data-form='sr']").submit(function(event) {
  event.preventDefault();
  fh.reload(this.id);
  fh.hide_button();
  axios.post($(this).prop("action"), new FormData(this))
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
$("[data-skin]").click(function(event) {
  $val = $(this).attr("data-skin");
  $('body').find("input[value='"+$val+"']").attr('checked', true);
  $("body").attr("class", "skin-" + $val + " sidebar-mini");
});
// ADMIN REMOVE FUNCTIONS
window.dashboard = {
  directRequest: function(url, data) {
    axios.post(url, {data:data})
    .then(function (response) {
      var data = response.data;
      if(fh.is_success(data)) {
        window.location.reload();
      }
    })
    .catch(function (error) {
      fh.show_errorpage(error);
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
  favEventImage: function(event, id, eventid) {
    event.preventDefault();
    var btn = $(document.activeElement);
    axios.post('/api/admin/events/edit/favimage', {id:id, event:eventid})
    .then(function (response) {
      var data = response.data;
      if(fh.is_success(data)) {
        location.reload();
      }
    })
    .catch(function (error) {
      fh.show_errorpage(error);
    });
  },
  deleteCarouselImage: function(carousel, image) {
    event.preventDefault();
    var btn = $(document.activeElement);
    showYesNo("Remove Image", "Are you sure you want to remove this image ?", function(){
      axios.post('/api/admin/carousel/edit/remove', {carousel:carousel, image:image})
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
  deleteAnnoncement(id) {
    showYesNo("Remove Announcement", "Are you sure you want to remove this announcement ?", function(){
      axios.post('/api/admin/department/announcement/remove', {id:id})
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
  removeYesNo(body, url, id) {
    showYesNo("Remove", body, function(){
      axios.post(url, {id:id})
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

// SORTABLE
