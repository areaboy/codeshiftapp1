<?php
//error_reporting(0);
if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {

include('settings.php');


//Integrate php Sessions
include('authenticate_session.php'); 


if($session_status != 'Admin'){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Only Admin Can Perform This Action</div>";
exit();
}



$db_name_value = strip_tags($_POST['tb_database']);

if($db_name_value ==''){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Database Name Cannot be Empty..</div>";
exit();
}

$tb_name_value = strip_tags($_POST['tb_name']);
if($tb_name_value ==''){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Table Name Cannot be Empty..</div>";
exit();
}



$tb_id = strip_tags($_POST['tb_id']);
if($tb_id ==''){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Table Row ID Cannot be Empty..</div>";
exit();
}


// Connect to Openshift Mysql Database
include('data6rst.php');

// Get First column name

$sql = "SELECT column_name FROM information_schema.columns WHERE table_name = '".$tb_name_value."' AND table_schema ='".$db_name_value."' ";
$statement = $db->prepare($sql);
$statement->execute();
$row = $statement->fetch(PDO::FETCH_NUM);
$fetch_first_column = $row[0];
$id = $fetch_first_column;


$sqlc= $db->prepare("
USE $db_name_value;
");

$sqlc->execute(array());
if($sqlc) {
//echo "ok";
}else{
echo "failed";

}

$db_tbs="$db_name_value.$tb_name_value";

//echo "DELETE FROM $db_tbs where $id  = :id";

 $del = $db->prepare("DELETE FROM $db_tbs where $id  = :id");
$del->execute(array(':id' => $tb_id));


if($del){

echo 1;
}else{

echo 0;
}



}else{
echo "<div style='background:red;padding:8px;color:white;border:none;'>Direct Page Access Not Allowed...</div>";
}


?>