  <div class="modal fade" id="modal-lga">
  <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Home> Order> New Size</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" >
            <form role="form" id="master_size_forms">
              <div class="card-body">
               <div class="container">
                 <div class="row">
                   <div class="col-md-6" style="border-right: 2px dotted #3c3f43;">
                     
                     <div class="row">
                      <div class="col-md-6">
                    <div class="form-group">
                    <label>Name of Size</label>

                   <input type="text" id="size_name" class="form-control" placeholder="Name of Size">
                    </div> </div>
                  <div class="col-md-6">
                          <div class="form-group">
                            <label>Unit</label>
                           <select class="form-control" id="Size_unit_drop">
                            <option value="inch">Inch</option>
                            <option value="centimeter">Centimeter</option>
                           </select>
                          </div>
                        </div>
                </div>
                   
                                    
                 <div class="row"> 
                  <div class="col-md-6">
                    <div class="form-group">
                    <label>Width</label>

                   <input type="text" id="size_Weight" class="form-control" placeholder="Width">
                    </div>               
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <label>Length </label>

                   <input type="text" id="size_Height" class="form-control" placeholder="Length">
                    </div>  
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

                <div class="col-md-12">
                    <div class="form-group">
                      <label>Status</label>

                     <select class="form-control" id="Size_status_drop">
                      <option value="1">Active</option>
                      <option value="0">Disable</option>
                     </select>
                    </div>                  

                  </div>

                   </div>
                   <div class="col-md-6" style="overflow-x: scroll;">
                     
                      <table id="size_list_table" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>SizeID</th>
              <th>Size Name</th>
              <th>Width</th>
              <th>Length</th>
              <th>Gauge</th>
              <th>Micron</th>
              <th>Unit</th>
              <th>Status</th>
            </tr>
          </thead>
          
          </table>
                   </div>
                 </div>
               </div>
                
               

                   
                  

                    
             </div>
             <!-- /.card-body -->

             <div class="card-footer" style="text-align: right;">
              
              <!--   <button id="reg_submit_btn" type="button" onclick="upload_image();" class="btn btn-primary">Submit</button> -->
            </div>
          </form>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button id="reg_submit_btn" type="button" onclick="size_master_reg('create');" class="btn btn-primary">+ Add</button> 
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