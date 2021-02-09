  <div class="modal fade" id="edit_size_modal">
  <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-body">
              <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Size Master</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

              <form role="form" id="master_reg_forms">
              <div class="card-body">
               
                <div class="row">
                  <div class="col-md-10">
                    <div class="form-group">
                      <label>ID</label>

                   <input type="text" id="size_id" disabled="true" class="form-control" placeholder="ID of Size">
                    </div> 

                     <div class="form-group">
                      <label>Name of Size</label>

                   <input type="text" id="size_name" class="form-control mandat_fld" placeholder="Name of Size">
                    </div>  
                  </div>
                </div>
                     <div class="row">

                  <div class="col-md-4">
                    <div class="form-group">
                    <label>Width</label>

                   <input type="text" id="size_Height" class="form-control mandat_fld" placeholder="Width">
                    </div>                  
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                    <label>Length</label>

                   <input type="text" id="size_Weight" class="form-control mandat_fld" placeholder="Length">
                    </div>                  
                  </div>

                  
                  <div class="row">
                  <div class="col-md-4">
                          <div class="form-group">
                            <label>Measurement</label>
                           <select class="form-control" onchange="changeMeasurement()"  id="Size_Measurement_drop">
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


                <div class="col-md-4">
                          <div class="form-group">
                            <label>Unit</label>
                           <select class="form-control mandat_fld" id="Size_unit_drop">
                            <option value="inch">Inch</option>
                            <option value="centimeter">Centimeter</option>
                           </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                    <div class="form-group">
                      <label>Status</label>

                     <select class="form-control mandat_fld" id="Size_status_drop">
                      <option value="1">Active</option>
                      <option value="0">Disable</option>
                     </select>
                    </div>                  

                  </div>
            </div>
                 

                   
                  

                    
             </div>
             <!-- /.card-body -->

            
          </form>
            
        </div>
        <!-- /.card -->


      </div>

      
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" onclick="size_master_reg('update')" class="btn btn-primary">Update </button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


<!-- <script>
$(function() {
  alert(1)

});
</script> -->