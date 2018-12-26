<div class="modal-header">
  <h5 class="modal-title float-left"><strong>Add Look Up</strong></h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <form id='lookup_add_form'>
    <div class="row"> 
      <div class="col-md-6">
        <div class="form-group">
          <label class="form-control-label">Title</label>
          <input type="text" name="title" class="form-control input-xs" autocomplete="" autofocus="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label class="form-control-label">Value</label>
          <input type="text" name="value" class="form-control input-xs" autocomplete="off">
        </div>
      </div>
    </div>
    <div class="form-group"> 
      <label class="form-control-label">Description</label>
      <textarea name="desc" class="form-control" rows='3'></textarea>
    </div>  
  </form>
</div>
<div class="modal-footer">
  <button type="button" id="lookup_add_btn" class="btn btn-sm btn-success">Submit</button>
  <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
</div>
<script type="text/javascript">
  $('#lookup_add_btn').on('click', function(event) {
    event.preventDefault();
    /* Act on the event */
    let data = $('#lookup_add_form').serializeArray();
    sendAjax({url:'lookup/add/store',method:'POST',data:data},function(resp){
      $('#modal').modal('hide');
      $('#lookup-table').bootstrapTable('refresh');
    });
  });
</script>