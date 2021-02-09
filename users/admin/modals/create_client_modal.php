  <div class="modal fade" id="create_client_modal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Customers List> Create Customers</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" id="master_reg_form">
          <!-- Modal Body -->
          <div class="row">
            <div class="col-md-2">
              ID<input id="client_reg_ID" class="mandat_fld client_nexID form-control" disabled="true" type="text" placeholder="">
            </div>
            <div class="col-md-5">
              Name<input id="client_name" class="mandat_fld form-control"  type="text" placeholder="Name">
            </div>
            <div class="col-md-5">
              Short Name<input id="client_short_name"class="mandat_fld form-control" type="text" placeholder="Short Name">
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              Address<textarea id="client_Address" class="mandat_fld form-control"> </textarea> 
            </div>
            <div class="col-md-3">
             Country <select class="form-control country_drop mandat_fld" id="client_Country_drop">

                     </select>
          </div>
          <div class="col-md-3">
             State <select class="form-control state_drop mandat_fld" id="client_state_drop">

                     </select>
          </div>
          <div class="col-md-3">
           District<select class="form-control district_drop mandat_fld" id="client_District_drop">
            <option>Select</option>

          </select>
        </div> 
      </div>
      <div class="row">
        <div class="col-md-3">
         City<input class="form-control mandat_fld" type="text" placeholder="City" id="client_city">
      </div>
      <div class="col-md-3">
       Pincode<input class="form-control mandat_fld" type="text" placeholder="Pincode" id="client_pincode">
     </div><div class="col-md-3">
       Country Code<input class="form-control mandat_fld" type="text" value="91" id="client_country_code">
     </div><div class="col-md-3">
       Contact No<input class="form-control" type="text" placeholder="Contact No" id="client_ContacNo">
     </div>

   </div>
   <div class="row">
     <div class="col-md-3">
       Mobile Number<input class="form-control mandat_fld" type="text" placeholder="Mobile Number" id="client_MobileNo">
     </div><div class="col-md-3">
       Contact Person<input class="form-control mandat_fld" type="text" placeholder="Contact Person" id="client_ContactPerson">
     </div><div class="col-md-3">
      Email<input class="form-control" type="email" placeholder="Email" id="client_email_id">
     </div><div class="col-md-3">
        Website<input class="form-control" type="text" placeholder=" Website" id="client_wesite">
     </div>
   </div> 
   <div class="row">
     <div class="col-md-3">
        Order Frequency<select class="form-control order_frequency_drop mandat_fld" onchange="orderFrequencyChange(this,$('#client_nextExpecting_order'))" id="client_orderFrequency">
        </select>
     </div>
     <div class="col-md-3">
        Next Expecting Order Date <input class="form-control mandat_fld" type="date" disabled="true" id="client_nextExpecting_order">
     </div>
   </div> 
</form>
   <!--// Modal Body -->
 </div>
 <div class="modal-footer justify-content-between">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary" id="client_create_btn" onclick="register_new_client('create')">Save </button>
</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>