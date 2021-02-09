<!-- gen header included -->
<?php include '../../common/user_header_footer/header.php';?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">

    <div class="container-fluid" style="clear: both;">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-2">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-external-link-alt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">New Orders</span>
              <span id="total_user_regstd" class="info-box-number">

              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-2">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-layer-group"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pending</span>
              <span class="info-box-number">7</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-2">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-industry"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Production</span>
              <span class="info-box-number">3</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-2">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-cubes"></i></span>

            <div class="info-box-content">
              <div class="row">
              
              <span class="info-box-text">Min Stock <span class="badge bg-danger">3</span></span>

              
              <span class="info-box-text">Max Stock <span class="badge bg-warning">3</span></span>

              <!--  <span class="info-box-number">5</span> -->
              </div>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col --> 
        <div class="col-12 col-sm-6 col-md-2">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-recycle"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Wastage</span>
              <!-- <span class="info-box-number">5</span> -->
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col --> 
        <div class="col-12 col-sm-6 col-md-2">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-birthday-cake"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Birthday</span>
              <!-- <span class="info-box-number">5</span> -->
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <section class="content">
        <div class="container-fluid">

          <div class="row"> 
            <!-- BAR CHART -->
            <div class="col-md-6">
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title" style="line-height: 2.2em;">Production of the last </h3> 
                  <h3 class="card-title" style="margin-left:2%;"><select class="form-control">
                    <option>Last 7 Days</option>
                    <option>Last 7 Weeks</option>
                  </select></h3> 

                
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Client wise Production</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
         <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Ongoing Orders</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>                  
                  <tr>
                    <th style="width: 10px">#Ord</th>
                    <th>Customers</th>
                    <th>Amount</th>
                    <th style="width: 40px">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>XXXXX</td>
                    <td>XXX</td>
                    <td><span class="badge bg-danger">Printing</span></td>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>XXXXX</td>
                    <td>XXX</td>
                    <td><span class="badge bg-danger">Printing</span></td>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>XXXXX</td>
                    <td>XXX</td>
                    <td><span class="badge bg-danger">Printing</span></td>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>XXXXX</td>
                    <td>XXX</td>
                    <td><span class="badge bg-danger">Printing</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>

        </div>

        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Committed Orders</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>                  
                 <tr>
                  <th style="width: 10px">#Ord</th>
                  <th>Customers</th>
                  <th>Date</th>
                  <th style="width: 40px">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1.</td>
                  <td>XXXXX</td>
                  <td>XXX</td>
                  <td><span class="badge bg-danger">Printing</span></td>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>XXXXX</td>
                  <td>XXX</td>
                  <td><span class="badge bg-warning">Printing</span></td>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>XXXXX</td>
                  <td>XXX</td>
                  <td><span class="badge bg-success">Rolling</span></td>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>XXXXX</td>
                  <td>XXX</td>
                  <td><span class="badge bg-danger">Printing</span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /.col -->

    </div>
  </div>
</section>

<!-- /.row -->






</div><!--/. container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include '../../common/user_header_footer/footer.php';?>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
<script type="text/javascript">

  $(function () {

   var areaChartData = {
    labels  : ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
    datasets: [
    {
      label               : 'Digital Goods',
      backgroundColor     : 'rgba(60,141,188,0.9)',
      borderColor         : 'rgba(60,141,188,0.8)',
      pointRadius          : false,
      pointColor          : '#3b8bba',
      pointStrokeColor    : 'rgba(60,141,188,1)',
      pointHighlightFill  : '#fff',
      pointHighlightStroke: 'rgba(60,141,188,1)',
      data                : [28, 48, 40, 19, 86, 27, 90]
    },
    {
      label               : 'Electronics',
      backgroundColor     : 'rgba(210, 214, 222, 1)',
      borderColor         : 'rgba(210, 214, 222, 1)',
      pointRadius         : false,
      pointColor          : 'rgba(210, 214, 222, 1)',
      pointStrokeColor    : '#c1c7d1',
      pointHighlightFill  : '#fff',
      pointHighlightStroke: 'rgba(220,220,220,1)',
      data                : [65, 59, 80, 81, 56, 55, 40]
    },
    ]
  }


      //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = jQuery.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
      'Chrome', 
      'IE',
      'FireFox', 
      'Safari', 
      'Opera', 
      'Navigator', 
      ],
      datasets: [
      {
        data: [700,500,400,600,300,100],
        backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: {
         showAllTooltips: false,
        legend:{
          position:'right'
        }
      }
    })
  })
  function fetch_totla_application_count(){
   var dataString = 'function_name='+'fetch_total_application_count';
   $.ajax({
    type: "POST",
    url: "php_controller/controller.php",
    data: dataString,
    cache: false,
    success: function(result){
      $("#total_user_regstd").html(result);


    }
  });
   return false;
 }
 fetch_totla_application_count();
</script>
<script src="js_controller/controller.js"></script>
<script type="text/javascript">

  $(document).ready(function() {
    var user_id;

 // view_user();

 $("#delete_btn").click(function(){
   global_delete(user_id,"user_master");
 })
 var table = $('#userrole_table').DataTable( {
  "ajax": "php_controller/list_user.php",
  "columnDefs": [ {
    "targets": -1,
    "data": null,
    "defaultContent": "<a style='cursor:pointer;' id='view_id'>View</a>|<a style='cursor:pointer;' data-toggle='modal' data-target='#exampleModal' id='delete'>Delete</a>"
  } ]
} );

 $('#userrole_table tbody').on( 'click', '#view_id', function () {
  var data = table.row( $(this).parents('tr') ).data();
        //alert(data[0]);
        //alert( data[0] +"'s salary is: "+ data[ 5 ] );
        click_id(data[0])
      } );

 $('#userrole_table tbody').on( 'click', '#delete', function () {
  var data = table.row( $(this).parents('tr') ).data();
  user_id=data[0];
} );

} );

</script>

