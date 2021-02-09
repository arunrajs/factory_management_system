  <div class="modal fade" id="edit_mat_modal">

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
                      <input type="text" disabled="true" id="MaterialItem_id" class="form-control mandat_fld" placeholder="ID">
                    </div> 

                    <div class="form-group">
                      <label>Material Item</label>
                      <input type="text" id="MaterialItem" class="form-control mandat_fld" placeholder="Material Item">
                    </div> 
                    <div class="row"> <div class="col-sm-6"><div class="form-group">
                      <label>Short Name</label>
                      <input type="text" id="MatCatShort" class="form-control mandat_fld" placeholder="Short Name of Materials">
                    </div></div>  
                    <div class="col-sm-6"><div class="form-group">
                      <label>Material Cat ID</label>
                      <input type="text" id="MatCatID" class="form-control mandat_fld" placeholder="Material Cat ID">
                    </div></div></div>
                   
                    <div class="row">

                      <div class="col-sm-6">
                      <div class="form-group">
                      <label>Unit</label>
                      <input type="text" id="Unit" class="form-control mandat_fld" placeholder="Unit" >
                    </div> </div>
                    
                </div>
  
                  </div>
                </div>
                   

                   <div class="col-md-12">
                    <div class="form-group">
                      <label>Status</label>
                     <select class="form-control mandat_fld" id="Mat_status_drop">
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
              <button type="button" onclick="Material_main_master_reg('update')" class="btn btn-primary">Save </button>
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