<?php
//error_reporting(0);
if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
ini_set('max_execution_time', 300);
// temporarly extend time limit
set_time_limit(300);

include('settings.php');

//Integrate php Sessions
include('authenticate_session.php'); 


if($session_status !='Admin'){
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




//$sql = "show create table openshift_db_users";
//$sql = "SHOW FULL COLUMNS FROM openshift_db_users";

 $ts = "$db_name_value.$tb_name_value";

$sql = "SHOW COLUMNS FROM $ts";
$statement = $db->prepare($sql);
$statement->execute();

//$database_namesx = $statement->fetchAll(PDO::FETCH_NUM);
$database_namesx = $statement->fetchAll(PDO::FETCH_ASSOC);

//var_dump($database_namesx);

echo "<table><tr>";

echo '<table border="0" cellspacing="2" cellpadding="2" class="table table-hover"> 
      <tr> 
          <td> <font face="Arial">Field</font> </td> 
          <td> <font face="Arial">Type</font> </td> 
          <td> <font face="Arial">Null</font> </td> 
          <td> <font face="Arial">Key</font> </td> 
          <td> <font face="Arial">Default</font> </td> 
<td> <font face="Arial">Extra</font> </td> 
      </tr>';

foreach($database_namesx as $dbnamesx){
$fieldsx = $dbnamesx['Field'];
$typex = $dbnamesx['Type'];
$nullx = $dbnamesx['Null'];
$keyx = $dbnamesx['Key'];
$defaultx = $dbnamesx['Default'];
$extrax = $dbnamesx['Extra'];


echo "<tr><td>$fieldsx</td>
<td>$typex</td>
<td>$nullx</td>
<td>$keyx</td>
<td>$defaultx</td>
<td>$extrax</td>
</tr>
";
}
echo "</table>";



}else{
echo "<div style='background:red;padding:8px;color:white;border:none;'>Direct Page Access Not Allowed...</div>";
}


?>