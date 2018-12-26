<div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <strong>Enquiry</strong>
    </div>
    <div class="card-body card-block">
      <form id="form-enq" class="form-horizontal">
        <div class="row form-group">
          <div class="col col-md-3"><label class=" form-control-label">ID</label></div>
          <div class="col-12 col-md-9">
            <p class="form-control-static">1</p>
          </div>
        </div>
        <div class="row form-group">
          <div class="col col-md-3">
            <label for="text-input" class="form-control-label">Branch</label>
          </div>
          <div class="col-12 col-md-9">
            <input type="text" id="text_input" name="text_input" placeholder="Text" class="form-control input-sm">
            <!-- <small class="form-text text-muted">This is a help text</small> -->
          </div>
        </div>
        <div class="row form-group">
          <div class="col col-md-3">
            <label for="ip_input" class=" form-control-label">IP Detail</label>
          </div>
          <div class="col-12 col-md-9">
            <input type="text" id="ip_input" name="ip" class="form-control input-sm" readonly="">
            <!-- <small class="help-block form-text">Please enter your email</small> -->
          </div>
        </div>
        <div class="row form-group">
          <div class="col col-md-3">
            <label for="dept_input" class=" form-control-label">Department</label>
          </div>
          <div class="col-12 col-md-9">
            <select type="text" id="dept_input" class="form-control input-xs" name=""></select> 
            <!-- <small class="help-block form-text">Please enter a complex password</small> -->
          </div>
        </div>
        <div class="row form-group">
          <div class="col col-md-3">
            <label for="f_title_input" class=" form-control-label">Designation </label></div>
          <div class="col-12 col-md-9">
            <select id="f_title_input" class="form-control" name="f_title_input"></select>
          </div>
        </div>
        <div class="row form-group">
          <div class="col col-md-3">
            <label for="textarea_input" class=" form-control-label">Problem</label>
          </div>
          <div class="col-12 col-md-9">
            <textarea name="textarea_input" id="textarea_input" rows="9" placeholder="Details..." class="form-control"></textarea>
          </div>
        </div>
        <button id="btn-sub-enq" class="btn btn-success btn-md"> Submit</button>
        <button id="enq-reset" class="btn btn-md btn-default"> Reset</button>
      </form>
    </div>
    <!-- <div class="card-footer">
      <button type="submit" class="btn btn-success btn-md">
        <i class="fa fa-dot-circle-o"></i> Submit
      </button>
      <button type="reset" class="btn btn-danger btn-md">
        <i class="fa fa-ban"></i> Reset
      </button>
    </div> -->
  </div>

</div>
<script type="text/javascript">
  $('#enq-reset').on('click', function(event) {
    event.preventDefault();
    /* Act on the event */
    $('#form-enq')[0].reset();
  });
  
  // jQuery(document).ready(function($) {
    getUserIP(function(ip){
      $('#ip_input').val(ip);
    });
  // });

  $('#f_title_input').select2({
    placeholder: "Select Functional Title",
    allowClear : true,
    language:{
      noResults: function(params){
        return " No results found";
      }
    },
    ajax: {
      url: '/getLookUp/Designation',
      cache:true,
      data: function (params) {
        return {
          terms: params
        };
      },
      processResults: function (data) {
        // Tranforms the top-level key of the response object from 'items' to 'results'
        return {
          results: data
        };
      }
    }
  });

  $('#dept_input').select2({
    placeholder: "Select Department",
    allowClear : true,
    language:{
      noResults: function(params){
        return " No results found";
      }
    },
    ajax: {
      url: '/getLookUp/Department',
      cache:true,
      data: function (params) {
        return {
          terms: params
        };
      },
      processResults: function (data) {
        // Tranforms the top-level key of the response object from 'items' to 'results'
        return {
          results: data
        };
      }
      
    }
  });

  $('#btn-sub-enq').on('click', function(event) {
    event.preventDefault();
    /* Act on the event */
    let data = $('#form-enq').serializeArray();
    sendAjax({url:'enq/submit',data:data,method:'POST'},function(resp){
      
    });
  });

</script>
