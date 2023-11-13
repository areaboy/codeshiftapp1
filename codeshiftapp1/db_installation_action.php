
<?php
//error_reporting(0);
if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
ini_set('max_execution_time', 300);
// temporarly extend time limit
set_time_limit(300);


$access_code = trim(strip_tags($_POST['accesss_code']));
if($access_code ==''){
echo "<div style='background:red;padding:8px;color:white;border:none;'>Openshift Mysql Installations Access Code Cannot be Empty.</div>";
exit();
}

/*
 Always change the value of this access code to anything or to any value that you like so that other users cannot guess it.
For sample i set it to: openshift2023
*/

$install_access_code ="openshift2023"; 

if($install_access_code !=$access_code ){
echo "<div style='background:red;padding:8px;color:white;border:none;'>Access code You Entered does not match with the Access code set on 
<b>db_installation_action.php</b> file.</div>";
exit();
}


include('data6rst.php');
$result = $db->query("SHOW TABLES LIKE 'openshift_db_users'");
$tb_check = $result !== false && $result->rowCount() > 0;


if($tb_check){
    echo "<div style='color:white;background:red;padding:10px;border:none;'>Openshift Mysql Setup Installation Table already Created in that Database</div><br>";
exit();
	}else{



$sql1= $db->prepare("

CREATE TABLE `openshift_db_backup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` text DEFAULT NULL,
  `timing` varchar(20) DEFAULT NULL,
  `db_name` varchar(200) DEFAULT NULL,
  `backup_type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4

");
$sql1->execute(array());
if($sql1) {
  echo "<div style='color:white;background:green;padding:10px;border:none;'>Table openshift_db_backup  created successfully</div><br>";
} else {
  echo "<div style='color:white;background:red;padding:10px;border:none;'>Table openshift_db_backup creation failed</div><br>";
}







$sql3= $db->prepare("

CREATE TABLE `openshift_db_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `timing` varchar(200) DEFAULT NULL,
  `token1` text DEFAULT NULL,
  `token2` text DEFAULT NULL,
  `userid` text DEFAULT NULL,
  `data` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4

");
$sql3->execute(array());
if($sql3) {
  echo "<div style='color:white;background:green;padding:10px;border:none;'>Table openshift_db_Users created successfully</div><br>";
} else {
  echo "<div style='color:white;background:red;padding:10px;border:none;'>Table openshift_db_Users creation failed</div><br>";
}





}






}else{
echo "<div style='background:red;padding:8px;color:white;border:none;'>Direct Page Access Not Allowed...</div>";
}


?>























