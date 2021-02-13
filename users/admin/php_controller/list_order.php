<?php
include("../../../common/config/config.php");

$function_name=trim($_POST['function_name']);
//FUNCTION FOR CHECK THE MOBILE NUMBER IS Exist OR NOT.
if($function_name=="load_order_table"){

	$query = "SELECT * FROM order_master";
  	$result = mysqli_query($db, $query);
  	$output="";
  	while($row = mysqli_fetch_array($result)){
 	 $customers_id=$row["CustID"];
    $TotalAmount=$row["TotalAmount"];
    $AdvanceAmount=$row["AdvanceAmount"];
    $pending_amount=$row["PendingAmount"];
   // $weight=$row["Weight"];
  		$query_customer = "SELECT * FROM customers WHERE CustID=$customers_id";
  		$result_customer = mysqli_query($db, $query_customer);
  	while($row_customer = mysqli_fetch_array($result_customer)){
	  	$customer_name=$row_customer["Customer"];
	  }	
	

	  $status_code=$row["Status"];
	  if($status_code==1){
	  	$status_name="Active";
	  }else if($status_code==0){
	  	$status_name="Inactive";
	  }

	  
	$output .='<tr role="row" class="odd"><td class="sorting_1">'.$row["OrdID"].'</td><td>'.$row["Date"].'</td><td>'.$customer_name.'</td><td>'.$TotalAmount.'</td><td>'.$AdvanceAmount.'</td><td>'.$pending_amount.'</td><td>'.$status_name.'</td><td> <a style="color:green;" href="#" onClick='."view_me(".$row["OrdID"].",'orders','OrdID','order_list_table','load_order_table')".'><i class="fas fa-eye"></i></a> | <a href="#" onClick='."edit_me(".$row["OrdID"].",'modal-lg','orders','OrdID')".'><i class="fas fa-edit"></i></a> | <a style="color:red;" href="#" onClick='."delete_me(".$row["OrdID"].",'order_master','OrdID','order_list_table','load_order_table')".'><i class="fas fa-trash-alt"></i></a></td></tr>';
 }
 echo $output;

}
mysqli_close($db); // Connection Closed*/

 ?>
