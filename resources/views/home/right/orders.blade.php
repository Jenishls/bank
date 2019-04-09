<div class="orders">
  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-body">
          <div id="toolbar">
            <h4 class="box-title">Dormant Accounts</h4>
          </div>
          <table id="table"
                data-toolbar="#toolbar"
                data-search="true"
                data-show-refresh="true"
                data-show-toggle="true"
                data-show-columns="true"
                data-show-export="true"
                data-minimum-count-columns="2"
                data-show-pagination-switch="true"
                data-pagination="true"
                data-row-style = 'rowStyle' 
                data-id-field="id"
                data-page-list="[10, 25, 50, 100, ALL]"
                data-classes = "table table-hover"
                data-url="{{route('dormant.fetch')}}"
            class="table-striped">
            <thead class="alert alert-info">
              <tr>
                <th data-field="Name" data-sortable="true" data-width="25%">Name</th>
                <th data-field="BranchName" data-sortable="true" data-width="25%"> Branch</th>
                <th data-field="AcTypeDesc" data-sortable="true" data-width="25%">Account Type</th>
                <th data-field="GoodBaln" data-sortable="true" data-formatter="money" data-width="25%">Balance</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  var $ = jQuery; 
  const $table = $('#table');
  jQuery(document).ready(function($) {
    $('select.name').select2({
      placeholder: "Select Name",
      allowClear: true,
      ajax:{
        url:'getClientName',
        // dataType: 'json',
        processResults:function(data){
          return{
            results:data
          }
        }
      }
    }).on('change',function(){
      renderTable();
    });

    $('select.branch').select2({
      placeholder: "Select Branch",
      allowClear: true,
      ajax:{
        url:'getBranch',
        cache:true,
        // dataType: 'json',
        processResults:function(data){
          return{
            results : data
          };
        }
      }
    }).on('change',function(){
      renderTable();
    });

    $('select.acType').select2({
      placeholder: "Select Account Type",
      allowClear: true,
      ajax:{
        url:'getAcType',
        // dataType: 'json',
        processResults:function(data){
          return{
            results:data
          }
        }
      }
    }).on('change',function(){
      renderTable();
    });

  });


  var getParams = function(){
    $params = {};
    $params['ClientCode'] = $('select.name').val();
    $params['BranchCode'] = $('select.branch').val();
    $params['AcType'] = $('select.acType').val();

    return $params;
  }

  var renderTable = function(){
    $table.bootstrapTable('refresh',{
      query: getParams()
    })
  }

  $table.bootstrapTable({
    height: getHeight(),
    query: getParams()
  });
  


  function getHeight() {
    return $(window).height() - $('h1').outerHeight(true);
  }

  function money(value,row,index){
    return numeral(value).format('0,0.00');
  }

  function rowStyle(row,index){
    return {
      css:{'font-size':'12px'}
    };
  }

  $('.bootstrap-table .columns-right.float-right button[name="paginationSwitch"]').empty().html('&#8691;').css('font-weight','bolder');
  $('.bootstrap-table .columns-right.float-right button[name="refresh"]').empty().html('&#8635;').css('font-weight','bolder');
  $('.bootstrap-table .columns-right.float-right button').addClass('btn-sm');
  $('.bootstrap-table .fixed-table-toolbar .float-right.search').addClass('input-group-sm');
  let filter = `<div class="row f12 clearfix">
              <div class="col-md-3" >
                <div class="form-group input-group-sm">
                  <label>Name</label><br>
                  <select class="form-control name"></select>
                </div>
              </div>
              <div class="col-md-3" style="padding-right:10px">
                <div class="form-group input-group-sm">
                  <label>Branch</label><br>
                  <select class="form-control branch"></select>
                </div>
              </div>
              <div class="col-md-3"style="padding-left:10px">
                <div class="form-group input-group-sm">
                  <label>Account Type</label>
                  <select class="form-control acType"></select>
                </div>
              </div>
            </div>`;
  $('.bootstrap-table .fixed-table-toolbar .float-right.search').after(filter);
</script>
