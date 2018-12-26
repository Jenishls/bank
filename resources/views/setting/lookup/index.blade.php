<div class="col-lg-12">
  <div class="card">
    <div class="card-body card-block">
      <h4> <strong>Look Up Table</strong></h4>
      <div id="toolbar" class="btn-group">
        <button id="add_lookup" class="btn btn-primary btn-sm"> + Add Look Up</button>
      </div>
      <table id='lookup-table' 
        data-pagination="true"
        data-page-size="10"
        data-page-list="[10,25,50,100]"
        data-search="true"
        data-show-refresh="true"
        data-sort-name="id"
        data-sort-order="asc"
        data-id-field="course_title"
        data-advanced-search="true"
        data-show-columns = "true"
        {{-- data-id-table="client-table" --}}
        data-toolbar="#toolbar"
        data-url="/lookup/table"
        data-show-footer="false"
        data-row-style="rowStyle"
        data-show-export="true"
        class="table table-condensed table-striped">
      	<thead>
      		<th data-sortable="true" data-width="25%" data-field="title">Title</th>
      		<th data-sortable="true" data-width="25%" data-field="value">Value</th>
      		<th data-sortable="true" data-width="35%" data-field="desc">Description</th>
      		<th data-formatter="lookup_action" data-width="15%">Action</th>
      	</thead>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript">
  var lookup_action = function(value, row, index){
    let btn = `<button class='btn btn-sm btn-primary f12 edit_lookup' data-id='`+ row.id+`'>
                <span class="ti-pencil-alt"></span>
              </button>
              <button class='btn btn-sm btn-danger f12 del_lookup' data-id='`+ row.id+`'>
                <span class="ti-trash"></span>
              </button>`;
    return btn;          
  }
	$('#lookup-table').bootstrapTable();

  $('#add_lookup').on('click', function(event) {
    event.preventDefault();
    /* Act on the event */
    showModal({url:'/lookup/add/view'})
  });

  function rowStyle(row, index) {
    return {
      // classes: 'text-nowrap another-class',
      css: {"font-size": "12px"}
    };
  }

  $(document).on('click','.edit_lookup', function(event) {
    event.preventDefault();
    /* Act on the event */
    var id = $(this).data('id');

    showModal({url:'/lookup/edit/view/'+id});
  });

  $(document).on('click','.del_lookup', function(event) {
    event.preventDefault();
    /* Act on the event */
    var id = $(this).data('id');
    sendAjax({url:'/lookup/del/'+id},function(resp){
      $('#lookup-table').bootstrapTable('refresh');
    });
  });
</script>
