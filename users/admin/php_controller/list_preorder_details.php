<?php
include("../../../common/config/config.php");

$function_name=trim($_POST['function_name']);
$client_id=trim($_POST['client_id']);
//FUNCTION FOR CHECK THE MOBILE NUMBER IS Exist OR NOT.
if($function_name=="load_order_table"){

    $query = "SELECT * FROM orders WHERE `CustID`=$client_id";
    $result = mysqli_query($db, $query);
    $output="";
    while($row = mysqli_fetch_array($result)){
        $customers_id=$row["CustID"];
    $pending_amount=$row["PendingAmount"];
    $weight=$row["Weight"];
        $query_customer = "SELECT * FROM customers WHERE CustID=$customers_id";
        $result_customer = mysqli_query($db, $query_customer);
    while($row_customer = mysqli_fetch_array($result_customer)){
        $customer_name=$row_customer["Customer"];
      } 
        $product_id=$row["ProdID"];
        $query_product = "SELECT * FROM products WHERE ProdID=$product_id";
        $result_product = mysqli_query($db, $query_product);
    while($row_product = mysqli_fetch_array($result_product)){
            $product_name=$row_product["Product"];
      }
        $TypeCode_id=$row["TypeCode"];
        $query_type = "SELECT * FROM types WHERE TypeCode=$TypeCode_id";
        $result_type = mysqli_query($db, $query_type);
    while($row_type = mysqli_fetch_array($result_type)){
        $type_name=$row_type["TypeName"];
      } 
       $SID=$row["SID"];
       $query_size = "SELECT * FROM size WHERE SID=$SID";
        $result_size = mysqli_query($db, $query_size);
    while($row_size = mysqli_fetch_array($result_size)){
        $size_name=$row_size["SizeName"];
        $Order_Size_hidden_Height=$row_size["Height"];
        $Order_Size_hidden_Weight=$row_size["Weight"];
        $Order_Size_hidden_Gage=$row_size["Gage"];
        $Order_Size_hidden_unit=$row_size["unit"];
      }

     
      $status_code=$row["CurrOrderStatus"];
      if($status_code==1){
        $status_name="Active";
      }else if($status_code==0){
        $status_name="Inactive";
      }
     $Number=$row["Number"];
     $Weight=$row["Weight"];
     $TAX=$row["TAX"];
     $PerRate=$row["PerRate"];
     $PerUnit=$row["PerUnit"];
     $CommittedDate=$row["CommittedDate"];
     $Description=$row["Description"];
     $TotalAmount=$row["TotalAmount"];
     $AdvanceAmount=$row["AdvanceAmount"];
     $PendingAmount=$row["PendingAmount"];

    $output .='<tr role="row" class="odd"><td class="sorting_1">'.$row["OrdID"].'</td><td>'.$row["Date"].'</td><td>'.$customer_name.'</td><td>'.$product_name.'</td><td>'.$type_name.'</td><td>'.$weight.'</td><td>'.$pending_amount.'</td><td>'.$size_name.'</td><td>'.$status_name.'</td><td><a href="#" onClick='."set_preloader('".str_replace(' ', '_',$product_name)."',".$product_id.",'".str_replace(' ', '_',$type_name)."',".$TypeCode_id.",'".str_replace(' ', '_',$size_name)."',".$SID.",".$Number.",".$Weight.",".$TAX.",".$PerRate.",'".$PerUnit."',".$CommittedDate.",'".str_replace(' ', '_',$Description)."',".$TotalAmount.",".$AdvanceAmount.",".$PendingAmount.",".$Order_Size_hidden_Height.",".$Order_Size_hidden_Weight.",".$Order_Size_hidden_Gage.",'".$Order_Size_hidden_unit."')".'>Select</a></td></tr>';
 }
 echo $output;

}
mysqli_close($db); // Connection Closed*/

 ?>
