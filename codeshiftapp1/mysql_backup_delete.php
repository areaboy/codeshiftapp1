<?php
error_reporting(0);
if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
ini_set('max_execution_time', 300);
// temporarly extend time limit
set_time_limit(300);


include('settings.php');
include('data6rst.php');
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//Integrate php Sessions
include('authenticate_session.php'); 

if($session_status !='Admin'){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Only Admin Can Perform This Action</div>";
exit();
}



$filename = strip_tags($_POST['filename']);
$id = strip_tags($_POST['id']);

if($id ==''){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Mysql Database SQL File ID  To be Deleted Cannot be Empty..</div>";
exit();
}

/*

$sqlc= $db->prepare("
USE $db_delete;
");
$sqlc->execute(array());
if($sqlc) {
echo "ok";
}else{
echo "failed";
}

*/


$del = $db->prepare('DELETE FROM openshift_db_backup where id = :id');

		$del->execute(array(
			':id' => $id
    ));


if($del){


// unlink or remove the SQl file from the directory mysql_backup
//unlink("download/temp.SQL");
unlink("mysql_backup/$filename");


 echo "<script>alert('SQL File successfully Deleted');</script>";
echo "SQL File successfully Deleted</div></div>";

}else{

 echo "<script>alert('SQL File Delete Failed');</script>";

}



}else{
echo "<div style='background:red;padding:8px;color:white;border:none;'>Direct Page Access Not Allowed...</div>";
}


?>