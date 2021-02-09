<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>New Registration</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
   <link rel="stylesheet" href="dist/css/style.css">
   <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
   <center>
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-right: 250px;     padding-left: 8%;">
    <!-- Left navbar links -->

    <ul class="navbar-nav">
     
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link" style="font-size: 1.5em;font-weight: 600;">ഇരവിപേരൂർ ഗ്രാമ പഞ്ചായത്ത് P2P</a>
      </li>
      
    </ul>

   

    
  </nav>
  </center>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-right: 250px;">
     <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">User Registration</h1>
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

        <!-- =========================================== Main Section Start ====================================--> 

        <div class="col-md-8">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Enter the new user details</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" id="user_registration">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-2" style="padding-top: 5%;">
                    <div class="form-group">
                     
                      <input type="number" style="text-align: center;" disabled="true" class="form-control" placeholder="+91">
                    </div>                  

                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <label>Mobile number </label>
                      <input type="number" id="user_mobile_number" class="form-control" placeholder="Mobile number">
                    </div>                  

                  </div>
                  <div class="col-md-2" style="padding-top: 5%;">
                    <div class="form-group">
                    <i class="fas fa-check-circle" id="id_okay" style="color: green;"></i>
                    <i class="fas fa-times-circle" id="id_not_okay" style="color: red;"></i>
                  </div>
                  </div>

                </div>


                <div class="form-group">
                  <label>First name </label>
                  <input type="text" id="first_name" class="form-control" placeholder="First name ">
                </div>

                <div class="form-group">
                  <label>Last name </label>
                  <input type="text" id="last_name" class="form-control" placeholder="Last name">
                </div>

                <div style="display: none;" class="form-group">
                  <label>Role</label>
                  <select id="roles" class="form-control">
                    <option value="1">Select</option>
                    <option select value="1">Portal User</option>
                  </select>
                </div>
                <div class="row">
                  
                  <div class="col-md-10">
                    <div class="form-group">
                  <label for="user_email_id">Aadhar Number</label>
                  <input type="test" class="form-control" id="user_Aadhar" placeholder="Aadhar Number">
                </div>    
                </div>             
                
                <div class="col-md-8">
                    <div class="form-group">
                  <label for="user_email_id">Email address</label>
                  <input type="email" class="form-control" id="user_email" placeholder="Enter email">
                </div>                 

                  </div>
                   <div class="col-md-2" style="padding-top: 5%;">
                    <div class="form-group">
                    <i class="fas fa-check-circle" id="id_okay_email" style="color: green;"></i>
                    <i class="fas fa-times-circle" id="id_not_okay_email" style="color: red;"></i>
                  </div>
                  </div>


                  <div class="col-md-10">
                    <div class="form-group">
                  <label for="user_email_id">Enter Password</label>
                  <input type="password" class="form-control" id="pass_1" placeholder="Enter Password">
                </div>                 

                  </div><div class="col-md-10">
                    <div class="form-group">
                  <label for="user_email_id">confirm Password</label>
                  <input type="password" class="form-control" id="pass_2" placeholder="Enter confirm Password">
                </div>                 

                  </div>
                 

                </div>

               <!--  <div class="form-group">
                  <label for="exampleInputFile">Photo</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="user_image">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                  </div>
                </div>
                 -->
             </div>
             <!-- /.card-body -->

             <div class="card-footer" style="text-align: right;">
              <button id="reg_submit_btn" type="button" onclick="registration_trigger();" class="btn btn-primary">Submit</button>
              <!--  <button id="reg_submit_btn" type="button" onclick="chek_password();" class="btn btn-primary">Submit</button>  -->
            <!--   <button id="reg_submit_btn" type="button" onclick="upload_image();" class="btn btn-primary">Submit</button> -->
            </div>
          </form>
        </div>
        <!-- /.card -->


      </div>

      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Instructions
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <dl>
              <dt>Mobile number</dt>
              <dd>Kindly Provide a valid mobile number.</dd>
              <dt>First Name And Last</dt>
              <dd>Enter Your First and last name </dd>
              <dt>Email ID</dt>
              <dd>Enter Your Email ID</dd>
            </dl>
          </div>
          <!-- /.card-body -->
        </div>

      </div>


        <div style="width: 22%;margin-left: 34%;" class="modal fade" id="OTP_BOX">
        <div class="modal-dialog modal-xl">
          <div class="modal-content" style="text-align: center;">
            <div class="modal-header">
              <h4 class="modal-title">Application Preview</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <h5>Please Enter the Mobile OTP for Account Activation</h5>
              <div class="form-group">
                  <label for="user_email_id">One Time Password (OTP)</label>
                  <input type="text" class="form-control" id="user_otp" placeholder="OTP">
                </div>                 

               <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" onclick="verfyOTP();" class="btn btn-primary">Submit Application</button>
            </div>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>

      <!--================================ Main Section End ================================== -->
    </div>

  </div><!--/. container-fluid -->
</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="#">Horizon Technology</a>.</strong>
    All rights reserved.
    
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>


<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>

<script type="text/javascript">
  
     const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
 //jQuery("#OTP_BOX").modal('show');
</script>
 <script src="js_controller/controller.js"></script>

</body>
</html>
