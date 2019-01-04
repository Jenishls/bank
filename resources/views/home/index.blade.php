@extends('layout.master')
@section('content')
  <!-- Left Panel -->
  @include('home.left.main')
  <!-- /#left-panel -->

  <!-- Right Panel -->
  <div id="right-panel" class="right-panel">
    <!-- Header-->
    @include('home.right.header')
    <!-- /#header -->

    <!-- Content -->
    <div class="content">
      <!-- Animated -->
      <div class="animated fadeIn">
      	@include('home.right.widgets')
      	@include('home.right.traffic')

        <div class="clearfix"></div>
        
        @include('home.right.orders')  
        @include('home.right.todo')
        {{-- @include('home.right.calendar-weather')
        @include('home.right.event.add')
        @include('home.right.event.category') --}}
      </div>
      <!-- .animated -->
    </div>
    <!-- /.content -->
    <div class="clearfix"></div>
    <!-- Footer -->
    @include('layout.inc.footer')
    <!-- /.site-footer -->
  </div>
  <!-- /#right-panel -->
@endsection
@section('js')
<script type="text/javascript">
  jQuery(document).ready(function($) {
    "use strict";
      // Line Chart  #flotLine5 End
      // Traffic Chart using chartist
      if ($('#traffic-chart').length) {
          var chart = new Chartist.Line('#traffic-chart', {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            series: [
            [0, 18000, 35000,  25000,  22000,  0],
            [0, 33000, 15000,  20000,  15000,  300],
            [0, 15000, 28000,  15000,  30000,  5000]
            ]
        }, {
            low: 0,
            showArea: true,
            showLine: false,
            showPoint: false,
            fullWidth: true,
            animation:false,
            axisX: {
              showGrid: true
	          }
      });
      }
  });
</script>
@endsection


