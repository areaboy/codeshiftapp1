
<?php


//Destroy php Sessions
session_start();
unset($_SESSION['user_session1']);
unset($_SESSION['fullname1']);
unset($_SESSION['user_status1']);
unset($_SESSION['token11']);
unset($_SESSION['token21']);

session_destroy();
header("Location:index.php");






?>