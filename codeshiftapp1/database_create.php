<?php
error_reporting(0);
if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
ini_set('max_execution_time', 300);
// temporarly extend time limit
set_time_limit(300);

include('settings.php');


//Integrate php Sessions
include('authenticate_session.php'); 


if($session_status != 'Admin'){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Only Admin Can Perform This Action</div>";
exit();
}


$db_name_v = strip_tags($_POST['create_database_name']);
$db_name_value = str_replace(' ', '', $db_name_v);
if($db_name_value ==''){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Database Name Cannot be Empty..</div>";
exit();
}

$db_collationx = strip_tags($_POST['db_collationx']);
if($db_collationx ==''){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Database Character Set and Collation Type Cannot be Empty..</div>";
exit();
}




 $values_tix = $db_collationx;
   $valuesy = explode("-",$values_tix);
   $tidb_character_setx = $valuesy[0];
$tidb_collationx = $valuesy[1];



include('data6rst.php');
// help discover sql error messages if anything failed
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/*
$sqlc= $db->prepare("
USE $db_name_value;
");

$sqlc->execute(array());
if($sqlc) {
//echo "ok";
}else{
echo "failed";

}
*/



try {
$sql= $db->prepare("
CREATE DATABASE $db_name_value CHARACTER SET $tidb_character_setx COLLATE $tidb_collationx;
");

$sql->execute(array());
if($sql) {
echo "<div style='color:white;background:green;padding:10px;border:none;' id='db_ok2'>Database Created successfully </b></div><br>";
} else {
  echo "<div style='color:white;background:red;padding:10px;border:none;' id='db_failed2'>Database Creation failed</div><br>";
}


}
catch (PDOException $e) {  

$output = 'SQL Error: ' . $e->getMessage();
  echo "<div style='color:white;background:red;padding:10px;border:none;'>$output</div><br>"; 
exit();
}



}else{
echo "<div style='background:red;padding:8px;color:white;border:none;'>Direct Page Access Not Allowed...</div>";
}


?>