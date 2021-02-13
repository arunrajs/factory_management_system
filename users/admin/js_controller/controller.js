// Init Functions 
fetch_country_drop();
fetch_state_drop();
fetch_district_drop(1);
fetch_Order_Frequency_drop();
fetch_Order_unit_drop();
fetch_autoIncrmnt_value("customers",$('.client_nexID'));
fetch_autoIncrmnt_value("order_master",$('#Order_id'));
fetch_autoIncrmnt_value("ord_machinejobs",$('#JobCard_id'));
fetch_autoIncrmnt_value("materialpurchase",$('.PurchaseID_counter'));
load_order_table();
load_purchase_table();
size_measurement_flag=0;
var set_list_name=1;
var order_list_array=[];
var init_totalAmount=0;
//$("#size_list_table").DataTable().ajax.reload(null, false); 
 //$("#status_section [value=" + 1 + "]").attr("checked", "checked");

var Quentity_Type_flag="1";

$(':input').on('focus',function(){
        $(this).attr('autocomplete', 'off');
    });

//Nav Bar Clock 
setInterval(function() {
    var date = new Date(),
        time = date.toUTCString();
    $(".clock").html(time);
  }, 1000);

// Open Client List Modal.
$("#clients_list_btn").click(function(){
	jQuery("#client_list_model").modal('show');
	load_client_details()
});
//sweetalert2 
function fire_message(type,main_message,button_msg){
//success,info,error,warning
Swal.fire(
	main_message,
	button_msg,
	type
	)
}

//Country Master Registration 
function country_master_reg(){
	var Country=$("#Country").val();
	var CountryCode=$("#CountryCode").val();
	if(Country==""||CountryCode==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		var dataString= 'function_name= '+'country_master_reg'+'&Country='+Country+'&CountryCode='+CountryCode;
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','County Already registered!','Please Try Again');
				}else{
					fire_message('success','New Country Added Successfully!','');
					$('#master_reg_form').find(':input').val('');
				}
			}
		});
		return false;
	}
}
// Fetch Country to drop down
function fetch_country_drop(){
	var dataString= 'function_name= '+'fetch_country_drop';
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			$(".country_drop").empty();
			$(".country_drop").html(result);
		}
	});
	return false;
}// Fetch State to drop down
function fetch_state_drop(){
	var CID=1;
	var dataString= 'function_name= '+'fetch_state_drop'+'&CID='+CID;
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			if(result==""){
				$(".state_drop").html("<option>Select</option>");
			}else{
				$(".state_drop").empty();
				$(".state_drop").html(result);
			}
		}
	});
	return false;
}
//State Master Registration 
function state_master_reg(){
	var State=$("#State").val();
	var state_country_drop=$(".country_drop").children("option:selected").val();
	if(State==""||state_country_drop==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		var dataString= 'function_name= '+'state_master_reg'+'&State='+State+'&state_country_drop='+state_country_drop;
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','State Already registered!','Please Try Again');
				}else{
					fire_message('success','New State Added Successfully!','');
					$('#master_reg_form').find(':input').val('');
				}
			}
		});
		return false;
	}
}
//State Master Registration 
function district_master_reg(){
	var District=$("#District").val();
	var district_reg_country_drop=$("#district_reg_country_drop").children("option:selected").val();
	var district_reg_state_drop=$("#district_reg_state_drop").children("option:selected").val();
	if(District==""||district_reg_country_drop==""||district_reg_state_drop==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		var dataString= 'function_name= '+'district_master_reg'+'&District='+District+'&district_reg_country_drop='+district_reg_country_drop+'&district_reg_state_drop='+district_reg_state_drop;
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','District Already registered!','Please Try Again');
				}else{
					fire_message('success','New District Added Successfully!','');
					$('#District').val('');
				}
			}
		});
		return false;
	}
}
$(".country_drop").change(function(){
	var CID=$(this).val();
	var dataString= 'function_name= '+'fetch_state_drop'+'&CID='+CID;
	//alert(dataString);
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			//alert(result)
			$(".state_drop").empty();
			$(".state_drop").html(result);
			fetch_district_drop($(".state_drop").children("option:selected").val());
		}
	});
	return false;
})
$(".state_drop").change(function(){
	var STID=$(this).val();
	fetch_district_drop(STID);
})
//Order Frequency Master Registration 
function order_frequency_master_reg(){
	var Name_of_Order_Frequency=$("#Name_of_Order_Frequency").val();
	var Number_of_days=$("#Number_of_days").val();
	var Order_Frequency_status_drop=$("#Order_Frequency_status_drop").children("option:selected").val();
	if(Name_of_Order_Frequency==""||Number_of_days==""||Order_Frequency_status_drop==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		var dataString= 'function_name= '+'order_frequency_master_reg'+'&Name_of_Order_Frequency='+Name_of_Order_Frequency+'&Number_of_days='+Number_of_days+'&Order_Frequency_status_drop='+Order_Frequency_status_drop;
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Order Frequency Already registered!','Please Try Again');
				}else{
					fire_message('success','New Order Frequency Added Successfully!','');
					$('#master_reg_form').find(':input').val('');
				}
			}
		});
		return false;
	}
}
//fetch District Drop down value
function fetch_district_drop(STID){
	var dataString= 'function_name= '+'fetch_district_drop'+'&STID='+STID;
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			if(result==""){
				$(".district_drop").html("<option>Select</option>");
			}else{
				$(".district_drop").empty();
				$(".district_drop").html(result);
			}
		}
	});
	return false;
}
//fetch Order Frequency Drop down value
function fetch_Order_Frequency_drop(){
	var dataString= 'function_name= '+'fetch_Order_Frequency_drop';
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			if(result==""){
				$(".order_frequency_drop").html("<option>Select</option>");
			}else{
				$(".order_frequency_drop").empty();
				$(".order_frequency_drop").html(result);
			}			
		}
	});
	return false;
}
//Get the last Auto Increment value from the customer table
function fetch_autoIncrmnt_value(table,dome_id){
	var dataString= 'function_name= '+'fetch_autoIncrmnt_value'+'&table='+table;
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			//alert(result)
			dome_id.empty();
			dome_id.val(result);		
		}
	});
	return false;
}
//Client Registration 
function register_new_client(type){
	var client_reg_ID=$("#client_reg_ID").val();
	var client_name=$("#client_name").val();
	var client_short_name=$("#client_short_name").val();
	var client_Address=$("#client_Address").val();
	var client_Country_drop=$("#client_Country_drop").children("option:selected").val();
	var client_state_drop=$("#client_state_drop").children("option:selected").val();
	var client_District_drop=$("#client_District_drop").children("option:selected").val();
	var client_city=$("#client_city").val();
	var client_pincode=$("#client_pincode").val();
	var client_country_code=$("#client_country_code").val();
	var client_ContacNo=$("#client_ContacNo").val();
	var client_MobileNo=$("#client_MobileNo").val();
	var client_ContactPerson=$("#client_ContactPerson").val();
	var client_email_id=$("#client_email_id").val();
	var client_wesite=$("#client_wesite").val();
	var client_orderFrequency=$("#client_orderFrequency").children("option:selected").val();
	var client_nextExpecting_order=$("#client_nextExpecting_order").val();
	var function_name;
	if(client_reg_ID=="" || client_name=="" || client_short_name=="" || client_Address=="" || client_Country_drop=="" || client_state_drop=="" || client_District_drop=="" || client_city=="" || client_pincode=="" || client_country_code==""  || client_MobileNo=="" || client_ContactPerson=="" || client_orderFrequency=="" || client_nextExpecting_order==""){

		fire_message('error','Please enter mandatory fields !','');
	}else{
		if(type=="create"){
			function_name="register_new_client";
		}else if(type=="update"){
			function_name="update_client";
		}
		//alert(client_nextExpecting_order);
	var dataString= 'function_name= '+function_name+'&client_reg_ID='+client_reg_ID+'&client_name='+client_name+'&client_short_name='+client_short_name+'&client_Address='+client_Address+'&client_Country_drop='+client_Country_drop+'&client_state_drop='+client_state_drop+'&client_District_drop='+client_District_drop+'&client_city='+client_city+'&client_pincode='+client_pincode+'&client_country_code='+client_country_code+'&client_ContacNo='+client_ContacNo+'&client_MobileNo='+client_MobileNo+'&client_ContactPerson='+client_ContactPerson+'&client_email_id='+client_email_id+'&client_wesite='+client_wesite+'&client_orderFrequency='+client_orderFrequency+'&client_nextExpecting_order='+client_nextExpecting_order;
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			if(result==1){
					fire_message('error','Client Mobile Number already registered!','Please Try Again');
				}else if(result==2){

					fire_message('error','Client Email Number already registered!','Please Try Again');
				}else if(result==3){
					fire_message('success','New Client Registered Successfully!','');
					$('#master_reg_form').find(':input').val('');
					fetch_country_drop();
					fetch_state_drop();
					fetch_district_drop(1);
					fetch_Order_Frequency_drop();
					fetch_autoIncrmnt_value("customers",$('.client_nexID'));
					 $("#user_list_tables").DataTable().ajax.reload(null, false); 
					jQuery("#create_client_modal").modal('hide');

				}else if(result==4){
					fire_message('success','Client Details Updated Successfully!','');
						 $("#user_list_tables").DataTable().ajax.reload(null, false); 
						 jQuery("#create_client_modal").modal('hide');
				}	
		}
	});
	return false;

	}
}
//Order Frequency change function 
function orderFrequencyChange(selected_value,display_div){
	var dataString= 'function_name= '+'orderFrequencyChange'+'&selected_value='+selected_value.value;
	//alert(dataString);
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			var date = new Date();
				date.setDate(date.getDate() + parseInt(result));
				var formattedDate = date.toISOString().substr(0, 10);
				display_div.val(formattedDate);
		}
	});
	return false;
}

