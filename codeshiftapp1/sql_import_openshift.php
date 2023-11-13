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


if($session_status != 'Admin'){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Only Admin Can Perform This Action</div>";
exit();
}


$db_import_to = strip_tags($_POST['database_sqlp']);
$file_namex = strip_tags($_POST['file_namexp']);
//$id = strip_tags($_POST['id']);

if($file_namex ==''){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Mysql Database SQL File to Import Cannot be Empty..</div>";
exit();
}

if($db_import_to ==''){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Openshift Mysql Database Name you are Importing to Cannot be Empty..</div>";
exit();
}




$sqlc= $db->prepare("
USE $db_import_to;
");
$sqlc->execute(array());
if($sqlc) {
echo "ok";
}else{
echo "failed";
}



/*
     //$query = file_get_contents("mywordpress_dbfred-2023.sql");
$query = file_get_contents($file_namex);
     $db->exec($query);
  echo "<script>alert('SQL File successfully Imported to Openshift Mysql ($db_import_to)');</script>";
echo "<div id='importx_id33'><div  style='background:green;color:white;padding:6px;border:none;'>SQL File successfully Imported to Openshift Mysql <b>($db_import_to)</b>
</div></div>";


*/


$qs = '';
$export = file("temp_uploads/$file_namex");
foreach ($export as $line)	{


	
	$begin = substr(trim($line), 0 ,2);
	$end = substr(trim($line), -1 ,1);
	
	if (empty($line) || $begin == '--' || $begin == '/*' || $begin == '//') {
		continue;
	}
		
	$qs = $qs . $line;
	if ($end == ';') {
		$db->exec($qs);
		$qs= '';		
	}
}





// Remove the file from directory

// unlink or remove the SQl file from the directory mysql_backup
unlink("temp_uploads/$file_namex");

 echo "<script>alert('SQL File successfully Imported to Openshift Mysql ($db_import_to)');</script>";
echo "<div id='importx33'><div  style='background:green;color:white;padding:6px;border:none;'>SQL File successfully Imported to Openshift Mysql <b>($db_import_to)</b>
</div></div>";



}else{
echo "<div style='background:red;padding:8px;color:white;border:none;'>Direct Page Access Not Allowed...</div>";
}


?>