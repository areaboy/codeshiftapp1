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


$db_name_value = strip_tags($_POST['database_namex']);
if($db_name_value ==''){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Database Name Cannot be Empty..</div>";
exit();
}



include('data6rst.php');





$sql= $db->prepare("
USE $db_name_value;
");

$sql->execute(array());
if($sql) {
//echo "ok";
}else{
echo "failed";

}

$sql = "SELECT SCHEMA_NAME '".$db_name_value."', default_character_set_name 'charset', DEFAULT_COLLATION_NAME 'collation' FROM information_schema.SCHEMATA";
$statement = $db->prepare($sql);
$statement->execute();
$row = $statement->fetch(PDO::FETCH_NUM);
//var_dump($row);
//echo $row[0];
$db_character_setx = $row[1];
$db_collationx = $row[2];




if($statement) {
  echo "<script>alert('DB Character Set: ($db_character_setx). DB Collation: ($db_collationx)');</script>


<div class='well' id='db-call2_$db_name_value'>

<button style='font-size:12px;' data-db_n2='$db_name_value' class='hide_btn2 btn btn-danger btn-sm'>Hide </button>

<b style='color:green'> Success</b><br>
<b>DB Name: </b>$db_name_value <br>
<b>Character Set: </b>$db_character_setx <br>
<b>Collation: </b>$db_collationx
</div>";
} else {
  echo "<div style='color:white;background:red;padding:10px;border:none;'>DB Query failed</div><br>";
}


}else{
echo "<div style='background:red;padding:8px;color:white;border:none;'>Direct Page Access Not Allowed...</div>";
}


?>