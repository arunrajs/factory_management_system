<?php
include("../../../common/config/config.php");
$id=trim($_POST['id']);


$resultArray=array();
$result = mysqli_query($db,"SELECT * FROM employees WHERE `EmpID` ='$id'" );

if ($result->num_rows > 0) {
  
    // output data of each row
    while($ary = mysqli_fetch_array($result)) {
      $resultArray[0] = $ary['EmpID'];
      $resultArray[1] = $ary['EName'];
      $resultArray[2] = $ary['EShortName'];
      $resultArray[3] = $ary['EDesigID'];
      $resultArray[4] = $ary['EDOB'];
      $resultArray[5] = $ary['EAddress'];
      $resultArray[7] = $ary['EMobile'];
      $resultArray[6] = $ary['EEmail'];
      $resultArray[8] = $ary['EDOJ'];
      $resultArray[9] = $ary['UserName'];
      $resultArray[10] = $ary['Active'];
      print_r(json_encode($resultArray));
    }

   
} else {
    echo "0 results";
}

 // Close connection
mysqli_close($db);
?>