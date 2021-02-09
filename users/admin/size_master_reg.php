<!-- gen header included -->
<?php include '../../common/user_header_footer/header.php';?>
<!-- //gen header included -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Size Master</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Size Master</li>
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

        <!-- =========================================== Main Section Start ====================================--> 

        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Size Master</h3>
              <a class="btn btn-block bg-gradient-success btn-sm pGback_btn" onclick="goBack()" href="#">< Back</a>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" id="master_size_reg_forms">
              <div class="card-body">
               
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Name of Size</label>

                   <input type="text" id="size_name" class="mandat_fld form-control" placeholder="Name of Size">
                    </div>  
                  </div>
                  <div class="col-md-6">
                          <div class="form-group">
                            <label>Unit</label>
                           <select class="form-control mandat_fld" id="Size_unit_drop">
                            <option value="inch">Inch</option>
                            <option value="centimeter">Centimeter</option>
                           </select>
                          </div>
                        </div>
                </div>
                     <div class="row">

                  <div class="col-md-4">
                    <div class="form-group">
                    <label>Width </label>

                   <input type="text" id="size_Height" class="mandat_fld form-control" placeholder="Width">
                    </div>                  
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                    <label>Length </label>

                   <input type="text" id="size_Weight" class="mandat_fld form-control" placeholder="Length">
                    </div>                  
                  </div>
                 <div class="col-md-4">
                   <div class="row">
                  <div class="col-md-4">
                          <div class="form-group">
                            <label>Measurement</label>
                           <select class="form-control" onchange="changeMeasurement()" id="Size_Measurement_drop">
                            <option value="gauge">Gauge</option>
                            <option value="micron">Micron</option>
                           </select>
                          </div>
                        </div>

                  <div class="col-md-4">
                    <div class="form-group">
                    <label>Gauge</label>
                   <input type="text" id="size_Gage" class="form-control size_Gage_class" placeholder="Gauge">
                    </div>                  
                </div>
                 <div class="col-md-4">
                    <div class="form-group">
                    <label>Micron</label>
                   <input type="text" id="size_Micron" disabled="true" class="form-control size_Micron_class" placeholder="Micron">
                    </div>                  
                </div>
              </div>
            </div>

            </div>
                 

                   <div class="col-md-12">
                    <div class="form-group">
                      <label>Status</label>
                     <select class="mandat_fld form-control" id="Size_status_drop">
                      <option value="1">Active</option>
                      <option value="0">Disable</option>
                     </select>
                    </div>                  

                  </div>
                  

                    
             </div>
             <!-- /.card-body -->

             <div class="card-footer" style="text-align: right;">
              <button id="reg_submit_btn" type="button" onclick="size_master_reg('create');" class="btn btn-primary">+ Add</button> 
              <!--   <button id="reg_submit_btn" type="button" onclick="upload_image();" class="btn btn-primary">Submit</button> -->
            </div>
          </form>
        </div>
        <!-- /.card -->


      </div>

      


      <!--================================ Main Section End ================================== -->
    </div>

  </div><!--/. container-fluid -->
</section>
<!-- /.content -->
</div>
<?php include '../../common/user_header_footer/footer.php';?>
<!-- //Footer included -->
<script src="js_controller/controller.js"></script>
<script type="text/javascript">
//fetch_country_drop();
$("#modal-lga").remove();
$("#edit_size_modal").remove();
$("#master_size_forms").remove();

$("#size_name").focus();
</script>
