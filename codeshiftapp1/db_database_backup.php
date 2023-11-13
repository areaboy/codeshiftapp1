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

$database_sql3xa = strip_tags($_POST['database_sql3xa']);


if($database_sql3xa ==''){
echo "<div style='color:white;background:red;padding:6px;border:none;'> Openshift Mysql  Database to Backup Cannot be Empty..</div>";
exit();
}




$directoryx = 'db_backup';

if (!file_exists($directoryx)) {
mkdir($directoryx, 0777, true);
echo "Successfully Create new folder : ".$directoryx."<br />";
}


$sqlc= $db->prepare("
USE $database_sql3xa;
");
$sqlc->execute(array());
if($sqlc) {
//echo "ok";
}else{
echo "failed";
}


$ipaddress = strip_tags($_SERVER['REMOTE_ADDR']);
$mt_id=rand(0000,9999);
$randx = $ipaddress.$mt_id;
$fx =  md5($randx);

$db_tab = $database_sql3xa;


$tables = array();
$sql = "SHOW TABLES";
$statement = $db->prepare($sql);
$statement->execute();
$tables = $statement->fetchAll(PDO::FETCH_NUM);
//$tables = $statement->fetchAll();
//var_dump($tables);


$db_backup_update = "";
foreach($tables as $table){

$table = $table[0];

$sql2 = "SHOW CREATE TABLE $table";
$statement2 = $db->prepare($sql2);
$statement2->execute();
//$row = $statement2->fetchAll(PDO::FETCH_NUM);
$row = $statement2->fetch();
//var_dump($row);


$db_backup_update .= "\n\n" . $row[1] . ";\n\n";
$sql3 = "SELECT * FROM $table";
$statement3 = $db->prepare($sql3);
$statement3->execute();
$table_columnCount = $statement3->columnCount();
	
	// dump data toeach table
    for ($i = 0; $i < $table_columnCount; $i ++) {
			while ($row = $statement3->fetch()) {
            $db_backup_update .= "INSERT INTO $table VALUES(";
            for ($j = 0; $j < $table_columnCount; $j ++) {
                $row[$j] = $row[$j];
                
                if (isset($row[$j])) {
                    $db_backup_update .= '"' . $row[$j] . '"';
                } else {
                    $db_backup_update .= '""';
                }
                if ($j < ($table_columnCount - 1)) {
                    $db_backup_update .= ',';
                }
            }
            $db_backup_update .= ");\n";
        }
    }
    
    $db_backup_update .= "\n"; 
	
	
}

if($db_backup_update){
//$filename = $directoryx.'/'.$db_tab.'-'.date('Y-m-d--H-i-s').$fx.'.sql';
$filename = $db_tab.'-'.date('Y-m-d--H-i-s').$fx.'.sql';
$fileHandler = fopen("$directoryx/$filename", 'w+');
fwrite($fileHandler, $db_backup_update);
fclose($fileHandler); 
//echo "Database Backup Successful";


$timer = time();
$dt = date('Y-m-d--H-i-s');                                         
include('data6rst.php');
$statementm = $db->prepare('INSERT INTO openshift_db_backup 
(filename,timing,db_name,backup_type)
 
                          values
(:filename,:timing,:db_name,:backup_type)');

$statementm->execute(array( 
':filename' => $filename,
':timing' => $dt,
':db_name' => $db_tab,		
':backup_type' => 'db_backup'
));


if($statementm){
echo "<script>alert('Backup successfully Created');</script>";
echo "<div id='tibsx'><span style='background:green;color:white;padding:6px;border:none;'>Backup database <b>($db_tab)</b> successfully , Filename: <b>$filename</b> </span></div>";
}




}else{

echo "<script>alert('Backup Failed. Ensure that You can write to db_backup folder..');</script>";
echo "<div id='tibsx'><span style='background:red;color:white;padding:6px;border:none;'>Backup database Failed.  Ensure that You can write to db_backup folder </span></div>";

}












}else{
echo "<div style='background:red;padding:8px;color:white;border:none;'>Direct Page Access Not Allowed...</div>";
}


?>