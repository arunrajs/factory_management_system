  <div class="modal fade" id="edit_employees_modal">
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

               <form role="form" id="master_reg_forms">
              <div class="card-body">
               
                 
               
                <div class="card-body">
               
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>ID</label>
                      <input type="text" id="EName_id" disabled="true" class="form-control mandat_fld" placeholder="ID">
                    </div> 

                    <div class="form-group">
                      <label>Employees Name</label>
                      <input type="text" id="EName" class="form-control mandat_fld" placeholder="Employees Name">
                    </div> 
                    <div class="row"> <div class="col-sm-6"><div class="form-group">
                      <label>Short Name</label>
                      <input type="text" id="EShortName" class="form-control mandat_fld" placeholder="Short Name of Employees">
                    </div></div>  
                    <div class="col-sm-6"><div class="form-group">
                      <label>Desig ID</label>
                      <input type="text" id="EDesigID" class="form-control mandat_fld" placeholder="Desig ID">
                    </div></div></div>
                   
                    <div class="row">

                      <div class="col-sm-6">
                      <div class="form-group">
                      <label>Date of Birth</label>
                      <input type="date" id="EDOB" class="form-control mandat_fld" >
                    </div> </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                      <label>Address</label>
                      <textarea id="EAddress" class="form-control mandat_fld"></textarea>
                    </div> </div>
                    
                </div>
                 
                <div class="row">

                    <div class="col-sm-4">
                      <div class="form-group">
                      <label>Email</label>
                      <input type="email" id="EEmail" class="form-control mandat_fld" placeholder="Email" >
                    </div> </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                      <label>Mobile</label>
                      <input type="text" id="EMobile" class="form-control mandat_fld" placeholder="Mobile" >
                    </div> </div>
                    
                </div>

                <div class="row">

                      <div class="col-md-4">
                      <div class="form-group">
                      <label>UserName</label>
                      <input type="text" id="UserName" class="form-control mandat_fld" placeholder="UserName" >
                    </div> </div>

                   <div class="col-md-4">
                      <div class="form-group">
                      <label>Date of Joining</label>
                      <input type="date" id="EDOJ" class="form-control mandat_fld"  >
                    </div> 

                  </div>

                   <div class="col-md-4">
                    <div class="form-group">
                      <label>Status</label>
                     <select class="form-control mandat_fld" id="Mat_status_drop">
                      <option value="1">Active</option>
                      <option value="0">Disable</option>
                     </select>
                    </div>                  

                  </div>
                    
                </div>


  
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
              <button type="button" onclick="Employees_main_master_reg('update')" class="btn btn-primary">Update </button>
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