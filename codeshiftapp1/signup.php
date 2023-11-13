<?php
error_reporting(0);

// start users registrations.


if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
include('settings.php');

$email = strip_tags($_POST['username']);
$password = strip_tags($_POST['password']);
$fullname = strip_tags($_POST['fullname']);
$status = 'Admin';


//hash password before sending it to database...
$options = array("cost"=>4);
$hashpass = password_hash($password,PASSWORD_BCRYPT,$options);
$ipaddress = strip_tags($_SERVER['REMOTE_ADDR']);

if ($email == ''){
echo "<div style='background:red;padding:8px;color:white;border:none;'>Email is empty</div>";
exit();
}
$em= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$em){
echo "<div style='background:red;padding:8px;color:white;border:none;'>Email Address is Invalid</div>";
exit();
}

$ip= filter_var($ipaddress, FILTER_VALIDATE_IP);
if (!$ip){
echo "<div style='background:red;padding:8px;color:white;border:none;'>IP Address is Invalid</div>";
exit();
}



//insert into database

$timer = time();
include("time/now.fn");
$created_time=strip_tags($now);
$dt2=date("Y-m-d H:i:s");
$mt_id=rand(0000,9999);

$dt2=date("Y-m-d H:i:s");
$mt = microtime(true);
$mdx = md5($mt);
$mdx2 = md5($ipaddress);
$mdx3 = $mdx.$mdx2;
$uidx = uniqid();
$randx =  md5($mt_id);
$userid = $uidx.$timer.$mdx.$mdx2.$randx;
$data_rand = $randx.$timer;


include('data6rst.php');


// check if user with this email already exits


$result_verified = $db->prepare('select * from openshift_db_users where email=:email');
$result_verified->execute(array(':email' =>$email));
$rows= $result_verified->fetch();
$norows= $result_verified->rowCount();



if($norows== 1){
echo "<script>
alert('User with this Email Already Exist');
</script>";

echo "<div style='background:red;padding:8px;color:white;border:none;'>User with this Email Already Exist</div>";
exit();
}


// Check maximumof Users who can signup
$result_verified2 = $db->prepare('select * from openshift_db_users');
$result_verified2->execute(array());
$rows2= $result_verified2->fetch();
$norows2= $result_verified2->rowCount();

if($norows2 == $maximum_no_of_super_admin_allowed){
echo "<script>
alert('Maximum Allowable Super Admin Signup by the Site Admin is: $maximum_no_of_super_admin_allowed .Edit (Settings.php) file to Increase the no.');
</script>";

echo "<div style='background:red;padding:8px;color:white;border:none;'>Maximum Allowable Super Admin Signup by the SiteAdmin is: <b>$maximum_no_of_super_admin_allowed</b>.
Edit <b>Settings.php</b> file to Increase the no.</div>";
exit();
}




$statement = $db->prepare('INSERT INTO openshift_db_users

(email,fullname,password,timing,status,userid,data)
 
                          values
(:email,:fullname,:password,:timing,:status,:userid,:data)');

$statement->execute(array( 

':email' => $email,
':fullname' => $fullname,
':password' => $hashpass,		
':timing' => $timer,
':status' =>'Admin',
':userid' =>$userid,
':data' =>$data_rand
));


if($statement){
echo  "<script>alert('Account Successfully Created. You can Login Now');</script>";
echo "<div style='background:green;padding:8px;color:white;border:none;'>Account Successfully Created. You can Login Now...</div>";
echo "<script>
$('#myModal_signup').modal('hide');
$('#myModal_login').modal('show');
</script>
";

}

              else {
echo "<div style='background:red;padding:8px;color:white;border:none;'>Account Creation Failed. Ensure there is internet connections...</div>";
                }

}


else{

echo "<div style='background:red;padding:8px;color:white;border:none;'>Direct Page Access not allowed...</div>";
}


?>



