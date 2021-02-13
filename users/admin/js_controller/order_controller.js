function create_new_order(type){

	/*var list_status = [];
	var array_list =$('input[name="status_list"]:checked').each(function() {
		list_status.push(this.value)
	});*/

	var Order_id=$("#Order_id").val();
	var Order_date=$("#Order_date").val();

	var Order_customer=$("#Order_customer_id_hidden").val();

	var order_Total_Amount=$("#order_Total_Amount").val();
	var order_Advance_Amount=$("#order_Advance_Amount").val();
	var order_Pending_Amount=$("#order_Pending_Amount").val();
	var function_name;

	if(Order_date==""||Order_customer==""||order_Total_Amount==""||order_Advance_Amount==""||order_Pending_Amount==""){
		fire_message('error','Please enter mandatory fields !','');
	}else if(order_list_array==""){

		fire_message('error','Please add Items','');

	}else{
		if(type=="create_new_order"){
				function_name="create_new_order";

		}else if(type=="update"){
			function_name="update_order";
		}


		var dataString='function_name='+function_name+'&Order_date='+Order_date+'&Order_customer='+Order_customer+'&order_Total_Amount='+order_Total_Amount+'&order_Advance_Amount='+order_Advance_Amount+'&order_Pending_Amount='+order_Pending_Amount+'&Order_id='+Order_id+'&order_list_array='+JSON.stringify(order_list_array);
		
		//alert(JSON.stringify(order_list_array));
		$.ajax({
			type: "POST",
			url: "php_controller/order_reg_controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				console.log(result);
				if(result==1){
					fire_message('error','Order Already registered!','Please Try Again');
				}else if(result==0){
					fire_message('success','New Order Created Successfully!','');
					$('#order_reg_forms').find(':input').val('');
					fetch_autoIncrmnt_value("orders",$('#Order_id'));
					jQuery("#modal-lg").modal('hide');



					$("#set_order_tableBody").empty();
					set_list_name=1;
 					order_list_array=[];
					init_totalAmount=0;
					refreshDataTable('order_list_table','load_order_table');
					reset_order_form();

				}else if(result==2){

					fire_message('success',' Order updated Successfully!','');
					jQuery("#modal-lg").modal('hide');
					refreshDataTable('order_list_table','load_order_table');
					reset_order_form();

				}
			}
		});
		return false;
	}
}