function load_client_details(){
var table = $('#user_list_table').DataTable( {
	 destroy: true,
        "ajax": "php_controller/list_client_details.php",
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<a style='cursor:pointer;' id='view_id'>Edit</a>"
        } ]
    } );

    $('#user_list_table tbody').on( 'click', '#view_id', function () {
        var data = table.row( $(this).parents('tr') ).data();
         edit_me(data[0],'create_client_modal','customers','CustID')
    } );

   
}

//Product 
function product_master_reg(type){
	var product_name=$("#product_name").val();
	
	var product_Description=$("#product_Description").val();
	var product_status_drop=$("#product_status_drop").children("option:selected").val();
	var function_name;
	var product_id;
	if(product_name==""||product_Description==""||product_status_drop==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		//alert(type)
		if(type=="create"){

			function_name="product_master_reg";
			product_id=0;
		}else if(type=="update"){
			function_name="product_master_updade";
			var product_id=$("#product_id").val();
		}
		var dataString= 'function_name= '+function_name+'&product_name='+product_name+'&product_Description='+product_Description+'&product_status_drop='+product_status_drop+'&product_id='+product_id;
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Product Already registered!','Please Try Again');
				}else if(result==2){
					fire_message('success',' Product Updated Successfully!','');
					
				}else{
					fire_message('success','New Product Added Successfully!','');
					$('#master_reg_form').find(':input').val('');
				}
			}
		});
		return false;
	}
}
//Type
function type_master_reg(type){
	var type_name=$("#type_name").val();
	var Type_status_drop=$("#Type_status_drop").children("option:selected").val();
	var function_name;
	if(type_name==""||Type_status_drop==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		if(type=="update"){
			function_name="type_master_upate";
			var type_id=$("#type_id").val();

		}else if(type=="create"){
			function_name="type_master_reg";
			var type_id=0;
		}
		var dataString= 'function_name= '+function_name+'&type_name='+type_name+'&Type_status_drop='+Type_status_drop+'&type_id='+type_id;
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Type Already registered!','Please Try Again');
				}else if(result==2){
					fire_message('success','Type Updated Successfully!','');
					
				}else{
					fire_message('success','New Type Added Successfully!','');
					$('#master_reg_form').find(':input').val('');
				}
			}
		});
		return false;
	}
}
//Size
function size_master_reg(type){
	var size_name=$("#size_name").val();
	var size_Height=$("#size_Height").val();
	var size_Weight=$("#size_Weight").val();
	var size_Gage=$(".size_Gage_class").val();
	var size_Micron=$(".size_Micron_class").val();
	var size_unit=$("#Size_unit_drop").children("option:selected").val();
	var Size_status_drop=$("#Size_status_drop").children("option:selected").val();
	var function_name;

	if(size_name==""||size_Height==""||size_Weight==""||size_Gage==""||size_unit==""||size_Micron==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		//alert(type)
		if(type=="create"){
			function_name="size_master_reg";
			var size_id=0;
		}else if(type=="update"){
			function_name="size_master_update";
			var size_id=$("#size_id").val();
		}
		var dataString= 'function_name= '+function_name+'&size_name='+size_name+'&size_Height='+size_Height+'&size_Weight='+size_Weight+'&size_Gage='+size_Gage+'&Size_status_drop='+Size_status_drop+'&size_id='+size_id+'&size_unit='+size_unit+'&size_Micron='+size_Micron;
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Size Already registered!','Please Try Again');
				}else if(result==2){
					$("#size_list_table").DataTable().ajax.reload(null, false); 
					fire_message('success','Size updated Successfully!','');
					
				}else{
					$("#size_list_table").DataTable().ajax.reload(null, false); 
					fire_message('success','New Size Added Successfully!','');
					$('#master_reg_forms').find(':input').val('');

				}
			}
		});
		return false;
	}
}//Unit
function unit_master_reg(type){
	var Unit_name=$("#Unit_name").val();
	
	var Unit_status_drop=$("#Unit_status_drop").children("option:selected").val();
	var function_name;

	if(Unit_name==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{

		if(type=="create"){
			function_name="unit_master_reg"
			var Unit_id=0;
		}else if(type=="update"){
			function_name="unit_master_upate"
			var Unit_id=$("#Unit_id").val();
		}
		var dataString= 'function_name= '+function_name+'&Unit_name='+Unit_name+'&Unit_status_drop='+Unit_status_drop;
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Unit Already registered!','Please Try Again');
				}else{
					fire_message('success','New Unit Added Successfully!','');
					$('#master_reg_forms').find(':input').val('');
				}
			}
		});
		return false;
	}
}//Order Status
function order_status_master_reg(type){
	var OSShortName=$("#OSShortName").val();
	var OSName=$("#OSName").val();
	var OSValue=$("#OSValue").val();
	var Order_Status__status_drop=$("#Order_Status__status_drop").children("option:selected").val();
	var function_name;

	if(OSShortName==""||OSName==""||OSValue==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{


		if(type=="create"){
			function_name="order_status_master_reg"
			var OSID=0;
		}else if(type=="update"){
			function_name="order_status_master_update"
			var OSID=$("#OSID").val();
		}
		var dataString= 'function_name= '+function_name+'&OSShortName='+OSShortName+'&OSName='+OSName+'&OSValue='+OSValue+'&Order_Status__status_drop='+Order_Status__status_drop+'&OSID='+OSID;
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Order Status Already registered!','Please Try Again');
				}else if(result==2){
					fire_message('success','Order Status Updated Successfully!','');
					$('#master_reg_forms').find(':input').val('');
					$("#Order_Status_list_table").DataTable().ajax.reload(null, false); 
					jQuery("#edit_orderStatus_modal").modal('hide');
				}else{
					fire_message('success','New Type Added Successfully!','');
					$('#master_reg_forms').find(':input').val('');
					$("#Order_Status_list_table").DataTable().ajax.reload(null, false); 

				}
			}
		});
		return false;
	}
}//Machine
function Machine_master_reg(type){
	var Machine=$("#Machine").val();
	var MShortName=$("#MShortName").val();
	var CapacityPerShift=$("#CapacityPerShift").val();
	var MPurchDate=$("#MPurchDate").val();
	var MNextServiceDate=$("#MNextServiceDate").val();
	var MachineDetals=$("#MachineDetals").val();
	var Machine_status_drop=$("#Machine_status_drop").children("option:selected").val();
	var function_name;



	if(Machine==""||MShortName==""||CapacityPerShift==""||MPurchDate==""||MNextServiceDate==""||MachineDetals==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{

		if(type=="create"){
			function_name="Machine_master_reg"
			var MID=0;
		}else if(type=="update"){
			function_name="Machine_master_update"
			var MID=$("#MID").val();
		}
		var dataString= 'function_name='+function_name+'&Machine='+Machine+'&MShortName='+MShortName+'&CapacityPerShift='+CapacityPerShift+'&MPurchDate='+MPurchDate+'&MNextServiceDate='+MNextServiceDate+'&MachineDetals='+MachineDetals+'&Machine_status_drop='+Machine_status_drop+'&MID='+MID;
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Machine Already registered!','Please Try Again');
				}else if(result==2){
					fire_message('success','Machine Details Updated!','');
					$('#master_reg_forms').find(':input').val('');
					$("#Machine_list_table").DataTable().ajax.reload(null, false); 
					jQuery("#edit_machine_modal").modal('hide');
				}else{
					fire_message('success','New Machine Added Successfully!','');
					$('#master_reg_forms').find(':input').val('');
					$("#Machine_list_table").DataTable().ajax.reload(null, false); 

				}
			}
		});
		return false;
	}
}
function colours_master_reg(){
	var Colour=$("#Colour").val();
	var CLShort=$("#CLShort").val();
	var colours_status_drop=$("#colours_status_drop").children("option:selected").val();


	if(Colour==""||CLShort==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		var dataString= 'function_name= '+'colours_master_reg'+'&Colour='+Colour+'&CLShort='+CLShort+'&colours_status_drop='+colours_status_drop;
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Colour Already registered!','Please Try Again');
				}else{
					fire_message('success','New Colour Added Successfully!','');
					$('#master_reg_forms').find(':input').val('');
				}
			}
		});
		return false;
	}
}//Material
function Material_master_reg(type){
	var MatCategory=$("#MatCategory").val();
	var MatCatShort=$("#MatCatShort").val();
	var MinStockLevel=$("#MinStockLevel").val();
	var MaxStockLevel=$("#MaxStockLevel").val();
	var StockUnit=$("#StockUnit").val();
	var MatType=$("#MatType").val();
	var Mat_status_drop=$("#Mat_status_drop").children("option:selected").val();
	var function_name;
	/*alert("MatCategory "+MatCategory+" MatCatShort "+MatCatShort+" MinStockLevel "+MinStockLevel+" MaxStockLevel "+MaxStockLevel+" StockUnit "+StockUnit+" MatType "+MatType);
*/
	if(MatCategory==""||MatCatShort==""||MinStockLevel==""||MaxStockLevel==""||StockUnit==""||MatType==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		if(type=="create"){
			function_name="Material_master_reg"
			var MatCatID=0;
		}else if(type=="update"){
			function_name="Material_master_update"
			var MatCatID=$("#MatCategory_id").val();
		}
		
		var dataString= 'function_name= '+function_name+'&MatCategory='+MatCategory+'&MatCatShort='+MatCatShort+'&MinStockLevel='+MinStockLevel+'&MaxStockLevel='+MaxStockLevel+'&StockUnit='+StockUnit+'&MatType='+MatType+'&Mat_status_drop='+Mat_status_drop+'&MatCatID='+MatCatID;
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Machine Already registered!','Please Try Again');
				}else if(result==2){
					fire_message('success','Material Category Details Updated!','');
					$('#master_reg_form').find(':input').val('');
					$("#MatCategories_table").DataTable().ajax.reload(null, false); 
					jQuery("#edit_matcat_modal").modal('hide');
				}else{
					fire_message('success','New Machine Added Successfully!','');
					$('#master_reg_forms').find(':input').val('');

				}
			}
		});
		return false;
	}
}//Material
function Material_main_master_reg(type){
	var MaterialItem=$("#MaterialItem").val();
	var MatCatShort=$("#MatCatShort").val();
	var MatCatID=$("#MatCatID").val();
	var Unit=$("#Unit").val();
	var Mat_status_drop=$("#Mat_status_drop").children("option:selected").val();
	var function_name;

	if(MaterialItem==""||MatCatShort==""||MatCatID==""||Unit==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{

		if(type=="create"){
			function_name="Material_main_master_reg"
			var MINo=0;
		}else if(type=="update"){
			function_name="Material_main_master_update"
			var MINo=$("#MaterialItem_id").val();
		}

		var dataString= 'function_name='+function_name+'&MaterialItem='+MaterialItem+'&MatCatShort='+MatCatShort+'&MatCatID='+MatCatID+'&Unit='+Unit+'&Mat_status_drop='+Mat_status_drop+'&MINo='+MINo;
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Material Already registered!','Please Try Again');
				}else if(result==2){
					fire_message('success','Material  Details Updated!','');
					$('#master_reg_form').find(':input').val('');
					$("#Mat_list_table").DataTable().ajax.reload(null, false); 
					jQuery("#edit_mat_modal").modal('hide');
				}else{
					fire_message('success','New Material Added Successfully!','');
					$('#master_reg_forms').find(':input').val('');
				}
			}
		});
		return false;
	}
}function purchase_main_master_reg(types){

//	alert(types)
	var PurchaseID=$("#PurchaseID").val();
	var supplier_purchase_Master=$("#supplier_purchase_Master_hidden").val();
	var Material_purchase_Master=$("#Material_purchase_Master_hidden").val();
	var Date_purchase_Master=$("#Date_purchase_Master").val();
	var Purchase_Unit_purchase_Master=$("#Purchase_Unit_purchase_Master").val();
	var Purchase_Qty_purchase_Master=$("#Purchase_Qty_purchase_Master").val();
	var function_name;
	if(supplier_purchase_Master==""||Material_purchase_Master==""||Date_purchase_Master==""||Purchase_Unit_purchase_Master==""||Purchase_Qty_purchase_Master==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		if(types=="create"){
			function_name="purchase_main_master_reg";

		}else{
			function_name="purchase_main_master_update";

		}
	//	alert(function_name);
		var dataString= 'function_name='+function_name+'&supplier_purchase_Master='+supplier_purchase_Master+'&Material_purchase_Master='+Material_purchase_Master+'&Date_purchase_Master='+Date_purchase_Master+'&Purchase_Unit_purchase_Master='+Purchase_Unit_purchase_Master+'&Purchase_Qty_purchase_Master='+Purchase_Qty_purchase_Master+'&PurchaseID='+PurchaseID;
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				//alert(result);
				if(result==1){
					fire_message('error','Machine Already registered!','Please Try Again');
				}else if(result==2){
					fire_message('success',' Purchase Details Updated Successfully!','');
				}else{
					fire_message('success','New Machine Added Successfully!','');
					$('#master_reg_forms').find(':input').val('');
				}
			}
		});
		return false;
	}
}//Material
function Suppliers_main_master_reg(types){
	var Supplier=$("#Supplier").val();
	var SupShortName=$("#SupShortName").val();
	var SupAddress=$("#SupAddress").val();
	var SPDistrict=$("#SPDistrict").val();
	var SPState=$("#SPState").val();
	var SPCountry=$("#SPCountry").val();
	var SPPin=$("#SPPin").val();
	var SPContactNo=$("#SPContactNo").val();
	var SPEmail=$("#SPEmail").val();
	var SPMobile=$("#SPMobile").val();
	var SPGST=$("#SPGST").val();
	var function_name;
	
	var Mat_status_drop=$("#Mat_status_drop").children("option:selected").val();

	if(Supplier==""||SupShortName==""||SupAddress==""||SPDistrict==""||SPState==""||SPCountry==""||SPPin==""||SPContactNo==""||SPEmail==""||SPMobile==""||SPGST==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		if(types=="create"){
			function_name="Suppliers_main_master_reg";
			var SPID=0;
		}else{
			function_name="Suppliers_main_master_update";
			var SPID=$("#Supplier_id").val();
		}
		var dataString= 'function_name='+function_name+'&Supplier='+Supplier+'&SupShortName='+SupShortName+'&SupAddress='+SupAddress+'&SPDistrict='+SPDistrict+'&SPState='+SPState+'&SPCountry='+SPCountry+'&SPPin='+SPPin+'&SPContactNo='+SPContactNo+'&SPEmail='+SPEmail+'&SPMobile='+SPMobile+'&SPGST='+SPGST+'&Mat_status_drop='+Mat_status_drop+'&SPID='+SPID;
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Suppliers Already registered!','Please Try Again');
				}else if(result==2){
					fire_message('success','Suppliers Details Updated!','');
					$('#master_reg_form').find(':input').val('');
					$("#supply_list_table").DataTable().ajax.reload(null, false); 
					jQuery("#edit_suplly_modal").modal('hide');
				}else{
					fire_message('success','New Suppliers Added Successfully!','');
					$('#master_reg_forms').find(':input').val('');
				}
			}
		});
		return false;
	}
}//Material
function Employees_main_master_reg(types){
	var EName=$("#EName").val();
	var EShortName=$("#EShortName").val();
	var EDesigID=$("#EDesigID").val();
	var EDOB=$("#EDOB").val();
	var EAddress=$("#EAddress").val();
	var EEmail=$("#EEmail").val();
	var EMobile=$("#EMobile").val();
	var UserName=$("#UserName").val();
	var Password=$("#Password").val();
	var EDOJ=$("#EDOJ").val();
	var Mat_status_drop=$("#Mat_status_drop").children("option:selected").val();
	var function_name;

	if(EName==""||EShortName==""||EDesigID==""||EDOB==""||EAddress==""||EEmail==""||EMobile==""||UserName==""||Password==""||EDOJ==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{

		if(types=="create"){
			function_name="Employees_main_master_reg";
			var EmpID=0;
		}else{
			function_name="Employees_main_master_update";
			var EmpID=$("#EName_id").val();
		}
		var dataString= 'function_name='+function_name+'&EName='+EName+'&EShortName='+EShortName+'&EDesigID='+EDesigID+'&EDOB='+EDOB+'&EAddress='+EAddress+'&EEmail='+EEmail+'&EMobile='+EMobile+'&UserName='+UserName+'&Password='+Password+'&EDOJ='+EDOJ+'&Mat_status_drop='+Mat_status_drop+'&EmpID='+EmpID;
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Employees Already registered!','Please Try Again');
				}else if(result==2){
					fire_message('success','Employees Details Updated!','');
					$('#master_reg_form').find(':input').val('');
					$("#Employees_list_table").DataTable().ajax.reload(null, false); 
					jQuery("#edit_employees_modal").modal('hide');
				}else{
					fire_message('success','New Employees Added Successfully!','');
					$('#master_reg_forms').find(':input').val('');
				}
			}
		});
		return false;
	}
}

 $("#Order_Products").autocomplete({
      source: "php_controller/product_search.php",
      minLength: 0,
      select: function( event, ui ) {
      //	alert(ui.item.CustID)
            event.preventDefault();
            $("#Order_Products_id_hidden").val(ui.item.ProdID);
            $("#Order_Products").val(ui.item.value);
        }
    }).focus(function(){    
    //alert($(this).val())        
       $(this).autocomplete('search', $(this).val())
     });; 

 $("#Order_customer").autocomplete({
      source: "php_controller/customer_search.php",
       minLength: 0,
      select: function( event, ui ) {
      //	alert(ui.item.CustID)
            event.preventDefault();
            $("#Order_customer_id_hidden").val(ui.item.CustID);
            $("#Order_customer").val(ui.item.value);
            $("#pre_order_btn").prop( "disabled", false );
            $("#add_newItem_orde_btn").prop( "disabled", false );

        }
    }).focus(function(){    
    //alert($(this).val())        
       $(this).autocomplete('search', $(this).val())
     });
 $("#Order_Type").autocomplete({
      source: "php_controller/types_search.php",
      minLength: 0,
      select: function( event, ui ) {
      //	alert(ui.item.CustID)
            event.preventDefault();
            $("#Order_Type_id_hidden").val(ui.item.TypeCode);
            $("#Order_Type").val(ui.item.value);
        }
    }).focus(function(){    
    //alert($(this).val())        
       $(this).autocomplete('search', $(this).val())
     })

 $("#Order_Size").autocomplete({
      source: "php_controller/size_search.php",
      minLength: 0,
      select: function( event, ui ) {
      //	alert(ui.item.CustID)
            event.preventDefault();
            $("#Order_Size_id_hidden").val(ui.item.SID);
            $("#Order_Size").val(ui.item.value);
            $("#Order_Size_hidden_Height").val(ui.item.Height);
            $("#Order_Size_hidden_Weight").val(ui.item.Weight);
            $("#Order_Size_hidden_Gage").val(ui.item.Gage);
            $("#Order_Size_hidden_unit").val(ui.item.unit);
            $("#Quentity_Type").prop( "disabled", false );
		  	$("#order_number").prop( "disabled", false );
        }
    }).focus(function(){    
    //alert($(this).val())        
       $(this).autocomplete('search', $(this).val())
     });

  	$("#add_order_id").autocomplete({
      source: "php_controller/order_id_search.php",
      minLength: 0,
      select: function( event, ui ) {
      	//alert(ui.item.OrdID)
            event.preventDefault();
            //alert(ui.item.customer_id);
           // alert(ui.item.customer_name);
            $("#add_order_id_hidden").val(ui.item.OrdID);
            $("#add_order_id").val(ui.item.value);
            $("#add_order_customer").val(ui.item.customer_name);
            $("#add_order_size").val(ui.item.size_name);
            $("#add_order_sizeHidden").val(ui.item.size_id_hd);
            $("#add_order_Qty").val(ui.item.Qty);
            $("#add_order_Unit").val(ui.item.Unit);
           // $("#order_kg").prop( "disabled", false );

        }
    }).focus(function(){    
    //alert($(this).val())        
       $(this).autocomplete('search', $(this).val())
     });
  	$("#new_order_Machine").autocomplete({
      source: "php_controller/machine_search.php",
      minLength: 0,
      select: function( event, ui ) {
      	//alert(ui.item.OrdID)
            event.preventDefault();
            //alert(ui.item.customer_id);
           // alert(ui.item.customer_name);
            $("#new_order_Machine").val(ui.item.value);
            $("#new_order_Machine_hidden").val(ui.item.MID);
        }
    }).focus(function(){    
    //alert($(this).val())        
       $(this).autocomplete('search', $(this).val())
     });
    $("#worklog_machine_name").autocomplete({
      source: "php_controller/machine_search.php",
      minLength: 0,
      select: function( event, ui ) {
      	//alert(ui.item.OrdID)
            event.preventDefault();
            //alert(ui.item.customer_id);
           // alert(ui.item.customer_name);
            $("#worklog_machine_name").val(ui.item.value);
            $("#worklog_machine_name_hidden").val(ui.item.MID);
        }
    }).focus(function(){    
    //alert($(this).val())        
       $(this).autocomplete('search', $(this).val())
     });
 $(".supplier_purchase_Master_auto").autocomplete({
      source: "php_controller/supplier_search.php",
      minLength: 0,
      select: function( event, ui ) {
      	//alert(ui.item.OrdID)
            event.preventDefault();
            //alert(ui.item.customer_id);
           // alert(ui.item.customer_name);
            $(".supplier_purchase_Master_auto").val(ui.item.value);
            $(".supplier_purchase_Master_hidden_auto").val(ui.item.SPID);
        }
    }).focus(function(){    
    //alert($(this).val())        
       $(this).autocomplete('search', $(this).val())
     });
     $(".Material_purchase_Master_auto").autocomplete({
      source: "php_controller/material_search.php",
      minLength: 0,
      select: function( event, ui ) {
      	//alert(ui.item.OrdID)
            event.preventDefault();
            //alert(ui.item.customer_id);
           // alert(ui.item.customer_name);
            $(".Material_purchase_Master_auto").val(ui.item.value);
            $(".Material_purchase_Master_hidden_auto").val(ui.item.MINo);
        }
    }).focus(function(){    
    //alert($(this).val())        
       $(this).autocomplete('search', $(this).val())
     });

 

 function loadStatus_on_modal(data){
 	if(data=='all'){
 		reset_order_form()
 		$("#set_order_tableBody").empty();
 		set_list_name=1;
 		order_list_array=[];
		init_totalAmount=0;
		$("#add_newItem_orde_btn").prop( "disabled", true );
 	}
 	
 	$("#order_mdl_btn").html("Save");
	$("#order_mdl_btn").attr("onclick","create_new_order('create_new_order')");
//	$('#order_reg_forms').find(':input').val('');
 	var dataString= 'function_name='+'loadStatus_on_modal';
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				$("#status_section").html(result)
				if(data!="all"||data!="for_order"){
					for (var i=0; i < data.length ;i++) {
			 		$("#status_section").find('[value=' + data[i] + ']').prop("checked", true);
					}
						
				}
				
			}
		});
		return false;
 }
 function fetch_Order_unit_drop(){

 	var dataString= 'function_name= '+'fetch_Order_unit_drop';
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			if(result==""){
				$("#Order_unit").html("<option>Select</option>");
			}else{
				$("#Order_unit").empty();
				$("#Order_unit").html(result);
			}			
		}
	});
	return false;


 } 

 function load_order_table(){
 	var dataString= 'function_name= '+'load_order_table';
	$.ajax({
		type: "POST",
		url: "php_controller/list_order.php",
		cache: false,
		data: dataString,
		success: function(result){
			//console.log(result); 
			$("#order_tableBody").html(result);		
		}
	});
	return false;

 } 

 function load_purchase_table(){

 	var dataString= 'function_name= '+'load_purchase_table';
	$.ajax({
		type: "POST",
		url: "php_controller/list_purchase.php",
		cache: false,
		data: dataString,
		success: function(result){
			//console.log(result); 
			$("#purchase_tableBody").html(result);		
		}
	});
	return false;

 }
