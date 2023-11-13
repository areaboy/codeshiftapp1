<?php
error_reporting(0);
include('settings.php');
?>




<!DOCTYPE html>
<html lang="en">





<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="javascript/jquery.min.js"></script>
<script src="javascript/moment.js"></script>
	<script src="javascript/livestamp.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  <link rel="stylesheet" href="javascript/bootstrap.min.css" />
  <script src="javascript/jquery.dataTables.min.js"></script>
  <script src="javascript/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="javascript/dataTables.bootstrap.min.css" />
  <script src="javascript/bootstrap.min.js"></script>




    <title>Openshift Mysql Admin</title>

</head>

<style>

.report_css{
background:#ddd;
padding:10px;
height:40px;
border:none;
color:black;
border-radius:20%;


}


.report_css:hover{
background:purple;
color:white;

}
.imagelogo_li_remove {
list-style-type: none;
margin: 0;
 padding: 0;
}

.imagelogo_data{
 width:120px;
 height:80px;
}
  .navbar {
    letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
   background-color:<?php echo $color; ?>;

    z-index: 9999;
    border: 0;
    font-family: comic sans ms;
//color:white;
  }


.navbar-toggle {
background-color:orange;
  }

.navgate {
padding:16px;color:white;

}

.navgate:hover{
 color: black;
 background-color: orange;

}


.navbar-header{
height:60px;
}

.navbar-header-collapse-color {
background:white;
}

.dropdown_bgcolor{

background: purple;
color:white;
}

.dropdown_dashedline{
 border-bottom: 2px dotted white;
}

.navgate101:hover{
background:<?php echo $color; ?>;
color:white;

}


.creator_imagelogo_data{
 width:60px;
 height:60px;
}

/* make modal appear at center of the page */
.modal-appear-center {
margin-top: 25%;
//width:40%;
}


/* make modal appear at center of the page */
.modal-appear-center1 {
margin-top: 15%;
//width:40%;
}
.modal-appear-center2 {
margin-top: 10%;
//width:40%;
}



.modal_head_color{
background-color: <?php echo $color; ?>;
padding: 6px;
color:white;
}


.modal_footer_color{
background-color: <?php echo $color; ?>;
padding: 6px;
color:white;
}


/* footer */


  .navbar_footer {
letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
    //background-color:<?php echo $color; ?>;
    color:white;
    padding:20px;
    border: 0;
    font-family: comic sans ms;
  }


.footer_bgcolor{
background: purple;
}

.footer_text1{
color:white;
font-size:20px;
border:none;
cursor:pointer;
}

.footer_text2{
color:grey;
font-size:14px;
border:none;
cursor:pointer;
}

.footer_text1:hover{
color:grey;
}


.footer_text2:hover{
color:orange;
}


.footer_dashedline{
 border-top: 1px dashed white;
}



.category_post1{
background-color: <?php echo $color; ?>;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
z-index: -999;
}
.category_post1:hover {
background: black;
color:white;
}

.category_post2{
background-color:purple;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
z-index: -999;
}
.category_post1:hover {
background: black;
color:white;
}





</style>


<body>




    


    <div>




<!-- start column nav-->


<div class="text-center">
<nav class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navgator">
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span> 
        <span class="navbar-header-collapse-color icon-bar"></span>                       
      </button>
     
<li class="navbar-brand home_click imagelogo_li_remove" ><img title='logo' alt='logo' class="img-rounded imagelogo_data" src="img/logo.png"></li>
    </div>
    <div class="collapse navbar-collapse" id="navgator">


      <ul class="nav navbar-nav navbar-right">

      <li><a <a style='color:white;font-size:14px;' class="nav-link"><button class="category_post1">Openshift Mysql Admin</button></a></li>
    
      </ul>




    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column n-->






<br><br>

<h2><center>Openshift Mysql Admin:  A Mysql Control Panel(CP) for Managing Openshift Mysql Cloud Database Instances...</center></h2>
<center>

<br><b style='font-size:20px;'>Powered By Openshift </b><br>
</center>


<span style='color:red'><h2>App Installation Instruction:</h2> please click on "<b>Install App Database Table First</b>" button below 
to install all Database Table. You can then 
Signup and Login to start using the app </span>


<style>
    
  .needyx_css{
      background:navy;
      color:white;
      padding:20px;
      border:none;
      border-radius:20%;
      cursor:pointer;
      width:80%;
  }  
 
