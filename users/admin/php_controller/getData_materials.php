<?php
include("../../../common/config/config.php");
$id=trim($_POST['id']);


$resultArray=array();
$result = mysqli_query($db,"SELECT * FROM materials WHERE `MINo` ='$id'" );

if ($result->num_rows > 0) {
  
    // output data of each row
    while($ary = mysqli_fetch_array($result)) {
      $resultArray[0] = $ary['MINo'];
      $resultArray[1] = $ary['MaterialItem'];
      $resultArray[2] = $ary['MatShortName'];
      $resultArray[3] = $ary['MatCatID'];
      $resultArray[4] = $ary['Unit'];
      $resultArray[5] = $ary['Active'];
      
    print_r(json_encode($resultArray));
    }

   
} else {
    echo "0 results";
}

 // Close connection
mysqli_close($db);
?>