function calculate_order_Pending_Amount(){
	var order_Total_Amount=$("#order_Total_Amount").val();
	var order_Advance_Amount=$("#order_Advance_Amount").val();
	var pending_amount=order_Total_Amount-order_Advance_Amount;
	$("#order_Pending_Amount").val(pending_amount.toFixed(2));
}

function setInFront(element){

	$("#"+element).css({"z-index":"9999999"});
}
function edit_me(id,target_name,table,key){


	var dataString= 'id='+id;
	$.ajax({
		type: "POST",
		url: "php_controller/getData_"+table+".php",
		cache: false,
		data: dataString,
		success: function(result){
			console.log(result);
			var resultfinal =JSON.parse(result);
			setData(resultfinal,target_name);
		}
	});
	return false;

	
}
function delete_me(id,table,key,dataTable_name,functionName){

Swal.fire({
  title: 'Do you want to delete the entry?',
  showDenyButton: true,
  showCancelButton: true,
  denyButtonText: `Delete`,
  showConfirmButton: false,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  var dataString= 'function_name='+'delete_me'+'&table='+table+'&key='+key+'&id='+id;
  if (result.isDenied) {
  	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			if(result==1){
				Swal.fire('Your entry has been removed!', '', 'success');
        		// alert(dataTable_name+"="+functionName)
        		 refreshDataTable(dataTable_name,functionName);
				
			}else{
					Swal.fire('Something went wrong!', '', 'info');
			}
			
		}
	});
	return false;
    
  } 
})
	

	
}
function refreshDataTable(tableName,function_name){

	
				 if(function_name=="load_order_table"){
				 	load_order_table();
				 }else if(function_name=="load_purchase_table"){
				 	load_purchase_table();
				 }else if(function_name=="load_customer_table"){
				 	$("#user_list_tables").DataTable().ajax.reload(null, false); 
				 }else if(function_name=="load_product_table"){
				 	$("#Country_list_table").DataTable().ajax.reload(null, false); 
				 }else if(function_name=="load_types_table"){
				 	$("#Country_list_table").DataTable().ajax.reload(null, false); 
				 }else if(function_name=="load_size_table"){
				 	$("#size_list_table").DataTable().ajax.reload(null, false); 
				 }else if(function_name=="load_uits_table"){
				 	$("#unit_list_table").DataTable().ajax.reload(null, false); 
				 }else if(function_name=="load_orderStatus_table"){
				 	$("#Order_Status_list_table").DataTable().ajax.reload(null, false); 
				 }else if(function_name=="load_Machine_table"){
				 	$("#Machine_list_table").DataTable().ajax.reload(null, false); 
				 }else if(function_name=="load_matcat_table"){
				 	$("#MatCategories_table").DataTable().ajax.reload(null, false); 
				 }else if(function_name=="load_mat_table"){
				 	$("#Mat_list_table").DataTable().ajax.reload(null, false); 
				 }else if(function_name=="load_supply_table"){
				 	$("#supply_list_table").DataTable().ajax.reload(null, false); 
				 }else if(function_name=="load_employees_table"){
				 	$("#Employees_list_table").DataTable().ajax.reload(null, false); 
				 }else if(function_name=="load_colours_table"){
				 	$("#colour_list_tables").DataTable().ajax.reload(null, false); 
				 }
}