.needyx_css:hover{
 color: black;
 background-color: orange;
cursor:pointer;
 //width:45%;
}  

.needy_css{
      background:fuchsia;
      color:white;
      padding:20px;
      border:none;
      border-radius:20%;
      cursor:pointer;
      width:80%;
  }  
 
.needy_css:hover{
    cursor:pointer;
 color: black;
 background-color: orange;

 //width:50%;
}  
</style><br><br>
        <div class="container">
            <div class="row">


<div class="col-sm-6  well alerts alert-warning" style='height:300px;'>
               
<br><br>
<h3>Openshift Mysql Admin</h3><br>

     <ul class="nav navbar-nav">

      <li><a style='cursor:pointer;color:white;font-size:14px;' class="nav-link" data-toggle="modal" data-target="#myModal_signup" title=" Signup"><button class="category_post1">Admin Signup</button></a></li>
<li class="nav-item">

<a style='cursor:pointer;color:white;font-size:14px;' class="nav-link" data-toggle="modal" data-target="#myModal_login" title="Login"><button class="category_post1">Admin Login</button></a>
                        </li>

<li class="nav-item">

<a style='display:none;cursor:pointer;color:white;font-size:14px;' class="nav-link" data-toggle="modal" data-target="#myModal_pr" title="Password Reset">
<button class="category_post2">Password Reset</button></a>
                        </li>



 <li class="navgate_no">
<a target='_blank' title='Install App Database Table' href="db_installation.php" style="color:white;font-size:14px;">
<button class="category_post2">Install App Database Table First</button></a></li>



      </ul>



                </div>


                <div class="col-sm-6" style='height:320px;'>
               

<img class='img-thumbnail border-0' style='width:450px;height:300px; 
max-width:450px;max-height:300px;' src='img/openshift.jpg' title='Image'><br><br>


                </div>



              
            </div>
        </div>




        <div class="container">
            <div class="row justify-content-center text-center border-top py-2">
                <span>&copy;2023.Openshift Mysql Admin.</span>
            </div>
        </div>
    </div>





















<script>


// signup starts

$(document).ready(function(){
$('#signup_btn').click(function () {

var username  = $('#username_s').val();
var password = $('#password_s').val();
var confirm_password = $('#password_sx').val();
var fullname = $('#fullname_s').val();

//alert(status);

 if(fullname==""){
alert('please Enter Fullname');
}


 else if(username==""){
alert('please Enter Email');
}

else if(password==""){
alert('please Enter Password');
}

else if(confirm_password==""){
alert('please Enter Password');
}



else if(confirm_password != password){
alert('Confirm Password and Password Does not Match');
}


else{


$("#loader-signup").fadeIn(400).html('<br><div style="color:white;background:#800000;padding:10px;"><img src="img/loader.gif">&nbsp;Please Wait, Your data is being Created...</div>');
var datasend = {username:username, password:password, fullname:fullname};


	
		$.ajax({
			
			type:'POST',
			url:'signup.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-signup").hide();
$("#result-signup").html(msg);
setTimeout(function(){ $("#result-signup").html(''); }, 5000);


// clear all Data
//$('#username_s').val('');		
//$('#password_s').val('');	


	
}
			
		});
		
		}

});

});

// signup ends


//login starts

$(document).ready(function(){
$('#login_btn').click(function () {

var username  = $('#username').val();
var password = $('#password').val();





 if(username==""){
alert('please Enter Email');
}

else if(password==""){
alert('please Enter Password');
}




else{


$("#loader-login").fadeIn(400).html('<br><div style="color:white;background:#800000;padding:10px;"><img src="img/loader.gif">&nbsp;Please Wait, Your are being login as Admin...</div>');
var datasend = {username:username, password:password};
	
		$.ajax({
			
			type:'POST',
			url:'login.php',
			data:datasend,
                        dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-login").hide();
$("#result-login").html(msg);
//setTimeout(function(){ $("#result-login").html(''); }, 5000);
// clear all Data
//$('#username').val('');		
//$('#password').val('');		
}
});
		
		}

});

});

//  login ends







//reset Password starts

