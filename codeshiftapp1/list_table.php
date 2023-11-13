<?php
error_reporting(0);
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

$db_name_value = strip_tags($_POST['db_name']);
if($db_name_value ==''){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Database Name Cannot be Empty..</div>";
exit();
}



include('data6rst.php');




echo "<button style='font-size:12px;' data-db_n2='$db_name_value' class='hide_btn btn btn-default btn-sm'>Hide Tables</button>";


 $count = 0;
$sql = "show tables from $db_name_value";
$statement = $db->prepare($sql);
$statement->execute();
$table_namesx = $statement->fetchAll(PDO::FETCH_NUM);
$table_count = $statement->rowCount();

if($table_count ==0){
echo "<div style='background:red;color:white;padding:6px;border:none'>You Do not Have any Table in <b>($db_name_value) Database</b> Yet in Your  Openshift Mysql  Instance</div>";

}

echo "
<h6 style='color:#800000';> Total of ($table_count) Tables in ($db_name_value) DB</h6>";

//Loop through our database to get table names.
foreach($table_namesx as $tbx){

ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);

$count = ++$count; 
    $list_tb = $tbx[0];

echo "<div class='db_cssx'>

 <span class='loader-tablet_$list_tb'></span>
 <span class='result-tablet_$list_tb'></span>
<p class='table_tbtn' data-tb_namet='$list_tb' data-db_namex='$db_name_value' style='cursor:pointer' title='Access Table'> $list_tb</p>

";

}


}else{
echo "<div style='background:red;padding:8px;color:white;border:none;'>Direct Page Access Not Allowed...</div>";
}


?>