function resetSaveBtns(btn_id,function_name,form_name){
	//alert(btn_id+function_name);
	$("#"+btn_id).html("save");
	$("#"+btn_id).attr("onclick",""+function_name+"('create')");
	$('#master_reg_form').find(':input').val('');
	fetch_autoIncrmnt_value("customers",$('.client_nexID'));
	$("#client_Country_drop").prop("selectedIndex", 0).val(); 
	$("#client_country_code").val(91); 
	//$('#'+form_name).find(':input').val('');

}

//Function for set current date and time in order section
$.fn.setNow = function (onlyBlank) {
  var now = new Date($.now())
    , year
    , month
    , date
    , hours
    , minutes
    , seconds
    , formattedDateTime
    ;

  year = now.getFullYear();
  month = now.getMonth().toString().length === 1 ? '0' + (now.getMonth() + 1).toString() : now.getMonth() + 1;
  date = now.getDate().toString().length === 1 ? '0' + (now.getDate()).toString() : now.getDate();
  hours = now.getHours().toString().length === 1 ? '0' + now.getHours().toString() : now.getHours();
  minutes = now.getMinutes().toString().length === 1 ? '0' + now.getMinutes().toString() : now.getMinutes();
  seconds = now.getSeconds().toString().length === 1 ? '0' + now.getSeconds().toString() : now.getSeconds();

  formattedDateTime = year + '-' + month + '-' + date + 'T' + hours + ':' + minutes + ':' + seconds;

  if ( onlyBlank === true && $(this).val() ) {
    return this;
  }

  $(this).val(formattedDateTime);

  return this;
}

