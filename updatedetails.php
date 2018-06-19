<?php 
 $Name=$Number=$Pincode=$Address="";
 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
 	 $Name = test_input($_POST["Name"]);
 	 $Number = test_input($_POST["Number"]);
 	 $Address = test_input($_POST["Address"]);
 	 $Pincode = test_input($_POST["Pincode"]);
 	 echo json_encode(array("Name"=>$Name,"Number"=>$Number,"Address"=>$Address,"Pincode"=>$Pincode));
     

 }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
 }


?>	