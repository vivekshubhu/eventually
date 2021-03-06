<div class="modal fade" id="modalCalendar" tabindex="-1" role="dialog" aria-labelledby="titleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleModal">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div id="message"></div>

          <form id="formEvent">
          <div class="form-group row">
            <label for="title" class="col-sm-4 col-form-label">Title</label>
            <div class="col-sm-8">
              <input type="text" name="title" class="form-control" id="title">
              <input type="hidden" name="id">
              <input type="hidden" name="user_id" value = ''>
              <input type="hidden" name="allDay">

            </div>
          </div>

          <div class="form-group row">
            <label for="start" class="col-sm-4 col-form-label">Date/time Initial</label>
            <div class="col-sm-8">
              <input type="text" name="start" class="form-control date-time" id="start">
            </div>
          </div> 

          <div class="form-group row">
            <label for="end" class="col-sm-4 col-form-label">Date/time Final</label>
            <div class="col-sm-8">
              <input type="text" name="end" class="form-control date-time" id="end">
            </div>
          </div> 

          <div class="form-group row">
            <label for="color" class="col-sm-4 col-form-label">Event Color</label>
            <div class="col-sm-8">
              <input type="color" name="color" class="form-control" id="color">
            </div>
          </div>

          <div class="form-group row">
            <label for="color" class="col-sm-4 col-form-label">Description</label>
            <div class="col-sm-8">
              <textarea name="description" id="description" cols="40" rows="4"></textarea>
            </div>
          </div> 

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger deleteEvent">delete</button>
        <button type="button" class="btn btn-primary saveEvent">Save changes</button>
      </div>
    </div>
  </div>
</div>