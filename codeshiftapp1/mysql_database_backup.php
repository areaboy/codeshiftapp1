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

$mysql_username = strip_tags($_POST['mysql_username']);
$mysql_password = strip_tags($_POST['mysql_password']);
$mysql_dbname = strip_tags($_POST['mysql_dbname']);
$mysql_hostname = strip_tags($_POST['mysql_hostname']);
$mysql_portno = strip_tags($_POST['mysql_portno']);

//$bin_d = strip_tags($_POST['bin_d']);

if($mysql_username ==''){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Mysql Database UserName Cannot be Empty..</div>";
exit();
}

if($mysql_dbname ==''){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Mysql Database Name Cannot be Empty..</div>";
exit();
}


if($mysql_portno ==''){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Mysql Database Port No Cannot be Empty..</div>";
exit();
}


if($mysql_hostname ==''){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Mysql Hostname Cannot be Empty..</div>";
exit();
}




// Check if User can connect to Local or Remote Database based on provided Mysql database credentials


try {
    $pdo = new PDO("mysql:host=$mysql_hostname;port=$mysql_portno;dbname=$mysql_dbname;charset=utf8", $mysql_username, $mysql_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<div style='color:white;background:green;padding:4px;border:none;'>Connection To Your Local/Remote Mysql Database for Backup successful....</div><br>";
       
}

catch(PDOException $ex)
    {
$mysql_error =  $ex->getMessage();
echo "<div style='color:white;background:red;padding:4px;border:none;'>Connection to Mysql Server for backup failed. Ensure that your Local or Remote Mysql Server is Running and
 that Supplied Mysql Credentials are okay:</div><br>";
echo "<div style='color:white;background:red;padding:4px;border:none;'>Error: $mysql_error</div><br>";
exit();
}



$directoryx = 'mysql_backup';

if (!file_exists($directoryx)) {
mkdir($directoryx, 0777, true);
echo "Successfully Create new folder : ".$directoryx."<br />";
}


$sqlc= $pdo->prepare("
USE $mysql_dbname;
");
$sqlc->execute(array());
if($sqlc) {
echo "ok";
}else{
echo "failed";
}


$ipaddress = strip_tags($_SERVER['REMOTE_ADDR']);
$mt_id=rand(0000,9999);
$randx = $ipaddress.$mt_id;
$fx =  md5($randx);

$db_tab = $mysql_dbname;


$tables = array();
$sql = "SHOW TABLES";
$statement = $pdo->prepare($sql);
$statement->execute();
$tables = $statement->fetchAll(PDO::FETCH_NUM);
//$tables = $statement->fetchAll();
//var_dump($tables);


$db_backup_update = "";
foreach($tables as $table){

$table = $table[0];

$sql2 = "SHOW CREATE TABLE $table";
$statement2 = $pdo->prepare($sql2);
$statement2->execute();
//$row = $statement2->fetchAll(PDO::FETCH_NUM);
$row = $statement2->fetch();
//var_dump($row);


$db_backup_update .= "\n\n" . $row[1] . ";\n\n";
$sql3 = "SELECT * FROM $table";
$statement3 = $pdo->prepare($sql3);
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

$statement = $db->prepare('INSERT INTO openshift_db_backup 
(filename,timing,db_name,backup_type)
 
                          values
(:filename,:timing,:db_name,:backup_type)');

$statement->execute(array( 
':filename' => $filename,
':timing' => $dt,
':db_name' => $db_tab,		
':backup_type' => 'mysql_backup'
));


if($statement){
echo "<script>alert('Backup successfully Created');</script>";
echo "<div id='mysx'><span style='background:green;color:white;padding:6px;border:none;'>Backup database <b>($db_tab)</b> successfully , Filename: <b>$filename</b> </span></div>";
}




}else{

echo "<script>alert('Backup Failed. Ensure that You can write to mysql_backup folder..');</script>";
echo "<div id='mysx'><span style='background:red;color:white;padding:6px;border:none;'>Ensure that You can write to mysql_backup folder </span></div>";

}












}else{
echo "<div style='background:red;padding:8px;color:white;border:none;'>Direct Page Access Not Allowed...</div>";
}


?>