$(document).ready(function(){
$('#resetpass_btn').click(function () {

var email  = $('#em').val();



 if(email==""){
alert('please Enter Email');
}




else{


$("#loader-em").fadeIn(400).html('<br><div style="color:white;background:#800000;padding:10px;"><img src="img/loader.gif">&nbsp;Please Wait, Processing your Password Reset...</div>');
var datasend = {email:email};


	
		$.ajax({
			
			type:'POST',
			url:'reset_password.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-em").hide();
$("#result-em").html(msg);
//setTimeout(function(){ $("#result-em").html(''); }, 5000);


// clear 
//$('#em').val('');		
	


	
}
			
		});
		
		}

});

});

//  reset Password ends


</script>





<!-- Admin login Modal start -->



<div id="myModal_signup" class="modal fade" role="dialog">
  <div class="modal-dialog  modal-appear-center2">

    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header"  style='background:<?php echo $color; ?>;color:white;padding:6px;'>
        <h4 class="modal-title">Admin Signup System</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
 
Admin Signup System....<br><br>
 <div class="form-group">
              <label> Fullname: </label>
              <input type="text" class="col-sm-12 form-control" id="fullname_s" name="fullname_s"  value="">
            </div>


 


 <div class="form-group">
              <label>Email: </label>
              <input type="text" class="col-sm-12 form-control" id="username_s" name="username_s"  value="">
            </div>
 
 <div class="form-group">
              <label>Password: </label>
              <input type="password" class="col-sm-12 form-control" id="password_s" name="password_s"  value="">
            </div>

 <div class="form-group">
              <label>Confirm - Password: </label>
              <input type="password" class="col-sm-12 form-control" id="password_sx" name="password_sx"  value="">
            </div>





<br>
<div id="loader-signup"></div>
<div id="result-signup"></div>


                    <input type="button" id="signup_btn" class="btn btn-primary" value="Signup Now!" disabled/>



      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- signup Modal ends -->


<!--  login Modal start -->
<div class="modal fade" id="myModal_login">
  <div class="modal-dialog  modal-appear-center2">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header"  style='background:<?php echo $color; ?>;color:white;padding:6px;'>
        <h4 class="modal-title">Admin Login System</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
 


 <div class="form-group">
 <div class="form-group  hide_form2">
              <label>Email: </label>
              <input type="text" class="col-sm-12 form-control" id="username" name="username"  value="">
            </div>
 
 <div class="form-group  hide_form2">
              <label>Password: </label>
              <input type="password" class="col-sm-12 form-control" id="password" name="password"  placeholder='Enter Password' value="">
            </div>
</div>

<br>
<div id="loader-login"></div>
<div id="result-login"></div>

<br>
                    <input type="button" id="login_btn" class="hide_form2 btn btn-primary" value="Login Now!" />


<br>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!--  login Modal ends -->











<!-- password Reset Modal start -->
<div class="modal fade" id="myModal_pr">
  <div class="modal-dialog  modal-appear-center2">
    <div class="modal-content">

      <!-- Modal Header -->
     <div class="modal-header"  style='background:<?php echo $color; ?>;color:white;padding:6px;'>
        <h4 class="modal-title">Password Reset System</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
 
Password Reset System.....<br><br>

 <div class="form-group hide_form">
              <label>Email: </label>
              <input type="text" class="col-sm-12 form-control" id="em" name="em">
            </div>
 

<br>
<div id="loader-em"></div>
<div id="result-em"></div>
<br>

                    <input type="button" id="resetpass_btn" class="hide_form btn btn-warning hide_form" value="Reset Password!" />

<br>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- Password Modal ends -->










<!-- Contact Modal start -->
<div class="modal fade" id="myModal_contact">
  <div class="modal-dialog  modal-appear-center2">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header"  style='background:<?php echo $color; ?>;color:white;padding:6px;'>
        <h4 class="modal-title">Contact Us</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
 
Sites Contacts Informations Goes here<br><br>





      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
   <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

    </div>
  </div>
</div>

<!-- contact Modal ends -->








<!-- about Modal start -->
<div class="modal fade" id="myModal_about">
  <div class="modal-dialog modal-appear-center2">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style='background:<?php echo $color; ?>;color:white;padding:6px;'>
        <h4 class="modal-title">About Us</h4>
        <button type="button" class="btn-close pull-right" data-dismiss="modal">Close</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
 
About Us Informations Goes here<br><br>





      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- about Modal ends -->









