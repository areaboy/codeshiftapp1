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


if($session_status !='Admin'){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Only Admin Can Perform This Action</div>";
exit();
}


$result= $db->prepare('select * from openshift_db_backup where backup_type=:backup_type order by id desc');
$result->execute(array(':backup_type'=>'mysql_backup'));
$norows= $result->rowCount();

if($norows == 0){
echo "<br><div style='color:white;background:red;padding:6px;border:none;'>You Do not Make Mysql Backup File to Migrate to Openshift Mysql. Try Backup Now...</div>";
}


if($norows > 0){
//echo "<br><div style='color:white;background:red;padding:6px;border:none;'></div>";

//include('data6rst.php');
$sqlz = "SHOW DATABASES";
$statementz = $db->prepare($sqlz);
$statementz->execute();
$database_namesxz = $statementz->fetchAll(PDO::FETCH_NUM);
$database_countz = $statementz->rowCount();
if($database_countz ==0){
echo "<div style='background:red;color:white;padding:6px;border:none'>You Do not Have any Database Yet in Your Openshift Mysql Instance. Try Create One</div>";
}
?>


 <div class="form-group">
              <label>Select Openshift Mysql Database You want to Migrate/Import To: </label>
             <select name="database_sql2" id="database_sql2" class="col-sm-12 form-control">
    <option value="">--Select Openshift Mysql Database--</option>';

<?php
//Loop through our database names.
foreach($database_namesxz as $dbnamesxz){

    $list_dbz = $dbnamesxz[0];


?>
    <option value="<?php echo $list_dbz; ?>" ><?php echo $list_dbz; ?> </option>
   <?php
    }
    ?>
</select></div><br>

<?php
} // close if


echo "<br><b style='color:purple;font-size:16px;'>Total Backup Database ($norows)</b><br>";

while($row = $result->fetch()){

$id = $row['id'];
$filename = htmlentities(htmlentities($row['filename'], ENT_QUOTES, "UTF-8"));
$timerx = htmlentities(htmlentities($row['timing'], ENT_QUOTES, "UTF-8"));
$db_name = htmlentities(htmlentities($row['db_name'], ENT_QUOTES, "UTF-8"));
?>
<div style='background:#ddd;'  class="recbackup_<?php echo $id; ?>">

<b>Backup Database Name:</b> <?php echo $db_name; ?><br>
<b>Filename:</b>  <?php echo $filename; ?> <br>
<b> Created:</b> <?php echo $timerx;?> <br>



<span class='loader-my_<?php echo $id; ?>'></span>
<span class='result-my_<?php echo $id; ?>'></span>
<button data-file_id='<?php echo $id; ?>' data-file_name='<?php echo $filename; ?>' class='mysql_import_btn btn btn-success btn-sm' title='Migrate/Import to Openshift Mysql'>Migrate/Import to Openshift Mysql</button>

<button class=' btn btn-info btn-sm' title='Download'><a target="_blank" href='mysql_backup/<?php echo $filename; ?>'>Download</a></button>


<span class='loader-my2_<?php echo $id; ?>'></span>
<span class='result-my2_<?php echo $id; ?>'></span>
<button data-file_id='<?php echo $id; ?>' data-filename='<?php echo $filename; ?>' class='mysql_delete_btn btn btn-danger btn-sm' title='Delete'>Delete</button>


</div><br>


<?php
}
?>
     

<?php

}else{
echo "<div style='background:red;padding:8px;color:white;border:none;'>Direct Page Access Not Allowed...</div>";
}


?>