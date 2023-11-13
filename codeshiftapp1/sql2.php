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


$db_name_value = strip_tags($_POST['database_sql']);
if($db_name_value ==''){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Database Name Cannot be Empty..</div>";
exit();
}

$sql_value = strip_tags($_POST['sql2']);
if($db_name_value ==''){
echo "<div style='color:white;background:red;padding:6px;border:none;'>SQL Command Cannot be Empty..</div>";
exit();
}



// Connect to Openshift Mysql Database
include('data6rst.php');
// help discover sql error messages if anything failed
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sqlc= $db->prepare("
USE $db_name_value;
");

$sqlc->execute(array());
if($sqlc) {
//echo "ok";
}else{
echo "failed";

}




try {
$sql= $db->prepare("
$sql_value;
");

$sql->execute(array());
if($sql) {
echo "<div style='color:white;background:green;padding:10px;border:none;' id='sql_ok2'>SQL Executed successfully </b></div><br>";
} else {
  echo "<div style='color:white;background:red;padding:10px;border:none;' id='sql_failed2'>SQL Execution failed</div><br>";
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