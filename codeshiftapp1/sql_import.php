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


if($session_status != 'Admin'){
echo "<div style='color:white;background:red;padding:6px;border:none;'>Only Admin Can Perform This Action</div>";
exit();
}



$file_content = strip_tags($_POST['file_fname']);
$db_import_to= strip_tags($_POST['database_sql3x']);


$mt_id=rand(0000,9999);
$mt_id1=rand(0000,8888);

$mt_id2  = $mt_id1.$mt_id;

$dt2=date("Y-m-d H:i:s");
$ipaddress = strip_tags($_SERVER['REMOTE_ADDR']);


	
$timer = time();
include("time/now.fn");
$created_time=strip_tags($now);
$mt = microtime(true);
$mdx = md5($mt);
$uidx = uniqid();
$userid = $uidx.$timer.$mdx;




if ($file_content == ''){
echo "<div id='' class='' style='color:white;background:red;padding:6px;border:none;'>SQL File Uploads Cannot be Empty.<br></div>";
exit();
}


if ($db_import_to == ''){
echo "<div class='' id='' style='color:white;background:red;padding:6px;border:none;'>Openshift Mysql Database Name to Import to Cannot be Empty</div>";
exit();
}



$ip= filter_var($ipaddress, FILTER_VALIDATE_IP);
if (!$ip){
echo "<div class='' id='alertdatap' style='color:white;background:red;padding:6px;border:none;'><font color=red>IP Address is Invalid</font></div>";
exit();
}

$upload_path = "temp_uploads/";


$filename_string = strip_tags($_FILES['file_content']['name']);
// thus check files extension names before major validations

$allowed_formats = array("sql","SQL");
$exts = explode(".",$filename_string);
$ext = end($exts);

if (!in_array($ext, $allowed_formats)) { 
echo "<div id='alertdatap' class='' style='color:white;background:red;padding:6px;border:none;'>Only .sql Formats are allowed.<br></div>";
exit();
}



$fsize = $_FILES['file_content']['size']; 
$ftmp = $_FILES['file_content']['tmp_name'];

if ($fsize > 10 * 1024 * 1024) { // allow file of less than 10 mb
echo "<div id='alertdatap' class='' style='color:white;background:red;padding:6px;border:none;'>File greater than 10 mb not allowed<br></div>";
exit();
}



$allowed_types=array(
"text/plain",
"text/PLAIN",
"application/sql",
"application/octet-stream",
"text/x-sql",
"text/sql"

);




if ( ! ( in_array($_FILES["file_content"]["type"], $allowed_types) ) ) {

  echo "<div id='alertdatap' class='' style='color:white;background:red;padding:6px;border:none;'>Only .SQL Files are allowed bro..<br><br></div>";

exit();

}




//validate image using file info  method
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime = finfo_file($finfo, $_FILES['file_content']['tmp_name']);


if ( ! ( in_array($mime, $allowed_types) ) ) {

  echo "<div id='alertdatap' class='' style='color:white;background:red;padding:6px;border:none;'>Only SQL are allowed. okay..<br></div>";

exit();

}
finfo_close($finfo);


$final_filename =$mdx.$timer.$filename_string;

if (move_uploaded_file($ftmp, $upload_path . $final_filename)) {


echo  "<script>alert('SQL File Uploads Successfully');</script>";
echo "<div id='importx33c' style='background:green;padding:8px;color:white;border:none;'>SQL File Uploads Successfully</div><br>";





echo "<script>


$(document).ready(function(){


var database_sqlp  = '$db_import_to';
var file_namexp  = '$final_filename';




 if(database_sqlp==''){
alert('There is a problem with Openshift Mysql Database Name to import to');
}

else{


$('#loader-exp').fadeIn(400).html('<br><div style=color:black;background:#ddd;padding:10px;><img src=img/loader.gif>&nbsp; Please Wait, Importing SQL File to Openshift Mysql Cloud Database...</div>');
var datasend = {database_sqlp:database_sqlp, file_namexp:file_namexp};

		$.ajax({
			
			type:'POST',
			url:'sql_import_openshift.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$('#loader-exp').hide();
$('#result-exp').html(msg);
setTimeout(function(){ $('#importx33').html(''); }, 5000);
//$('#importx33').delay(5000).fadeOut('slow');	
}
			
		});
		
		}

});


</script>
<div id='loader-exp'></div>
<div id='result-exp'></div>
<br>
";





}else{

echo  "<script>alert('SQL File Failed');</script>";
echo "<div style='background:red;padding:8px;color:white;border:none;'>SQL File Uploads Failed</div><br>";

}




}else{
echo "<div style='background:red;padding:8px;color:white;border:none;'>Direct Page Access Not Allowed</div>";
}




?>



