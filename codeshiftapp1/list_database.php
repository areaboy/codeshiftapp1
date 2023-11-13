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

 $count = 0;
$sql = "SHOW DATABASES";
$statement = $db->prepare($sql);
$statement->execute();
$database_namesx = $statement->fetchAll(PDO::FETCH_NUM);
$database_count = $statement->rowCount();

if($database_count ==0){
echo "<div style='background:red;color:white;padding:6px;border:none'>You Do not Have any Database Yet in Your Openshift Mysql Instance</div>";

}

echo "<br><h5 style='color:white';> Total Database in Your  Openshift Mysql  Instance: ($database_count)</h5>";
//echo "<br><h5 style='color:white';> Total Database in Your  Openshift Mysql  Instance: (13)</h5>";



//Loop through our database names.
foreach($database_namesx as $dbnamesx){

ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);

$count = ++$count; 
    $list_db = $dbnamesx[0];

echo "<div class='db_css'><b>($count:) DB Name: $list_db</b> <br>





<button style='display:none; font-size:10px;' data-db_n2='$list_db' class='hide_show btn btn-default btn-sm'>Hide/Show</button>

 <span class='loader-table_$list_db'></span>

 <div id='db-call_$list_db'>
 <span class='result-table_$list_db'></span>
 </div>

<button data-db_n2='$list_db' data-db_name='$list_db' class='show_btn table_btn btn btn-primary btn-sm' title='List DB Tables'>List Tables<span class='caret'></span></button> 



<span class='loader-dbc_$list_db'></span>
<span class='result-dbc_$list_db'></span>
<button data-db_n2='$list_db' data-db_name='$list_db' class='show_btn2  db_collation_btn btn btn-info btn-sm' title='Get DB Character Set & Colation'>DB Collation</button>


<span class='loader-dbd_$list_db'></span>
<span class='result-dbd_$list_db'></span>
<button data-db_name='$list_db' class='db_drop_btn btn btn-danger btn-sm' title='Drop Database'>Drop DB</button></div>";

}


}else{
echo "<div style='background:red;padding:8px;color:white;border:none;'>Direct Page Access Not Allowed...</div>";
}


?>