$(function () {
    // Handler for .ready() called.
    $('#Order_date').setNow();

});


/*
$('#order_kg').on('input', function() {
   $("#order_kg").prop( "disabled", false );
    $("#order_number").prop( "disabled", true );
});*/
function changeMeasurement(elm){
		$("#size_Gage").val("")
		$("#size_Micron").val("")
	var Size_Measurement_drop=$("#Size_Measurement_drop").children("option:selected").val();
	if(Size_Measurement_drop=="micron"){
		$("#size_Gage").prop( "disabled", true );
		$("#size_Micron").prop( "disabled", false );
		size_measurement_flag=1;

	}else{
		$("#size_Gage").prop( "disabled", false );
		$("#size_Micron").prop( "disabled", true );
		size_measurement_flag=0;
	}
}

$("#Quentity_Type").change(function(){
	$("#Order_weight_total").val("");
	var Quentity_Type=$(this).val();
	if(Quentity_Type==0){
		$("#order_kg").prop( "disabled", true );
		$("#order_kg").val("");
		$("#order_number").val("");
		$("#order_number").prop( "disabled", false );
		Quentity_Type_flag=1;

	}else{
		$("#order_kg").prop( "disabled", false );
		$("#order_number").prop( "disabled", true );
		$("#order_number").val("");
		$("#order_kg").val("");
		Quentity_Type_flag=2;
	}
	//alert(Quentity_Type);
	
});

