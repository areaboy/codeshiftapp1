<?php
//error_reporting(0);
if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
ini_set('max_execution_time', 300);
// temporarly extend time limit
set_time_limit(300);


include('settings.php');
include('data6rst.php');


//Integrate php Sessions
include('authenticate_session.php'); 


if($session_status != 'Admin'){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Only Admin Can Perform This Action</div>";
exit();
}


$result= $db->prepare('select * from openshift_db_backup where backup_type=:backup_type order by id desc');
$result->execute(array(':backup_type'=>'db_backup'));
$norows= $result->rowCount();

if($norows == 0){
echo "<br><div style='color:white;background:red;padding:6px;border:none;'>You Do not Make  Openshift Mysql  Backup File yet...</div>";
}





echo "<br><b style='color:purple;font-size:16px;'>Total  Openshift Mysql  Backup Database ($norows)</b><br>";

while($row = $result->fetch()){

$id = $row['id'];
$filename = htmlentities(htmlentities($row['filename'], ENT_QUOTES, "UTF-8"));
$timerx = htmlentities(htmlentities($row['timing'], ENT_QUOTES, "UTF-8"));
$db_name = htmlentities(htmlentities($row['db_name'], ENT_QUOTES, "UTF-8"));
?>
<div style='background:#ddd;'  class="recbackupopenshiftdel_<?php echo $id; ?>">

<b>Backup Database Name:</b> <?php echo $db_name; ?><br>
<b>Filename:</b>  <?php echo $filename; ?> <br>
<b> Created:</b> <?php echo $timerx;?> <br>


<button class=' btn btn-info btn-sm' title='Download'><a target="_blank" href='db_backup/<?php echo $filename; ?>'>Download</a></button>


<span class='loader-openshiftdel_<?php echo $id; ?>'></span>
<span class='result-openshiftdel_<?php echo $id; ?>'></span>
<button data-file_id='<?php echo $id; ?>' data-filename='<?php echo $filename; ?>' class='openshift_delete_btn btn btn-danger btn-sm' title='Delete'>Delete</button>


</div><br>


<?php
}
?>
     

<?php

}else{
echo "<div style='background:red;padding:8px;color:white;border:none;'>Direct Page Access Not Allowed...</div>";
}


?>