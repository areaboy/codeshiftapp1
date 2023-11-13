<?php
error_reporting(0);
if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
ini_set('max_execution_time', 300);
// temporarly extend time limit
set_time_limit(300);

include('settings.php');


include('authenticate_session.php'); 


if($session_status !='Admin'){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Only Admin Can Perform This Action</div>";
exit();
}

$tb_name_value = strip_tags($_POST['tb_name']);
if($tb_name_value ==''){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Table Name Cannot be Empty..</div>";
exit();
}

$db_namex_value = strip_tags($_POST['db_namex']);
if($db_namex_value ==''){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Database Name Cannot be Empty..</div>";
exit();
}



echo "<div class='well'><h3>Database Name: $db_namex_value</h3>";
echo "<h4>Table Name: $tb_name_value</h4>

 <span class='loader-t1_$tb_name_value'></span>
 <span class='result-t1_$tb_name_value'></span>
<button  data-toggle='modal' data-target='#myModal_table_sql' data-t1_name='$tb_name_value'  data-d1_name='$db_namex_value' class='t1_btn btn btn-primary btn-sm' title='Create SQL'>SQL</button> 






  <button type='button' class='btn btn-warning btn-sm' data-toggle='collapse' data-target='#table_$tb_name_value'>Rename Table<b>(Open/Close)</b></button>
  <div id='table_$tb_name_value' class='collapse'>

 <div class='form-group col-sm-12'>

<b>Change or Rename Old Table Name to a New Name</b><br>
              <label> Enter New Table Name for Renaming: </label>
              <input type='text' class='col-sm-6 form-control' id='tb_rname' name='tb_rname' placeholder='Enter New Table Name'>
            </div>


 <span class='loader-t2_$tb_name_value'></span>
 <span class='result-t2_$tb_name_value'></span>
<button  data-t2_name='$tb_name_value'  data-d2_name='$db_namex_value' class='t2_btn btn btn-warning btn-sm' title='Rename Table Now'><b>Rename Table Now</b></button> 
<br>
</div>




 <span class='loader-t3_$tb_name_value'></span>
 <span class='result-t3_$tb_name_value'></span>
<button  data-t3_name='$tb_name_value'  data-d3_name='$db_namex_value' class='t3_btn btn btn-danger btn-sm' title='Drop Table'>Drop Table</button> 



 <span class='loader-t4_$tb_name_value'></span>
 <span class='result-t4_$tb_name_value'></span>
<button  data-toggle='modal' data-target='#myModal_table_schema' data-t4_name='$tb_name_value'  data-d4_name='$db_namex_value' class='t4_btn btn btn-primary btn-sm' title='Schema'>Table Schema</button> 


</div>";






// 
include('data6rst.php');




?>


<table class="table table-hover">
    <tr>
<?php

//echo "(tab: $tb_name_value ---- db: $db_namex_value )";


$sql= $db->prepare("
USE $db_namex_value;
");

$sql->execute(array());
if($sql) {
//echo "ok";
}else{
echo "failed";

}

$sql = "SELECT column_name FROM information_schema.columns WHERE table_name = '".$tb_name_value."' AND table_schema ='".$db_namex_value."' ";
$statement = $db->prepare($sql);
$statement->execute();
//$result = $statement->fetchAll(PDO::FETCH_NUM);
//$result = $statement->fetchAll(PDO::FETCH_ASSOC);
//var_dum($result);

$sql2 = "SELECT * FROM $tb_name_value";
$statement2 = $db->prepare($sql2);
$statement2->execute();
//$result2 = $statement2->fetchAll(PDO::FETCH_NUM);

$norows= $statement2->rowCount();

echo "<b style='color:purple'>Total Records($norows)</b><br>";

if($norows == 0){
echo "<div style='color:white;background:red;padding:10px;border:none;' id=''>No. Record Exist for Table <b>($tb_name_value)</b></div><br>";

}


echo "<td><b style='color:red;font-size:16px;'>Actions</b></td>";

while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    ?>

        <td><b style='color:purple;font-size:16px;'><?php echo $row['column_name']; ?></b></td>
<?php
}
?>
        </tr>
        <tr>

        <?php
$count= 0;
 while ($res = $statement2->fetch(PDO::FETCH_ASSOC)) {

$associative_array = array_combine(range(1, sizeof($res)), $res);
$table_idx = $associative_array[1];

//$fn = $res['id'];

echo "<td  class='recdel_$table_idx'>

 <span class='loader-del_$table_idx'></span>
 <span class='result-del_$table_idx'></span>
<button data-del_id='$table_idx' data-del_tab='$tb_name_value'  data-del_db='$db_namex_value' class='del_btn btn btn-danger btn-sm' title='Delete'>Delete</button></td>";

 foreach ($res as $column) {
 
$associative_array2 = array_combine(range(1, sizeof($res)), $res);
$table_idx2 = $associative_array2[1];
     
     ?>
        
<td class='recdel_<?php echo $table_idx2; ?>'><?php echo $column; ?></td>

        <?php
        }
        ?>
        </tr>
        <tr>
<?php

 }

?>




<?php



}else{
echo "<div style='background:red;padding:8px;color:white;border:none;'>Direct Page Access Not Allowed...</div>";
}


?>