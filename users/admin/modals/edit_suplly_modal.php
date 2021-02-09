  <div class="modal fade" id="edit_suplly_modal">

  <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-body">
              <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Master</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

             <form role="form" id="master_reg_form">
              <div class="card-body">
               
                 <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>ID</label>
                      <input type="text" id="Supplier_id" disabled="true" class="form-control" placeholder="ID">
                    </div> 

                    <div class="form-group">
                      <label>Suppliers Name</label>
                      <input type="text" id="Supplier" class="form-control" placeholder="Suppliers Name">
                    </div> 
                    <div class="row"> <div class="col-sm-6"><div class="form-group">
                      <label>Short Name</label>
                      <input type="text" id="SupShortName" class="form-control" placeholder="Short Name of Suppliers">
                    </div></div>  
                    <div class="col-sm-6"><div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control" id="SupAddress"></textarea>
                    </div></div></div>
                   
                    <div class="row">

                      <div class="col-sm-6">
                      <div class="form-group">
                      <label>District</label>
                      <input type="text" id="SPDistrict" class="form-control" placeholder="District" >
                    </div> </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                      <label>State</label>
                      <input type="text" id="SPState" class="form-control" placeholder="State" >
                    </div> </div>
                    
                </div>
                <div class="row">

                      <div class="col-sm-6">
                      <div class="form-group">
                      <label>Country</label>
                      <input type="text" id="SPCountry" class="form-control" placeholder="Country" >
                    </div> </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                      <label>Pin</label>
                      <input type="text" id="SPPin" class="form-control" placeholder="Pin" >
                    </div> </div>
                    
                </div>  
                <div class="row">

                      <div class="col-sm-4">
                      <div class="form-group">
                      <label>Contact No</label>
                      <input type="text" id="SPContactNo" class="form-control" placeholder="ContactNo" >
                    </div> </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                      <label>Email</label>
                      <input type="email" id="SPEmail" class="form-control" placeholder="Email" >
                    </div> </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                      <label>Mobile</label>
                      <input type="text" id="SPMobile" class="form-control" placeholder="Mobile" >
                    </div> </div>
                    
                </div>
                 <div class="row">

                      <div class="col-sm-4">
                      <div class="form-group">
                      <label>GST</label>
                      <input type="text" id="SPGST" class="form-control" placeholder="GST Number" >
                    </div> </div>
                  </div>
  
                  </div>
                </div>
                   

                   <div class="col-md-12">
                    <div class="form-group">
                      <label>Status</label>
                     <select class="form-control" id="Mat_status_drop">
                      <option value="1">Active</option>
                      <option value="0">Disable</option>
                     </select>
                    </div>                  

                  </div>
             <!-- /.card-body -->

             
          </div>
          </form>
            
        </div>
        <!-- /.card -->


      </div>

      
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" onclick="Suppliers_main_master_reg('update')" class="btn btn-primary">Save </button>
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