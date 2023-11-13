<?php
//error_reporting(0);
if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {

include('settings.php');

//Integrate php Sessions
include('authenticate_session.php'); 


if($session_status !='Admin'){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Only Admin Can Perform This Action</div>";
exit();
}


$db_name_value = strip_tags($_POST['database_namex']);
if($db_name_value ==''){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Database Name Cannot be Empty..</div>";
exit();
}



include('data6rst.php');




$sql= $db->prepare("
USE $db_name_value;
DROP DATABASE $db_name_value;
");

$sql->execute(array());
if($sql) {
  echo "<script>alert('Database ($db_name_value) Dropped successfully');</script>

<div style='color:white;background:green;padding:10px;border:none;'>Database <b>$db_name_value</b> Dropped successfully</div><br>";
} else {
  echo "<div style='color:white;background:red;padding:10px;border:none;'>Dropping Database <b>$db_name_value</b> failed</div><br>";
}


}else{
echo "<div style='background:red;padding:8px;color:white;border:none;'>Direct Page Access Not Allowed...</div>";
}


?>