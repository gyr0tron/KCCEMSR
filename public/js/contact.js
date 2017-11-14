$("#contact-form").submit(function(event) {
  event.preventDefault();
  axios.post('/api/contact/send', $("#contact-form").serialize())
  .then(function (response) {
    var data = response.data;
    ShowMessage("Contact Us", data);
  })
  .catch(function (error) {
  });
});


function ShowMessage(title, content) {
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
  $("#OkBox").on('hidden.bs.modal', function () {
    $('#OkBox').remove();
  });
}