$('#order_number').on('input', function() {
  calculate_oder_weight();
  calculate_total_amount();
});

$('#order_kg').on('input', function() {
  calculate_oder_weight();
  calculate_total_amount();
});


function calculate_oder_weight(){
	var Order_Size_Height =$("#Order_Size_hidden_Height").val();
	var Order_Size_Weight =$("#Order_Size_hidden_Weight").val();
	var Order_Size_Gage =$("#Order_Size_hidden_Gage").val();
	var Order_Size_unit =$("#Order_Size_hidden_unit").val();
	if(Quentity_Type_flag==1){
		if(Order_Size_unit=="centimeter"){

			Order_Size_Height=Order_Size_Height/2.54;
			Order_Size_Weight=Order_Size_Weight/2.54;
			Order_Size_Gage=Order_Size_Gage/2.54;
		}
		var order_number=$("#order_number").val();
		var bag_weight_for_thousand=(parseInt(Order_Size_Height)*parseInt(Order_Size_Weight)*parseInt(Order_Size_Gage))/3300;
		var weight_of_one_bag=bag_weight_for_thousand/1000;
		var reqd_number=weight_of_one_bag*parseInt(order_number);
		$("#order_kg").val(reqd_number.toFixed(2));
	}else{
		var order_kg=$("#order_kg").val();
		var bag_weight_for_thousand=(parseInt(Order_Size_Height)*parseInt(Order_Size_Weight)*parseInt(Order_Size_Gage))/3300;
		var weight_of_one_bag=bag_weight_for_thousand/1000;
		var weight_of_orderd_bag=weight_of_one_bag*order_kg;
		$("#order_number").val((weight_of_orderd_bag*100).toFixed(1));

		//alert(1)
	}
	/* 1000bags = (Width x Height x Gage)/3300 
	 Weight of Bag = Kilo of weight/1000*/
}


