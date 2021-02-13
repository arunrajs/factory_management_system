<?php
include("../../../common/config/config.php");
$function_name=trim($_POST['function_name']);
$Order_id=trim($_POST['Order_id']);
$Order_date=$_POST['Order_date'];
$Order_customer=trim($_POST['Order_customer']);
$order_Total_Amount=trim($_POST['order_Total_Amount']);
$order_Advance_Amount=trim($_POST['order_Advance_Amount']);
$order_Pending_Amount=trim($_POST['order_Pending_Amount']);
$order_list_array=json_decode($_POST['order_list_array'], true);
$count_order_arrya=count($order_list_array);
//$list_status=trim($_POST['list_status']);
//$status_list_array=explode(",",$order_list_array);

if($function_name=="create_new_order"){

		$query = "SELECT * FROM orders WHERE OrdID='$Order_id'";
		$results = mysqli_query($db, $query);
		if(mysqli_num_rows($results)==1){
			echo "1"; //Exist 
		}else{
		mysqli_query($db,"INSERT INTO `order_master`(`OrdID`, `Date`, `CustID`, `TotalAmount`, `AdvanceAmount`, `PendingAmount`, `Status`) VALUES (NULL,'$Order_date','$Order_customer','$order_Total_Amount','$order_Advance_Amount','$order_Pending_Amount',1)");


		
		for ($i=0; $i < $count_order_arrya; $i++) { 
     		//	$status_id=$status_list_array[$i];
    			/*$query = mysqli_query($db,"INSERT INTO `colours`(`CLCode`, `Colour`, `CLShort`, `Active`) VALUES (NULL,'$i','test2','1')");*/
    				$ProdID=$order_list_array[$i]['Items'][0];
    				$TypeCode=$order_list_array[$i]['Items'][1];
    				$SID=$order_list_array[$i]['Items'][2];
    				$Number=$order_list_array[$i]['Items'][3];
    				$Weight=$order_list_array[$i]['Items'][4];
    				$TAX=$order_list_array[$i]['Items'][5];
    				$PerRate=$order_list_array[$i]['Items'][6];
    				$PerUnit=$order_list_array[$i]['Items'][7];
    				$Description=$order_list_array[$i]['Items'][8];
    				$CommittedDate=$order_list_array[$i]['Items'][9];
    				//$test_two=print_r( nl2br($order_list_array[$i]['Items'][1]."\n"));

    				$query = mysqli_query($db,"INSERT INTO `orders`(`id`, `OrdID`, `Date`, `CustID`, `ProdID`, `TypeCode`, `SID`, `Number`, `Weight`, `TAX`, `PerRate`, `PerUnit`, `IncludeTax`, `Description`, `CommittedDate`, `CurrOrderStatus`, `PaymentStatus`, `TotalMachineUsage`, `TotalProduct`, `TotalWastage`, `WastagePercentage`, `OrderClosed`) VALUES (NULL,'$Order_id','$Order_date',$Order_customer,'$ProdID','$TypeCode','$SID','$Number','$Weight','$TAX','$PerRate','$PerUnit',1,'$Description','$CommittedDate',1,1,0,0,0,0,1)");
    			
    				echo "0";
    				
 				}
				//echo gettype($order_list_array); //No
				//echo count($order_list_array); //No
				//print_r( $order_list_array[1]['Items'][9][0]); //No


				 
		}


}else if($function_name=="update_order"){

$query = mysqli_query($db,"UPDATE `orders` SET `Date`='$Order_date',`CustID`='$Order_customer',`ProdID`='$Order_Products',`TypeCode`='$Order_Type',`SID`='$Order_Size',`Number`='$order_number',`Weight`='$order_kg',`TAX`='$order_tax',`PerRate`='$order_per_rate',`PerUnit`='$order_per',`IncludeTax`='1',`Description`='$Order_Description',`TotalAmount`='$order_Total_Amount',`AdvanceAmount`='$order_Advance_Amount',`PendingAmount`='$order_Pending_Amount',`CommittedDate`='$Order_Committed_Date',`CurrOrderStatus`='1',`PaymentStatus`='0',`TotalMachineUsage`='0',`TotalProduct`='0',`TotalWastage`='0',`WastagePercentage`='0',`OrderClosed`='1' WHERE `OrdID` = '$Order_id'"); 
    
	$query_one = mysqli_query($db,"DELETE FROM `order_status_grp` WHERE order_id = '$Order_id'");
      $i=0;
		for ($i=0; $i < count($status_list_array); $i++) { 
     			$status_id=$status_list_array[$i];
     			$query = mysqli_query($db,"INSERT INTO `order_status_grp`(`id`, `order_id`, `status_id`) VALUES (null,'$Order_id','$status_id')");

 				}
  echo "2"; //Exist 
}
	

?>