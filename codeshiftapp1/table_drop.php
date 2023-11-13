<?php
//error_reporting(0);
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


$db_name_value = strip_tags($_POST['db_namev']);
if($db_name_value ==''){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Database Name Cannot be Empty..</div>";
exit();
}

$tb_name_value = strip_tags($_POST['tb_namev']);
if($db_name_value ==''){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Table Name Cannot be Empty..</div>";
exit();
}


// Connect to Openshift Mysql Database
include('data6rst.php');

/*
// Check to ensure that only the owner can perform this Queries
$result_verified = $db->prepare('select token1, token2 from openshift_db_users where token1=:token1 AND token2=:token2');
$result_verified->execute(array(':token1' =>$session_token1, ':token2' =>$session_token2));
$rows_v= $result_verified->fetch();
$norows= $result_verified->rowCount();


if($norows ==1){
//echo "ok";
}else{
echo "<div style='background:red;padding:8px;color:white;border:none;'>User Not Found</div>";
exit();
}
*/



$sql= $db->prepare("
USE $db_name_value;
DROP TABLE $tb_name_value;
");

$sql->execute(array());
if($sql) {
  echo "<script>alert('Table ($tb_name_value) Dropped successfully');</script>

<div style='color:white;background:green;padding:10px;border:none;'>Table <b>$tb_name_value</b> Dropped successfully</div><br>";
} else {
  echo "<div style='color:white;background:red;padding:10px;border:none;'>Dropping Table <b>$tb_name_value</b> failed</div><br>";
}


}else{
echo "<div style='background:red;padding:8px;color:white;border:none;'>Direct Page Access Not Allowed...</div>";
}


?>