$('#order_per_rate').on('input', function() {
	var order_kg= $("#order_kg").val();
	var order_tax= $("#order_tax").val();
	if(order_kg=='' ||  order_kg=='0.00' ){
			alert("Product weight can't be empty");
			$("#order_per_rate").val("");
			

	}else if(order_tax==''){
			alert("TAX can't be empty");
			$("#order_per_rate").val("");

	}else{
		 calculate_total_amount();
	}
 
});
$('#order_per_rate').on('input', function() {
  calculate_total_amount();
});
$('#order_tax').on('input', function() {
  calculate_total_amount();
});

$( "#order_per" ).change(function() {
  calculate_total_amount();
});

function calculate_total_amount(){
	var order_kg= $("#order_kg").val();
	var order_number= $("#order_number").val();
	var order_rate=$("#order_per_rate").val();
	var order_tax=$("#order_tax").val();
	var order_per=$("#order_per").val();
	if(order_per=="kg"){
		var totalAmount=order_kg*order_rate;
	}else{
		var totalAmount=order_number*order_rate;
	}
	var tax_amount=(totalAmount.toFixed(1)*parseInt(order_tax))/100;
	var final_total=parseFloat(tax_amount+totalAmount);
	$("#order_Total_Amount_hidden").val(final_total.toFixed(2));

	
}

function reset_order_form(){
	$('#order_reg_forms').find(':input').val('');
	//fetch_autoIncrmnt_value("orders",$('#Order_id'));
	 $('#Order_date').setNow();
	  $('#Quentity_Type').val(0);
	  $('#order_per').val('kg');
	  $("#Quentity_Type").prop( "disabled", true );
	$("#order_number").prop( "disabled", true );
	
	var today = new Date().toLocaleString('sv-SE').slice(0, 16).replace(' ', 'T');
	var Order_date = $("#Order_date").val();
	document.getElementById('Order_Committed_Date').setAttribute("min", Order_date);
	fetch_autoIncrmnt_value("order_master",$('.Order_id_class'));
}




// Load size datatable on order master 
$("#modal-lga").on('shown.bs.modal', function () {
         var table = $('#size_list_table').DataTable( {
         //	destroy: true,
        "ajax": "php_controller/list_size.php",
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<a style='cursor:pointer;' href='#'  id='view_id'>Edit</a> | <a style='color:red;' id='delete_id' href='#' >Delete</a>"
        } ]
    } );

    $('#size_list_table tbody').on( 'click', '#view_id', function () {
        var data = table.row( $(this).parents('tr') ).data();
        //alert(data[0]);
        //alert( data[0] +"'s salary is: "+ data[ 5 ] );
       edit_me(data[0],'edit_size_modal_self','size','SID');
    } );

    $('#size_list_table tbody').on( 'click', '#delete_id', function () {
        var data = table.row( $(this).parents('tr') ).data();
        delete_me(data[0],'size','SID','size_list_table','load_size_table')
    } );
   });

$("#modal-lg").on('shown.bs.modal', function () {  
	$('#Order_customer').focus();
});

$("#create_client_modal").on('shown.bs.modal', function () {  
	$('#client_name').focus();
});
$("#edit_product_modal").on('shown.bs.modal', function () {  
  $('#product_name').focus();
});
$("#edit_type_modal").on('shown.bs.modal', function () {  
  $('#type_name').focus();
});
$("#edit_size_modal").on('shown.bs.modal', function () {  
  $('#size_name').focus();
});

$('input').bind('focus blur', function() {
    $(this).toggleClass('light_orange');
    //alert(1)
});
$('textarea').bind('focus blur', function() {
    $(this).toggleClass('light_orange');
    //alert(1)
});

$("#pre_order_btn").click(function(){
	var client_id=$("#Order_customer_id_hidden").val();
	load_pre_order_client_list(client_id)
});

function load_pre_order_client_list(client_id){


	var dataString= 'function_name= '+'load_order_table'+'&client_id='+client_id;
	$.ajax({
		type: "POST",
		url: "php_controller/list_preorder_details.php",
		cache: false,
		data: dataString,
		success: function(result){
			if(result==""){
				$("#pre_order_tableBody").html('<tr role="row" class="odd"><td colspan="9"><center>No data available</center></td></tr>');
			}else{
				$("#pre_order_tableBody").html(result);
			}
				
		}
	});
	return false;


}
function set_preloader(product_name,product_id,type_name,TypeCode_id,size_name,size_id,Numbers,Weight,TAX,PerRate,PerUnit,CommittedDate,Description,TotalAmount,AdvanceAmount,PendingAmount,Order_Size_hidden_Height,Order_Size_hidden_Weight,Order_Size_hidden_Gage,Order_Size_hidden_unit){


$("#Order_Products").val(product_name.replace(/_/g, ' '));
$("#Order_Products_id_hidden").val(product_id);

$("#Order_Type").val(type_name);
$("#Order_Type_id_hidden").val(TypeCode_id);

$("#Order_Size").val(size_name);
$("#Order_Size_id_hidden").val(size_id);

$("#Quentity_Type").prop( "disabled", false );
$("#order_number").prop( "disabled", false );
Quentity_Type_flag=1;
$("#order_number").val(Numbers);
$("#order_kg").val(Weight);
$("#order_tax").val(TAX);
$("#order_tax").val(TAX);
$("#order_per_rate").val(PerRate);
$("#order_per").val(PerUnit);
$("#Order_Committed_Date").val(convet_dates(CommittedDate));
$("#Order_Description").val(Description.replace(/_/g, ' '));
$("#order_Total_Amount").val(TotalAmount);
$("#order_Advance_Amount").val(AdvanceAmount);
$("#order_Pending_Amount").val(PendingAmount);
$("#Order_Size_hidden_Height").val(Order_Size_hidden_Height);
$("#Order_Size_hidden_Weight").val(Order_Size_hidden_Weight);
$("#Order_Size_hidden_Gage").val(Order_Size_hidden_Gage);
$("#Order_Size_hidden_unit").val(Order_Size_hidden_unit);


jQuery("#preorder_modal").modal('hide');

}
function convet_dates(dateString){
	var dateVal = new Date(dateString);
    var day = dateVal.getDate().toString().padStart(2, "0");
        var month = (1 + dateVal.getMonth()).toString().padStart(2, "0");
        var hour = dateVal.getHours().toString().padStart(2, "0");
        var minute = dateVal.getMinutes().toString().padStart(2, "0");
        var sec = dateVal.getSeconds().toString().padStart(2, "0");
        var ms = dateVal.getMilliseconds().toString().padStart(3, "0");
        var inputDate = dateVal.getFullYear() + "-" + (month) + "-" + (day) + "T" + (hour) + ":" + (minute) + ":" + (sec) + "." + (ms);
        return inputDate;
}
function size_measurement_calculation(){

	if(size_measurement_flag==0){
		//gauge to micron convertion
		var size_Gage=$("#size_Gage").val();
		var micron_value=size_Gage*0.254;
		console.log(micron_value);
		$(".size_Micron_class").val(micron_value);

	}else{
		//Micron to gauge conversion.
		var size_Micron=$("#size_Micron").val();
		var gauge_value=size_Micron*3.937007874015748;
		console.log(gauge_value);
		$(".size_Gage_class").val(gauge_value);
	}


}

