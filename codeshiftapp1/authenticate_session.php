

<?php
	
session_start();
//set session
if(!isset($_SESSION['user_session1']) || (trim($_SESSION['user_session1']) == '')) {
//$username=strip_tags($_GET['username']);
echo "<script>alert('Session Expired. Direct access to this Page Not allowed..');</script>";
		header("location: index.php");
		exit();
	}


$session_fullname  = htmlentities(htmlentities($_SESSION['fullname1'], ENT_QUOTES, "UTF-8"));
$session_status  = htmlentities(htmlentities($_SESSION['user_status1'], ENT_QUOTES, "UTF-8")); 
$session_token1  = htmlentities(htmlentities($_SESSION['token11'], ENT_QUOTES, "UTF-8"));
$session_token2  = htmlentities(htmlentities($_SESSION['token21'], ENT_QUOTES, "UTF-8"));

?>