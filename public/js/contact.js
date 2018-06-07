$("#contact-form").submit(function(event) {
  event.preventDefault();
  fh.reload(this.id);
  fh.hide_button();
  axios.post('/api/contact/send', $("#contact-form").serialize())
  .then(function (response) {
    fh.show_button();
    var data = response.data;
    if(fh.is_success(data)) {
      ShowMessage("Contact Us", data.messages);
    }
    else {
      fh.set_multierrors(data);
    }
  })
  .catch(function (error) {
    ShowMessage("Contact Us", "Error seending your message.");
    fh.show_button();
  });
});

$("#job_application").submit(function(event) {
  event.preventDefault();
  fh.reload(this.id);
  fh.hide_button();
  axios.post('/api/careeratkc/apply', new FormData(this))
  .then(function (response) {
    fh.show_button();
    var data = response.data;
    if(fh.is_success(data)) {
      ShowMessage("Career At KC", data.messages, function(){
        fh.redirect(data);
      });
    }
    else {
      fh.set_multierrors(data);
    }
  })
  .catch(function (error) {
    ShowMessage("Contact Us", "Error seending your message.");
    fh.show_button();
  });
});

$("#grievance_redressal").submit(function(event) {
  event.preventDefault();
  fh.reload(this.id);
  fh.hide_button();
  axios.post('/api/grievance_redressal/send', $(this).serialize())
  .then(function (response) {
    fh.show_button();
    var data = response.data;
    if(fh.is_success(data)) {
      ShowMessage("Grievance Redressal", data.messages, function(){
        fh.redirect(data);
      });
    }
    else {
      fh.set_multierrors(data);
    }
  })
  .catch(function (error) {
    ShowMessage("Contact Us", "Error seending your message.");
    fh.show_button();
  });
});

$("#registration_form").submit(function(event) {
  event.preventDefault();
  fh.reload(this.id);
  fh.hide_button();
  axios.post('/api/admission/register', $("#registration_form").serialize())
  .then(function (response) {
    fh.show_button();
    var data = response.data;
    if(fh.is_success(data)) {
      ShowMessage("Apply now", data.messages, function(){
        fh.redirect(data);
      });
    }
    else {
      fh.set_multierrors(data);
    }
  })
  .catch(function (error) {
    ShowMessage("Admissions Apply", "Error seending your message.");
    fh.show_button();
  });
});
$("#login_form").submit(function(event) {
  event.preventDefault();
  fh.reload(this.id);
  fh.hide_button();
  axios.post('/api/admission/login', $("#login_form").serialize())
  .then(function (response) {
    fh.show_button();
    window.location = "/admissions/student-application";
  })
  .catch(function (error) {
    fh.set_single_error("");
    fh.show_button();
  });
});


function ShowMessage(title, content, callback="") {
  $("body").append(`  <div class="modal fade" id="OkBox" role="dialog">
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
        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>`);
$('#OkBox').modal();
$("#OkBox").on('hidden.bs.modal', function() {
  $('#OkBox').remove();
  if(typeof callback == "function")
  callback();
});
}
