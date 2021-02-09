<?php
include("../../../common/config/config.php");
$id=trim($_POST['id']);


$resultArray=array();
$result = mysqli_query($db,"SELECT * FROM matcategories WHERE `MatCatID` ='$id'" );

if ($result->num_rows > 0) {
  
    // output data of each row
    while($ary = mysqli_fetch_array($result)) {
      $resultArray[0] = $ary['MatCatID'];
      $resultArray[1] = $ary['MatCategory'];
      $resultArray[2] = $ary['MatCatShort'];
      $resultArray[3] = $ary['MinStockLevel'];
      $resultArray[4] = $ary['MaxStockLevel'];
      $resultArray[5] = $ary['StockUnit'];
      $resultArray[6] = $ary['MatType'];
      $resultArray[7] = $ary['Active'];
      
    print_r(json_encode($resultArray));
    }

   
} else {
    echo "0 results";
}

 // Close connection
mysqli_close($db);
?>