   <div class="modal fade" id="set_order_modal">
  <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4  style="width: 100%; min-width: 32%;" class="modal-title">Home> Order> New Order</h4>
              <div class="col-md-2">
                <a class="btn btn-block bg-gradient-primary btn-sm" style="white-space: nowrap;" target="_blank" href="?f=job_schedule">Job Schedule</a>
              </div>
               
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

          <div class="row">
            <div class="col-md-6"> Product
              <input class="form-control mandat_fld" id="Order_Products" type="text"  name="Order_Product" placeholder="Product">
              <input class="form-control" id="Order_Products_id_hidden" type="hidden">
            </div>
            <div class="col-md-6"> Type
              <input class="form-control mandat_fld" id="Order_Type" type="text" placeholder="Type"></div>
              <input class="form-control" id="Order_Type_id_hidden" type="hidden">
         </div>

         <div class="row"> 

          <div class="col-md-6">
           Size<input class="form-control mandat_fld" id="Order_Size" type="text" placeholder="Size">
           <input class="form-control" id="Order_Size_id_hidden" type="hidden">
           <input class="form-control" id="Order_Size_hidden_Height" type="hidden">
           <input class="form-control" id="Order_Size_hidden_Weight" type="hidden">
           <input class="form-control" id="Order_Size_hidden_Gage" type="hidden">
           <input class="form-control" id="Order_Size_hidden_unit" type="hidden">
         </div>

        

      
             <div class="col-md-1">
            <button type="button"  id="openSize_model_btn"  style=" margin-top: 34%;"  class="btn btn-block bg-gradient-success btn-sm" data-toggle="modal" data-target="#modal-lga">+ </button>
         </div>
             <!-- <div class="col-md-1">
              Weight<input class="form-control mandat_fld" disabled="true" id="Order_weight_total" type="text" placeholder="Weight">
           <input class="form-control" id="Order_Size_id_hidden" type="hidden">
         </div> -->
          
         </div>

         <div class="row">

          <div class="col-md-2"> Quentity Type <select disabled="true" class="form-control" id="Quentity_Type">
                          <option value="0">Number</option>
                          <option value="1">Weight</option>
                        </select>
                      </div>


            <div class="col-md-1"> Number<input disabled="true" class="form-control mandat_fld" id="order_number" type="number" placeholder="Number"></div> 
            <p style="margin-top: 2.2%;">OR</p>
            <div class="col-md-1"> KG<input disabled="true" class="form-control mandat_fld" id="order_kg" type="number" placeholder="KG"></div> 
 <div class="col-md-1"> TAX % <input class="form-control mandat_fld" type="text" id="order_tax" placeholder="TAX %"></div> 
            <!-- <div class="col-md-2"> Unit
              <select class="form-control mandat_fld" id="Order_unit">
                        
                        </select></div> -->
        <div class="col-md-1"> Rate<input class="form-control mandat_fld" type="text" id="order_per_rate" placeholder="Rate"></div> 
        <div class="col-md-1"> Per<select class="form-control" id="order_per">
                          <option value="kg">KG</option>
                          <option value="no">Number</option>
                        </select></div>
        <div class="col-md-3">Committed Date<input class="form-control mandat_fld" id="Order_Committed_Date" type="datetime-local"></div> 
         </div>

         <div class="row">
          
          <div class="col-md-6">
             Order Description (Max 255 Characters)
             <textarea class="form-control mandat_fld" rows="3" id="Order_Description" placeholder="Enter ..."></textarea>

          </div>
          <div class="col-md-6">
          Order Moving Status <span style="color: red;">*</span>
          <p id='teststt'></p>
           <div class="form-group">
            <div class="row" id="status_section"> </div>
                        
                        
           </div>
         </div>
        </div>

       
		</div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" id="order_mdl_btn" onclick="add_new_order_to_table()" class="btn btn-primary">Add </button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>