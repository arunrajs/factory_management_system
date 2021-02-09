<?php
include("../../../common/config/config.php");
$id=trim($_POST['id']);


$resultArray=array();
$result = mysqli_query($db,"SELECT * FROM suppliers WHERE `SPID` ='$id'" );

if ($result->num_rows > 0) {
  
    // output data of each row
    while($ary = mysqli_fetch_array($result)) {
      $resultArray[0] = $ary['SPID'];
      $resultArray[1] = $ary['Supplier'];
      $resultArray[2] = $ary['SupShortName'];
      $resultArray[3] = $ary['SupAddress'];
      $resultArray[4] = $ary['SPDistrict'];
      $resultArray[5] = $ary['SPState'];
      $resultArray[6] = $ary['SPCountry'];
      $resultArray[7] = $ary['SPPin'];
      $resultArray[8] = $ary['SPContactNo'];
      $resultArray[9] = $ary['SPEmail'];
      $resultArray[10] = $ary['SPMobile'];
      $resultArray[11] = $ary['SPGST'];
      $resultArray[12] = $ary['Active'];
      
    print_r(json_encode($resultArray));
    }

   
} else {
    echo "0 results";
}

 // Close connection
mysqli_close($db);
?>