$('.size_Gage_class').on('input', function() {
	size_measurement_calculation();
});

$('.size_Micron_class').on('input', function() {
	size_measurement_calculation();
});
function goBack() {
  window.history.back();
}


 $(".StockUnit_cls").autocomplete({
      source: "php_controller/stockUnit_search.php",
       minLength: 0,
      select: function( event, ui ) {
            event.preventDefault();
           
            $(".StockUnit_cls").val(ui.item.value);
            $(".StockUnit_hidden").val(ui.item.id);
        }
    }).focus(function(){    
       $(this).autocomplete('search', $(this).val())
     }); 

    $(".MatType_cls").autocomplete({
      source: "php_controller/type_search.php",
       minLength: 0,
      select: function( event, ui ) {
            event.preventDefault();
           
            $(".MatType_cls").val(ui.item.value);
            $("#MatType_hidden").val(ui.item.id);
        }
    }).focus(function(){    
       $(this).autocomplete('search', $(this).val())
     });   


    $(".MatCatID_cls").autocomplete({
      source: "php_controller/metCatID_search.php",
       minLength: 0,
      select: function( event, ui ) {
            event.preventDefault();
           
            $(".MatCatID_cls").val(ui.item.value);
            $("#MatCatID_hidden").val(ui.item.id);
        }
    }).focus(function(){    
       $(this).autocomplete('search', $(this).val())
     });

    function add_new_order_to_table (){

	var Order_Products_id_hidden=$("#Order_Products_id_hidden").val();
	var Order_Type_id_hidden=$("#Order_Type_id_hidden").val();
	var Order_Size_id_hidden=$("#Order_Size_id_hidden").val();

	var Order_Products=$("#Order_Products").val();
	var Order_Type=$("#Order_Type").val();
	var Order_Size=$("#Order_Size").val();
	var order_tax=$("#order_tax").val();

	//var Order_unit=$("#Order_unit").children("option:selected").val();
	//var order_Quantity=$("#order_Quantity").val();
	
	var Quentity_Type=$("#Quentity_Type").children("option:selected").val();
	var order_number=$("#order_number").val();
	var order_kg=$("#order_kg").val();

	var order_per=$("#order_per").children("option:selected").val();
	var order_per_rate=$("#order_per_rate").val();

	var Order_Committed_Date=$("#Order_Committed_Date").val();
	var Order_Description=$("#Order_Description").val();
	
	var order_Total_Amount_hidden=$("#order_Total_Amount_hidden").val();
	var order_Advance_Amount=$("#order_Advance_Amount").val();
	var order_Pending_Amount=$("#order_Pending_Amount").val();
	var status_listArray = [];
	var array_list =$('input[name="status_list"]:checked').each(function() {
		status_listArray.push(this.value)
	});

	if(order_tax==""||Order_Products==""||Order_Type==""||Order_Size==""||order_number==""||order_per==""||Order_Committed_Date==""||Order_Description==""||order_kg==""||order_per_rate==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		$("#set_order_tableBody").append("<tr role='row' class='odd' id='"+set_list_name+"'><td class='sorting_1'>"+set_list_name+"</td><td>"+Order_Products+"</td><td>"+Order_Type+"</td><td>"+order_kg+"</td><td>"+order_per_rate+"</td><td>"+order_tax+"</td><td>"+order_Total_Amount_hidden+"</td><td><a href='#' class='remove_txt' id='"+set_list_name+"' onClick='removeTableCell_order("+set_list_name+")'>Remove</a></td></tr>");
		order_list_array.push({
				Items:[Order_Products_id_hidden,Order_Type_id_hidden,Order_Size_id_hidden,order_number,order_kg,order_tax,order_per_rate,order_per,Order_Description,Order_Committed_Date]
		});

		//order_list_array.push("["+set_list_name,Order_Products_id_hidden,Order_Type_id_hidden,Order_Size_id_hidden,order_number,order_kg,order_tax,order_per_rate,Order_Committed_Date,Order_Description,status_listArray+"]");
		
		
		set_list_name++;
		//$("#add_order_modal").hide();
		jQuery("#set_order_modal").modal('hide');
		init_totalAmount+=parseFloat(order_Total_Amount_hidden);
		$("#order_Total_Amount").val(init_totalAmount.toFixed(2))
		//alert(list_name);
	//	alert(order_list_array);
		//alert(order_list_array.length);
	}
    }

    function clear_set_modal(){
    	$("#Order_Products").val("");
    	$("#Order_Products_id_hidden").val("");
    	$("#Order_Type").val("");
    	$("#Order_Type_id_hidden").val("");
    	$("#Order_Size").val("");
    	$("#Order_Size_id_hidden").val("");
    	$("#Order_Size_hidden_Height").val("");
    	$("#Order_Size_hidden_Weight").val("");
    	$("#Order_Size_hidden_Gage").val("");
    	$("#Order_Size_hidden_unit").val("");
    	$("#Quentity_Type").val("");
    	$("#order_number").val("");
    	$("#order_kg").val("");
    	$("#order_tax").val("");
    	$("#order_per_rate").val("");
    	$("#order_per").val("");
    	$("#Order_Committed_Date").val("");
    	$("#Order_Description").val("");
    	$("#status_section").empty();
    	$("#order_Total_Amount_hidden").val("");
    	loadStatus_on_modal('for_order')
    	$('#Quentity_Type').val(0);
	  	$('#order_per').val('kg');
    }

    function removeTableCell_order(id){
    	alert(id);
	$('table#set_order_tableBody tr#'+id).remove();
	set_list_name--;
}