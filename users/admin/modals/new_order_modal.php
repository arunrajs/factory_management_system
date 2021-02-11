  <div class="modal fade" id="modal-lg">
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
  <form role="form"  id="order_reg_forms"> 
            <div class="row">
            <div class="col-3">
             Order #<input class="form-control Order_id_class" id="Order_id" type="text" disabled="true" placeholder="00000">
           </div> 
           <div class="col-3">
             Date<input class="form-control mandat_fld" id="Order_date" type="datetime-local">
           </div> 
           <div class="col-3">
            <div class="row">
              <div class="col-md-12"> Customer<input class="form-control mandat_fld" id="Order_customer" type="text" placeholder="Customer">

                <input class="form-control"  id="Order_customer_id_hidden" type="hidden"></div>
           </div>
         </div> 
         <div class="col-3" style="padding-top: 1.2em;">
            <div class="row">
             <div class="col-md-3"> 
             <button type="button" class="btn btn-block bg-gradient-success btn-sm" data-toggle="modal" data-target="#create_client_modal">+ </button>
           </div>
           <div class="col-md-7"> 
             <button type="button" id="pre_order_btn" disabled="true" class="btn btn-block bg-gradient-warning btn-sm" data-toggle="modal" data-target="#preorder_modal">< Pre Orders ::</button>
           </div>
             </div>
           </div>
         </div>
         <hr>
         <div class="row">
              <div class="col-md-1">
                <button type="button" id="add_newItem_orde_btn" disabled="true" class="btn btn-block bg-gradient-success btn-sm" data-toggle="modal" onclick="clear_set_modal()" data-target="#set_order_modal">+ Add Item</button>

              </div>

         </div>

        <div class="set_order_table_div">
            <table id="set_order_list_table" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>Ord#</th>
              <th>Product</th>
              <th>Type</th>
              <th>Weight</th>
              <th>Amount</th>
              <th>Tax</th>
              <th>Total</th>
              <th>Action</th>
            </tr> 
          </thead>
             <tbody id="set_order_tableBody">
          
          
           </tbody>
          </table>

          </div>
           
        
         
        
        
            <div class="row">
          <div class="col-md-4"> Total Amount

            <input onkeyup="calculate_order_Pending_Amount();" id="order_Total_Amount" class="form-control mandat_fld" type="text" placeholder="Total Amount">

            <input  id="order_Total_Amount_hidden" class="form-control mandat_fld" type="hidden" placeholder="Total Amount">

          </div>
          <div class="col-md-4"> Advance Amount<input onkeyup="calculate_order_Pending_Amount();"  id="order_Advance_Amount" class="form-control mandat_fld" type="text" placeholder="Total Amount"></div>
          <div class="col-md-4"> Pending Amount<input id="order_Pending_Amount" disabled="true" class="form-control mandat_fld" type="text" placeholder="Total Amount"></div>
        </div>
            </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" id="order_mdl_btn" onclick="create_new_order('create')" class="btn btn-primary">Add </button>
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