Orders -->
<div class="orders">
  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-body">
          <div id="toolbar">
            <h4 class="box-title">Dormant Accounts</h4>
            {{-- <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Something</label>
                  <select class="form-control" style="height:1em"></select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Something</label>
                  <select class="form-control" style="height:1em"></select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Something</label>
                  <select class="form-control" style="height:1em"></select>
                </div>
              </div>
            </div> --}}
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
                 data-url="{{route('dormant.fetch')}}"
                 class="table-striped">
                <thead class="thead-dark">
                  <tr>
                    <th data-field="Name" data-sortable="true">Name</th>
                    <th data-field="BranchName" data-sortable="true"> Branch</th>
                    <th data-field="AcTypeDesc" data-sortable="true">Account Type</th>
                    <th data-field="GoodBaln" data-sortable="true" data-formatter="money">Balance</th>
                  </tr>
                </thead>
          </table>
        </div>
      </div> <!-- /.card -->
    </div>  <!-- /.col-lg-8 -->

    
  </div>
</div>

<script type="text/javascript">
  var $ = jQuery; 
  const $table = $('#table');
  $table.bootstrapTable({
    height: getHeight(),
    // query: getParams()
  });

  // var getParams = function(){
  //   $params = {};
  //   $params[] = '';
  //   $params[] = '';
  //   $params[] = '';
  //   $params[] = '';
  // }
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
</script>
<!-- /.orders