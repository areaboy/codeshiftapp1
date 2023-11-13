
<?php
error_reporting(0);
include('settings.php');
$timerx = time();

//Integrate php Sessions
include('authenticate_session.php'); 




$colorx ='#800000';


if($session_status != 'Admin'){

echo "<div style='color:white;background:red;padding:6px;border:none;'>Only Admin Can Access this Page</div>";
exit();
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
 <title>Welcome  <?php echo $session_fullname; ?> to Openshift Mysql Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Openshift Mysql Admin" />


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="javascript/bootstrap.min.css">
<script src="javascript/jquery.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>





<style>


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

/* navigation */


.left-column-all {
    overflow-x: hidden;
    position: fixed;
    z-index: 9999;
    width:50vw;
    height: 100vh;
background:<?php echo $colorx; ?>;
color:white;
/*
    background: url(img/openshift.jpg) center no-repeat <?php echo $colorx; ?>;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -ms-background-size: cover;
    -o-background-size: cover;
*/

/*
    margin-top: 0px;
    margin-left: 0px;
    */
}



@media screen and (max-width: 1440px) {
.left-column-all {
width:100vw;
width:100vh;

}

}
	
.right-column-all {
 margin-left:30vw;
/*
margin-left:47vw;
*/
}

@media screen and (max-width: 800px) {
.left-column-all {
    width: 100vw;
    position: inherit;
    background-position: inherit;
}

.right-column-all {
    margin-top: 0px;
margin-left: 0px;

}
}




/*ensure that category button does not jam about us or event section when on mobile start here. you can remove it if you
like. this will make product contain maximum of 8 categories button*/
@media screen and (max-width: 768px) {
.left-column-all {
   padding-bottom:700px;
}
}

@media screen and (max-width: 600px) {
.left-column-all {
   padding-bottom:700px;

}
}

/*ensure that category button does not jam about us or product section when on mobile ends here.*/




.section_padding {
padding: 60px 40px;
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
   background-color: <?php echo $color; ?>;

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

background: <?php echo $color; ?>;
color:white;
}

.dropdown_dashedline{
 border-bottom: 2px dotted white;
}

.navgate101:hover{
background:fuchsia;
color:white;

}





/* home starts */
  
.home_image {	
width:100%;
/*
height:500px;
max-height:500px;
*/
height:100vh;
max-height:100vh;
       
        
}

.home_content_head {
        color: white;
        font-size:40px;
        font-weight:bold;
	font-family:comic sans ms; 
width:40vw;
margin-left:-110px;
  
}

.home_content_text {
        color: white;
        font-size:20px;
        font-weight:bold;
	box-sizing: border-box;
      //position: relative;
        
}

.home{
background:#ec5574;
}

.home:hover{
box-shadow: inset 0 0 0 25px <?php echo $color; ?>;

}


.home_text_transparent_home {
border-style: solid; border-width:1px; border-color: orange;
  width: 100%;
  padding: 90px;
  position: absolute;
  bottom: 0px;
  background: rgba( 0, 0, 0, 0.50);

  color: white;
  height:100%;
text-align: center;

}



@media screen and (max-width: 768px) {
  .home_text_transparent_home{

  width: 100%;
  padding: 20px;
  }
}



@media screen and (max-width: 600px) {
  .home_content_home{
  width: 100%;
  padding: 20px  
  }
}













.left_shifting{

width:25%;
}

@media screen and (max-width: 768px) {
.left-column-all {
width:100%;

}

.home_resize_padding {
padding-top:100px;
}


}



@media screen and (max-width: 600px) {
.left-column-all {
width:100%;

}

.home_resize_padding {
padding-top:100px;
}

}

.modaling_sizing{
width:59%;
}


@media screen and (max-width: 768px) {
.modaling_sizing {
width:99%;

}

.home_content_head {       
margin-left:0px; 
padding-top:10px;
width:100%;
text-align:center;
}


}

@media screen and (max-width: 600px) {
.modaling_sizing {
width:99%;
}

.home_content_head {       
margin-left:0px; 
padding-top:10px;
width:100%;
text-align:center; 
}



}

.category_post{
background-color: <?php echo $color; ?>;
padding: 16px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
width:100%;
z-index: -999;
}
.category_post:hover {
background: black;
color:white;
}	



.category_post2{
background-color: <?php echo $color; ?>;
padding: 16px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
width:100%;
z-index: -999;
}
.category_post:hover {
background: black;
color:white;
}	

.modal-dialog{
   
   margin-top: 80px;
} 



/* make modal appear at center of the page */
.modal-appear-center1 {
margin-top: 10%;
//width:40%;
}

</style>



 
</head>
<body>























<!--start left column all-->

    <div class="left-column-all left_shifting">

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



<ul class="nav navbar-nav navbar-left">

 <li class="navgate_no">
<a title='Create Database'  data-toggle='modal' data-target='#myModal_table_db' style="color:white;font-size:14px;">
<button class="category_post1"><b>Create <br>Database</b></button></a></li>


 <li class="navgate_no">
<a title=' SQL Prompt'  data-toggle='modal' data-target='#myModal_table_sql2' style="color:white;font-size:14px;">
<button class="category_post1"><b>SQL Prompt</b></button></a></li>


 <li style='display:none;' class="navgate_no">
<a title='Mysql Backup & Migration to Openshift'  data-toggle='modal' data-target='#myModal_mysql' style="color:white;font-size:14px;">
<button class="category_post1"><b>Mysql Backup &<br> Migration to OpenShift</b></button></a></li>



 <li class="navgate_no">
<a title='Import SQL File'  data-toggle='modal' data-target='#myModal_sql_import' style="color:white;font-size:14px;">
<button class="category_post1"><b>Import <br>SQL File</b></button></a></li>




 <li class="navgate_no">
<a title='Mysql Backup & Download'  data-toggle='modal' data-target='#myModal_mysql_backup' style="color:white;font-size:14px;">
<button class="category_post1"><b>Mysql Backup &<br> Download</b></button></a></li>








</ul>


      <ul class="nav navbar-nav navbar-right">


    <li class="navgate_no">
<a title='Logout' href="logout.php" style="color:white;font-size:14px;">
<button class="category_post1">Logout</button></a></li>


      </ul>


    </div>
  </div>

</nav>

    </div><br /><br /><br /><br />

<!-- end column nav-->


<br>

<h3> Openshift Mysql Admin</h3>





<!-- start coding-->
<style>


.db_css{
background:#ddd;
padding:6px;
height:auto;
border:none;
color:black;
border-radius:20%;


}


.db_css:hover{
background:#ccc;
color:purple;

}

.center_css{
    width: 430px;
    height: 100px;
    //background-color: white;
    
    position: absolute;
    top:0;
    bottom: 0;
    left: 0;
    right: 0;
    
    margin: auto;
}
</style>




<script>

// list databases start 1
$(document).ready(function(){

var list_db  = 'openshift';
 if(list_db==""){
alert('Cannot list Db');
}
else{

$("#loader-list_db").fadeIn(400).html('<br><div style="color:white;background:#800000;padding:10px;"><img src="img/loader.gif">&nbsp;Please Wait, Loading Your Openshift Cloud Database Names...</div>');
var datasend = {list_db:list_db};


	
		$.ajax({
			
			type:'POST',
			url:'list_database.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-list_db").hide();
$("#result-list_db").html(msg);
//setTimeout(function(){ $("#result-list_db").html(''); }, 5000);
	


	
}
			
		});
		
		}

});

// list databases ends1






// list databases start 2
function list_db(){

var list_db  = 'openshift';
 if(list_db==""){
alert('Cannot list Db');
}
else{

$("#loader-list_db").fadeIn(400).html('<br><div style="color:white;background:#800000;padding:10px;"><img src="img/loader.gif">&nbsp;Please Wait, Loading Your Openshift Cloud Database Names...</div>');
var datasend = {list_db:list_db};


	
		$.ajax({
			
			type:'POST',
			url:'list_database.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-list_db").hide();
$("#result-list_db").html(msg);
//setTimeout(function(){ $("#result-list_db").html(''); }, 5000);
	


	
}
			
		});
		
		}

};

// list databases ends2








// list all table via DB starts

$(document).ready(function(){

//$('.table_btn').click(function(){
$(document).on( 'click', '.table_btn', function(){ 

var db_name = $(this).data('db_name');
var id =db_name;
//alert(id);


$(".loader-table_"+id).fadeIn(400).html('<div style="color:black;background:white;padding:10px;"><img src="img/loader.gif">&nbsp; Wait. Listing Table from DB..</div>');
var datasend = {db_name: db_name};
		$.ajax({
			
			type:'POST',
			url:'list_table.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
$(".loader-table_"+id).hide();
$(".result-table_"+id).html(msg);
//setTimeout(function(){ $(".result-table_"+id).html(''); }, 5000);
//location.reload();

}
			
});

                });


            });


// list all table via db ends











// get table data starts

$(document).ready(function(){

//$('.table_tbtn').click(function(){
$(document).on( 'click', '.table_tbtn', function(){ 

var tb_name = $(this).data('tb_namet');
var db_namex =  $(this).data('db_namex');
var id =tb_name;
//alert(db_namex);

$(".loader-tablet").fadeIn(400).html('<div style="color:black;background:#ddd;padding:10px;"><img src="img/loader.gif">&nbsp; Wait. Getting Table from DB..</div>');

$(".loader-tablet_"+id).fadeIn(400).html('<div style="color:black;background:white;padding:10px;"><img src="img/loader.gif">&nbsp; Wait. Getting Table from DB..</div>');
var datasend = {tb_name: tb_name, db_namex:db_namex};
		$.ajax({
			
			type:'POST',
			url:'list_table_data.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
$(".loader-tablet_"+id).hide();
//$(".result-tablet_"+id).html(msg);

$(".loader-tablet").hide();
$(".result-tablet").html(msg);

//setTimeout(function(){ $(".result-table_"+id).html(''); }, 5000);
//location.reload();

}
			
});

                });


            });


// get table data ends











// get table data function starts

function list_table_data(){

 var access_table =   sessionStorage.getItem("access_tb");
 var access_database =   sessionStorage.getItem("access_db");

if (access_table== null || access_table == undefined) {

  alert('Session Issue. Click OK to reload the Content');
location.reload();
//return false;
}


var tb_name = access_table;
var db_namex =  access_database;
var id =tb_name;
//alert(db_namex);

$(".loader-tablet").fadeIn(400).html('<div style="color:black;background:#ddd;padding:10px;"><img src="img/loader.gif">&nbsp; Wait. Getting Table from DB..</div>');

var datasend = {tb_name: tb_name, db_namex:db_namex};
		$.ajax({
			
			type:'POST',
			url:'list_table_data.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
//$(".loader-tablet_"+id).hide();
//$(".result-tablet_"+id).html(msg);

$(".loader-tablet").hide();
$(".result-tablet").html(msg);

//setTimeout(function(){ $(".result-table_"+id).html(''); }, 5000);
//location.reload();

}
			
});

 }


// get table data functions  ends









// rename table start



$(document).ready(function(){

//$('.t2_btn').click(function(){
$(document).on( 'click', '.t2_btn', function(){ 

var tb_namev = $(this).data('t2_name');
var db_namev =  $(this).data('d2_name');
var id = tb_namev;
//alert(db_namev);
var tb_rname = $('#tb_rname').val();

if(tb_rname==""){
alert('Table New Name for Renaming Cannot be empty');
return false;
}

// confirm start
 if(confirm("Are you sure you want to Rename This Table: (" +tb_namev+ ")" )){

$(".loader-t2_"+id).fadeIn(400).html('<div style="color:black;background:white;padding:10px;"><img src="img/loader.gif">&nbsp; Renaming..</div>');
var datasend = {tb_namev: tb_namev, db_namev:db_namev, tb_rname:tb_rname};
		$.ajax({
			
			type:'POST',
			url:'table_rename.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
$(".loader-t2_"+id).hide();
$(".result-t2_"+id).html(msg);

//setTimeout(function(){ $(".result-t2_"+id).html(''); }, 5000);
//location.reload();


//strip all html elemnts using jquery
var html_stripped = jQuery(msg).text();
//alert(html_stripped);

//check occurrence of word (successfully) from backend output already html stripped.
var Frombackend = html_stripped;
var bcount = (Frombackend.match(/successfully/g) || []).length;
//alert(bcount);

if(bcount > 0){
$('#tb_rname').val('');

//reload list databases
list_db();

//reload get table data
list_table_data();

}




}
			
});

}//Confirm ends

                });


            });


// rename table ends








// drop table start



$(document).ready(function(){

//$('.t3_btn').click(function(){
$(document).on( 'click', '.t3_btn', function(){ 

var tb_namev = $(this).data('t3_name');
var db_namev =  $(this).data('d3_name');
var id = tb_namev;
//alert(db_namev);


// confirm start
 if(confirm("Are you sure you want to Drop This Table: (" +tb_namev+ ")" )){

$(".loader-t3_"+id).fadeIn(400).html('<div style="color:black;background:white;padding:10px;"><img src="img/loader.gif">&nbsp; Dropping Table..</div>');
var datasend = {tb_namev: tb_namev, db_namev:db_namev};
		$.ajax({
			
			type:'POST',
			url:'table_drop.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
$(".loader-t3_"+id).hide();
$(".result-t3_"+id).html(msg);

//setTimeout(function(){ $(".result-t3_"+id).html(''); }, 5000);
//location.reload();


//strip all html elemnts using jquery
var html_stripped = jQuery(msg).text();
//alert(html_stripped);

//check occurrence of word (successfully) from backend output already html stripped.
var Frombackend = html_stripped;
var bcount = (Frombackend.match(/successfully/g) || []).length;
//alert(bcount);

if(bcount > 0){

location.reload();

}




}
			
});

}//Confirm ends

                });


            });


// drop table ends








// schema table start



$(document).ready(function(){

//$('.t4_btn').click(function(){
$(document).on( 'click', '.t4_btn', function(){ 

var tb_namev = $(this).data('t4_name');
var db_namev =  $(this).data('d4_name');
var id = tb_namev;
//alert(db_namev);

$('.p_table').html(tb_namev);
$('.p_database').html(db_namev);

$(".loader-t4").fadeIn(400).html('<div style="color:black;background:white;padding:10px;"><img src="img/loader.gif">&nbsp; Loading Table Schema..</div>');
var datasend = {tb_namev: tb_namev, db_namev:db_namev};
		$.ajax({
			
			type:'POST',
			url:'table_schema.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
$(".loader-t4").hide();
$(".result-t4").html(msg);

//setTimeout(function(){ $(".result-t4").html(''); }, 5000);
//location.reload();

}
			
});

                });


            });


// schema table ends







// SQL 1 start



$(document).ready(function(){

//$('.t4_btn').click(function(){
$(document).on( 'click', '.t1_btn', function(){ 

var tb_namev = $(this).data('t1_name');
var db_namev =  $(this).data('d1_name');
var id = tb_namev;
//alert(db_namev);

$('.p_table').html(tb_namev);
$('.p_database').html(db_namev);

// ajax start sql1
$('.sql1_btn').click(function(){


var sql1 = $('#sql1').val();


if(sql1==""){
alert('SQL Command Cannot be empty');
return false;
}

$(".loader-sql1").fadeIn(400).html('<div style="color:black;background:white;padding:10px;"><img src="img/loader.gif">&nbsp; Processing SQL..</div>');
var datasend = {tb_namev: tb_namev, db_namev:db_namev, sql1:sql1};
		$.ajax({
			
			type:'POST',
			url:'sql1.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
$(".loader-sql1").hide();
$(".result-sql1").html(msg);


setTimeout(function(){ $("#sql_ok1").html(''); }, 3000);
setTimeout(function(){ $("#sql_failed1").html(''); }, 3000);

//strip all html elemnts using jquery
var html_stripped = jQuery(msg).text();
//alert(html_stripped);

//check occurrence of word (successfully) from backend output already html stripped.
var Frombackend = html_stripped;
var bcount = (Frombackend.match(/successfully/g) || []).length;
//alert(bcount);

if(bcount > 0){

$('#sql1').val('');

//reload list databases
list_db();

//reload get table data
list_table_data();

}




}
			
});

});
//ajax ends sql1

                });


            });


// SQL 1 ends














// SQL 2 start



$(document).ready(function(){

$('.sql2_btn').click(function(){
//$(document).on( 'click', '.sql2_btn', function(){ 



var database_sql = $('#database_sql').val();
var sql2 = $('#sql2').val();


if(database_sql==""){
alert('Please Select Database Name to be Used');
return false;
}


if(sql2==""){
alert('SQL Command Cannot be empty');
return false;
}

$(".loader-sql2").fadeIn(400).html('<div style="color:black;background:white;padding:10px;"><img src="img/loader.gif">&nbsp; Processing Mysql SQL..</div>');
var datasend = {database_sql: database_sql, sql2:sql2};
		$.ajax({
			
			type:'POST',
			url:'sql2.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
$(".loader-sql2").hide();
$(".result-sql2").html(msg);


setTimeout(function(){ $("#sql_ok2").html(''); }, 3000);
setTimeout(function(){ $("#sql_failed2").html(''); }, 3000);

//strip all html elemnts using jquery
var html_stripped = jQuery(msg).text();
//alert(html_stripped);

//check occurrence of word (successfully) from backend output already html stripped.
var Frombackend = html_stripped;
var bcount = (Frombackend.match(/successfully/g) || []).length;
//alert(bcount);

if(bcount > 0){
alert('SQL Executed Successfully');
$('#sql2').val('');

//reload list databases
list_db();

}




}
			
});

                });


            });


// SQL 2 ends










// create db start



$(document).ready(function(){

$('.db_btn').click(function(){
//$(document).on( 'click', '.db_btn', function(){ 



var create_database_name = $('#create_database_name').val();
var db_collationx = $("input[name='db_collationx']:checked").val();

if(create_database_name==""){
alert('Please Enter Database Name');
return false;
}


if(db_collationx==""){
alert('Select Database Character Set and Collation Type');
return false;
}

$(".loader-db").fadeIn(400).html('<div style="color:black;background:white;padding:10px;"><img src="img/loader.gif">&nbsp; Creating Database..</div>');
var datasend = {create_database_name: create_database_name, db_collationx:db_collationx};
		$.ajax({
			
			type:'POST',
			url:'database_create.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
$(".loader-db").hide();
$(".result-db").html(msg);


setTimeout(function(){ $("#db_ok2").html(''); }, 3000);
setTimeout(function(){ $("#db_failed2").html(''); }, 3000);

//strip all html elemnts using jquery
var html_stripped = jQuery(msg).text();
//alert(html_stripped);

//check occurrence of word (successfully) from backend output already html stripped.
var Frombackend = html_stripped;
var bcount = (Frombackend.match(/successfully/g) || []).length;
//alert(bcount);

if(bcount > 0){
alert('Database Created Successfully');
$('#create_database_name').val('');
$('#db_collationx').val('');

//reload list databases
list_db();

}




}
			
});

                });


            });


// create db ends










// delete table start



$(document).ready(function(){

//$('.del_btn').click(function(){
$(document).on( 'click', '.del_btn', function(){ 


var tb_id = $(this).data('del_id');
var tb_name = $(this).data('del_tab');
var tb_database = $(this).data('del_db');


var id = tb_id;
//alert(id);


if(id==""){
alert('Table ID for Deleting Cannot be empty');
return false;
}

// confirm start
 if(confirm("Are you sure you want to Delete this Record" )){

$(".loader-del_"+id).fadeIn(400).html('<div style="color:black;background:white;padding:10px;"><img src="img/loader.gif">&nbsp; Deleting..</div>');
var datasend = {tb_id: tb_id, tb_name:tb_name, tb_database:tb_database};
		$.ajax({
			
			type:'POST',
			url:'table_delete.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
//$(".loader-del_"+id).hide();
//$(".result-del_"+id).html(msg);


	if(msg == 1){
alert('Records Successfully Deleted');
$(".loader-del_"+id).hide();
$(".result-del_"+id).html("<div style='color:white;background:green;padding:10px;'>Records Successfully Deleted</div>");
setTimeout(function(){ $(".result-del_"+id).html(''); }, 5000);
//location.reload();

$(".recdel_"+id).animate({ backgroundColor: "#fbc7c7" }, "fast").animate({ opacity: "hide" }, "slow");


}


	if(msg == 0){

alert('Records could not be deleted. Please ensure you are connected to Internet.');
$(".loader-del_"+id).hide();
$(".result-del_"+id).html("<div style='color:white;background:green;padding:10px;'>Records Could not be Deleted</div>");
setTimeout(function(){ $(".result-del_"+id).html(''); }, 5000);

}


}
			
});

}//Confirm ends

                });


            });


// delete table ends





        $(document).ready(function() {
            //$(".show_btn").click(function() {
$(document).on( 'click', '.show_btn', function(){ 

var db_id = $(this).data('db_n2');
var id = db_id;
                $("#db-call_"+id).show();
            });
        });


    $(document).ready(function() {
            //$(".hide_btn").click(function() {
$(document).on( 'click', '.hide_btn', function(){ 

var db_id = $(this).data('db_n2');
var id = db_id;
                $("#db-call_"+id).hide();
            });
        });











// drop db start



$(document).ready(function(){

//$('.db_drop_btn').click(function(){
$(document).on( 'click', '.db_drop_btn', function(){ 

var database_namex = $(this).data('db_name');
var id = database_namex;

if(database_namex==""){
alert('Database Name is Empty');
return false;
}


// confirm start
 if(confirm("Are you sure you want to Delete this Database: " +database_namex )){



$(".loader-dbd_"+id).fadeIn(400).html('<div style="color:black;background:white;padding:10px;"><img src="img/loader.gif">&nbsp; Dropping Database..</div>');
var datasend = {database_namex: database_namex};
		$.ajax({
			
			type:'POST',
			url:'database_drop.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
$(".loader-dbd_"+id).hide();
$(".result-dbd_"+id).html(msg);


setTimeout(function(){ $("#db_drop_ok").html(''); }, 3000);
setTimeout(function(){ $("#db_drop_failed").html(''); }, 3000);

//strip all html elemnts using jquery
var html_stripped = jQuery(msg).text();
//alert(html_stripped);

//check occurrence of word (successfully) from backend output already html stripped.
var Frombackend = html_stripped;
var bcount = (Frombackend.match(/successfully/g) || []).length;
//alert(bcount);

if(bcount > 0){
alert('Database Droped Successfully');

//reload list databases
list_db();

}




}
			
});


}//Confirm ends

                });


            });


// drop db ends







// collation db start



$(document).ready(function(){

//$('.db_collation_btn').click(function(){
$(document).on( 'click', '.db_collation_btn', function(){ 

var database_namex = $(this).data('db_name');
var id = database_namex;

if(database_namex==""){
alert('Database Name is Empty');
return false;
}



$(".loader-dbc_"+id).fadeIn(400).html('<div style="color:black;background:white;padding:10px;"><img src="img/loader.gif">&nbsp; Getting  Database Schema..</div>');
var datasend = {database_namex: database_namex};
		$.ajax({
			
			type:'POST',
			url:'database_schema.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
$(".loader-dbc_"+id).hide();
$(".result-dbc_"+id).html(msg);


setTimeout(function(){ $("#db_collation_ok").html(''); }, 20000);
setTimeout(function(){ $("#db_collation_failed").html(''); }, 5000);






}
			
});

                });


            });


// collation db ends



   $(document).ready(function() {
            //$(".show_btn2").click(function() {
$(document).on( 'click', '.show_btn2', function(){ 

var db_id = $(this).data('db_n2');
var id = db_id;
                $("#db-call2_"+id).show();
            });
        });


    $(document).ready(function() {
            //$(".hide_btn2").click(function() {
$(document).on( 'click', '.hide_btn2', function(){ 

var db_id = $(this).data('db_n2');
var id = db_id;
                $("#db-call2_"+id).hide();
            });
        });



</script>




<div id='loader-list_db'></div>
<div id='result-list_db'></div>






<!-- end coding-->






    </div>
<!--end left column all-->












<!-- Table Schema  modal starts here -->


<div class="container_map">

  <div class="modal fade" id="myModal_table_schema" role="dialog">
    <div class="modal-dialog modal-appear-center1" >
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 

      
 <button type="button" class="close btn btn-warning" data-dismiss="modal">Close</button>

      <h4 class="modal-title">Table Schema</h4>
        </div>
        <div class="modal-body">



<!-- start-->


<center><h3 style='color:#800000'>Table Schema for (<span class='p_table'></span>) Table</h3></center>

<div class='row'>

<div class='col-sm-12'>

<b>Database Name: </b><span class='p_database'></span><br>

<b>Table Name: </b> <span class='p_table'></span><br>




<div class='loader-t4'></div>
<div class='result-t4'></div>



</div></div>



<!-- end-->

        </div>
      

   <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>


      </div>


      </div>
    </div>
  </div>
</div>



<!-- table schema modal ends here -->











<!-- Table sql1 modal starts here -->


<div class="container_map">

  <div class="modal fade" id="myModal_table_sql" role="dialog">
    <div class="modal-dialog modal-appear-center1" >
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 

      
 <button type="button" class="close btn btn-warning" data-dismiss="modal">Close</button>

      <h4 class="modal-title">Structural Query Language(SQL)</h4>

        </div>
        <div class="modal-body">



<!-- start-->


<div class='row'>

<div class='col-sm-12'>

<b>Database Name: </b><span class='p_database'></span><br>

<b>Table Name: </b> <span class='p_table'></span><br>
Use <b>SQL</b>  query and manipulate your Mysql Cloud database systems.<br>

<div style='color:red'>No need to type <b>"USE DATABASE_NAME"</b> before performing any query Here. We Got it Covered...</div>

<div class='loader-t1'></div>
<div class='result-t1'></div>

 <div class="form-group">
              <label>SQL</label>
              <textarea rows='10' cols='' class="col-sm-12 form-control" id="sql1" placeholder="Your Query"></textarea>
            </div>


<br>
 <span class='loader-sql1'></span>
 <span class='result-sql1'></span>
<button  class='sql1_btn btn btn-primary btn-sm' title='Submit'>Submit</button> 




</div></div>



<!-- end-->

        </div>
      

   <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>


      </div>


      </div>
    </div>
  </div>
</div>



<!-- table sql1 modal ends here -->













<!-- Table sql2 modal starts here -->


<div class="container_map">

  <div class="modal fade" id="myModal_table_sql2" role="dialog">
    <div class="modal-dialog modal-appear-center1" >
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 

      
 <button type="button" class="close btn btn-warning" data-dismiss="modal">Close</button>

      <h4 class="modal-title">Structural Query Language(SQL)</h4>

        </div>
        <div class="modal-body">



<!-- start-->


<div class='row'>

<div class='col-sm-12'>


Use <b>SQL</b>  query and manipulate your Mysql Cloud database systems.<br>

<div style='color:red'>No need to type <b>"USE DATABASE_NAME"</b> before performing any query Here. We Got it Covered...</div><br>


<?php
include('data6rst.php');
$sqlz = "SHOW DATABASES";
$statementz = $db->prepare($sqlz);
$statementz->execute();
$database_namesxz = $statementz->fetchAll(PDO::FETCH_NUM);
$database_countz = $statementz->rowCount();
if($database_countz ==0){
echo "<div style='background:red;color:white;padding:6px;border:none'>You Do not Have any Database Yet in Your Mysql Instance. Try Create One</div>";

}
?>

 <div class="form-group">
              <label>Select Database: </label>
             <select name="database_sql" id="database_sql" class="col-sm-12 form-control">
    <option value="">--Select Database--</option>';

<?php
//Loop through our database names.
foreach($database_namesxz as $dbnamesxz){

    $list_dbz = $dbnamesxz[0];


?>
    <option value="<?php echo $list_dbz; ?>" ><?php echo $list_dbz; ?> </option>
   <?php
    }
    ?>
</select></div><br>


 <div class="form-group">
              <label>SQL</label>
              <textarea rows='10' cols='' class="col-sm-12 form-control" id="sql2" placeholder="Your Query"></textarea>
            </div>


<br>
 <span class='loader-sql2'></span>
 <span class='result-sql2'></span>
<button  class='sql2_btn btn btn-primary btn-sm' title='Submit'>Submit</button> 




</div></div>



<!-- end-->

        </div>
      

   <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>


      </div>


      </div>
    </div>
  </div>
</div>



<!-- table sql2 modal ends here -->











<!-- create database modal starts here -->


<div class="container">

  <div class="modal fade" id="myModal_table_db" role="dialog">
    <div class="modal-dialog modal-appear-center1" >
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 

      
 <button type="button" class="close btn btn-warning" data-dismiss="modal">Close</button>

      <h4 class="modal-title">Create New Database</h4>

        </div>
        <div class="modal-body">



<!-- start-->


<div class='row'>

<div class='col-sm-12'>


<div style='color:purple;font-size:20px;'>Create Mysql Database</div><br>




 <div class="form-group">
              <label>Enter Database Name</label>
              <input type='text' class="col-sm-12 form-control" id="create_database_name" placeholder="Enter Database Name" />
</div>
<br>

<style>
.r_css{
background:#ddd;
padding:10px;
height:40px;
border:none;
color:black;
border-radius:20%;


}


.r_css:hover{
background:orange;
color:black;

}

</style>
<br>
<label>Select Database Character Set and Collation Type</label><br>


<div class='row'>

<div class='col-sm-4 r_css'>
<input type="radio" name="db_collationx" value="utf8-utf8_general_ci"/>utf8(utf8_general_ci)
</div>

<div class='col-sm-4 r_css'>
<input type="radio" name="db_collationx" value="utf8-utf8_unicode_ci"/>utf8(utf8_unicode_ci)
</div>
<div class='col-sm-4 r_css'>
<input type="radio" name="db_collationx" value="utf8mb4-utf8mb4_bin"/>utf8mb4(utf8mb4_bin)
</div>
</div>


<div class='row'>

<div class='col-sm-4 r_css'>
<input type="radio" name="db_collationx" value="ascii-ascii_bin"/>ascii(ascii_bin)
</div>

<div class='col-sm-4 r_css'>
<input type="radio" name="db_collationx" value="binary-binary"/>binary(binary)
</div>
<div class='col-sm-4 r_css'>
<input type="radio" name="db_collationx" value="gbk-gbk_bin"/>gbk(gbk_bin)
</div>
</div>


<div class='row'>

<div class='col-sm-4 r_css'>
<input type="radio" name="db_collationx" value="gbk-gbk_chinese_ci"/>gbk(gbk_chinese_ci)
</div>

<div class='col-sm-4 r_css'>
<input type="radio" name="db_collationx" value="latin1-latin1_bin"/>latin1(latin1_bin)
</div>
<div class='col-sm-4 r_css'>
<input type="radio" name="db_collationx" value="utf8-utf8_bin"/>utf8(utf8_bin)
</div>
</div>





<div class='row'>

<div class='col-sm-6 r_css'>
<input type="radio" name="db_collationx" value="utf8mb4-utf8mb4_general_ci"/>utf8mb4(utf8mb4_general_ci)
</div>

<div class='col-sm-6 r_css'>
<input type="radio" name="db_collationx" value="utf8mb4-utf8mb4_unicode_ci"/>utf8mb4(utf8mb4_unicode_ci)
</div>

</div>



<br>
 <span class='loader-db'></span>
 <span class='result-db'></span>
<button  class='db_btn btn btn-primary btn-sm' title='Submit'>Submit</button> 




</div></div>



<!-- end-->

        </div>
      

   <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>


      </div>


      </div>
    </div>
  </div>
</div>



<!-- create Database modal ends here -->








<script>


// mysql backup db start



$(document).ready(function(){

$('.mysql_btn').click(function(){
//$(document).on( 'click', '.mysql_btn', function(){ 


var mysql_username = $('#mysql_username').val();
var mysql_password = $('#mysql_password').val();
var mysql_dbname = $('#mysql_dbname').val();
var mysql_hostname = $('#mysql_hostname').val();
var mysql_portno = $('#mysql_portno').val();
var bin_d = 'backup';

if(mysql_username==""){
alert('Please Enter Mysql Database Username');
return false;
}

/*
if(mysql_password==""){
alert('Please Enter Mysql Database Password');
return false;
}
*/

if(mysql_dbname==""){
alert('Please Enter Mysql Database Name');
return false;
}


if(mysql_hostname==""){
alert('Please Enter Mysql Database Hostname');
return false;
}

if(mysql_portno==""){
alert('Please Enter Mysql Database Port No.');
return false;
}


$(".loader-mysql").fadeIn(400).html('<div style="color:black;background:#ddd;padding:10px;"><img src="img/loader.gif">&nbsp; Mysql Database Backup in Progress..</div>');
var datasend = {mysql_username:mysql_username, mysql_password:mysql_password, mysql_dbname:mysql_dbname, mysql_hostname:mysql_hostname, mysql_portno:mysql_portno,bin_d:bin_d};
		$.ajax({
			
			type:'POST',
			url:'mysql_database_backup.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
$(".loader-mysql").hide();
$(".result-mysql").html(msg);

setTimeout(function(){ $("#mysx").html(''); }, 8000);
//reload  databases
load_mysql();


//alert(msg);

//strip all html elemnts using jquery
var html_stripped = jQuery(msg).text();
//alert(html_stripped);

//check occurrence of word (successfully) from backend output already html stripped.
var Frombackend = html_stripped;
var bcount = (Frombackend.match(/successfully/g) || []).length;
//alert(bcount);

if(bcount > 0){
alert('Mysql Database Backup Successfully');
//$('#mysql_username').val('');
//$('#mysql_password').val('');
//$('#mysql_dbname').val('');




//reload  databases
load_mysql();

}




}
			
});

                });


            });


// mysql backup db ends








// load mysql backup starts


$(document).ready(function(){


var mysql_db = 'mysql_db';

$(".loader-mysql2").fadeIn(400).html('<div style="color:black;background:#ccc;padding:10px;"><img src="img/loader.gif">&nbsp; Mysql Database Backup Loading..</div>');
var datasend = {mysql_db:mysql_db};
		$.ajax({
			
			type:'POST',
			url:'mysql_database_backup_load.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
$(".loader-mysql2").hide();
$(".result-mysql2").html(msg);

}
			
});

                });


        


// load mysql backup ends







// load mysql function starts


function load_mysql(){


var mysql_db = 'mysql_db';

$(".loader-mysql2").fadeIn(400).html('<div style="color:black;background:#ccc;padding:10px;"><img src="img/loader.gif">&nbsp; Mysql Database Backup Loading..</div>');
var datasend = {mysql_db:mysql_db};
		$.ajax({
			
			type:'POST',
			url:'mysql_database_backup_load.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
$(".loader-mysql2").hide();
$(".result-mysql2").html(msg);

}
			
});

                };


        


// load mysql function ends






// mysql backup migrate to openshift start



$(document).ready(function(){

//$('.mysql_import_btn').click(function(){
$(document).on( 'click', '.mysql_import_btn', function(){ 


var file_namex = $(this).data('file_name');
var id = $(this).data('file_id');
var database_sql2 = $('#database_sql2').val();



if(file_namex==""){
alert('DB File Name Cannot be empty');
return false;
}


if(database_sql2==""){
alert('Please Scroll Up and Select Openshift You want to Migrate/Import to');
return false;
}

//alert(file_namex);
//alert(database_sql2);
$(".loader-my_"+id).fadeIn(400).html('<div style="color:white;background:purple;padding:6px;"><img src="img/loader.gif">&nbsp; Migrating/Import to Openshift in Progress..</div>');
var datasend = {database_sql2:database_sql2, id:id, file_namex:file_namex};
		$.ajax({
			
			type:'POST',
			url:'mysql_database_migrate_openshift.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
$(".loader-my_"+id).hide();
$(".result-my_"+id).html(msg);
setTimeout(function(){ $("#importx_"+id).html(''); }, 5000);
$('#database_sql2').val('');

//reload list databases
list_db();


}
			
});

                });


            });


// mysql backup migrate to openshift ends









// mysql backup delete start



$(document).ready(function(){

//$('.mysql_delete_btn').click(function(){
$(document).on( 'click', '.mysql_delete_btn', function(){ 


var id = $(this).data('file_id');
var filename = $(this).data('filename');
if(id==""){
alert('DB File ID to Delete Cannot be empty');
return false;
}

//alert(filename);

// confirm start
 if(confirm("Are you sure you want to Delete this Database Backup" )){


$(".loader-my2_"+id).fadeIn(400).html('<div style="color:white;background:purple;padding:6px;"><img src="img/loader.gif">&nbsp; Deleting Backup in Progress..</div>');
var datasend = { id:id, filename:filename};
		$.ajax({
			
			type:'POST',
			url:'mysql_backup_delete.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
$(".loader-my2_"+id).hide();
$(".result-my2_"+id).html(msg);
//setTimeout(function(){ $("#importx2_"+id).html(''); }, 5000);


//strip all html elemnts using jquery
var html_stripped = jQuery(msg).text();
//alert(html_stripped);

//check occurrence of word (successfully) from backend output already html stripped.
var Frombackend = html_stripped;
var bcount = (Frombackend.match(/successfully/g) || []).length;
//alert(bcount);

if(bcount > 0){
//alert('Backup Deleted Successfully');


$(".recbackup_"+id).animate({ backgroundColor: "#fbc7c7" }, "fast").animate({ opacity: "hide" }, "slow");

}



}
			
});

}  // confirm ends

                });


            });


// mysql backup delete ends



</script>




<!-- Mysql Backup modal starts here -->


<div class="container">

  <div class="modal fade" id="myModal_mysql" role="dialog">
    <div class="modal-dialog modal-appear-center1" >
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 

      
 <button type="button" class="close btn btn-warning" data-dismiss="modal">Close</button>

      <h4 class="modal-title">Mysql Database Backup & Migration to Openshift Database</h4>

        </div>
        <div class="modal-body">



<!-- start-->


<div class='row'>

<div class='col-sm-12'>

<div style='color:red'>Information: To Backup your Mysql Database Backup & Migration to Openshift Database..Please Ensure that you have this application running
on the Server where Mysql is Installed. Ensure also the you have a write file access to a folder. This because Your Backup Database need to be store in a folder
we created for you before you can then migrate it to Openshift Mysql Cloud</div><br>



 <div class="form-group">
              <label>Enter Mysql Database UserName</label>
              <input type='text' class="col-sm-12 form-control" id="mysql_username" placeholder="Enter Mysql Database UserName" value=''>
            </div>


 <div class="form-group">
              <label>Enter Mysql Database Password <span style='color:red'>(If Your Database Does not have Password, Leave this Password input empty)</span></label>
              <input type='text' class="col-sm-12 form-control" id="mysql_password" placeholder="Enter Mysql Database Password" value=''>
            </div>


 <div class="form-group">
              <label>Enter Mysql Database Name</label>
              <input type='text' class="col-sm-12 form-control" id="mysql_dbname" placeholder="Enter Mysql Database Name" value="">
            </div>


 <div style='' class="form-group">
              <label>Enter Mysql Database Hostname Eg. (localhost, 127.0.0.1 etc)</label>
              <input type='text' class="col-sm-12 form-control" id="mysql_hostname" placeholder="Enter Mysql Database Hostname" value='localhost'>
            </div>


 <div style='' class="form-group">
              <label>Enter Mysql Database Port No Eg. (Default Port No. is 3306 )</label>
              <input type='text' class="col-sm-12 form-control" id="mysql_portno" placeholder="Enter Mysql Database Port No" value='3306'>
            </div>


<br><br>
 <span class='loader-mysql'></span>
 <span class='result-mysql'></span>
<button  class='mysql_btn btn btn-primary btn-sm' title='Backup Now'>Backup Now</button> 

<br><br>

<div class='loader-mysql2'></div>
 <div class='result-mysql2'></div>


</div></div>



<!-- end-->

        </div>
      

   <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>


      </div>


      </div>
    </div>
  </div>
</div>



<!-- mysql Backup modal ends here -->


















<script>
$(function () {
$('.simport_btnx').click(function () {
		var database_sql3x = $('#database_sql3x').val();
                    var file_fname = $('#file_content').val();

// start if validate
if(file_fname==""){
alert('please Select Database SQL File to Upload');
}


else if(database_sql3x==""){
alert('please Select Mysql Cloud Database to Import To..');
}

else{

var fname=  $('#file_content').val();
var ext = fname.split('.').pop();
//alert(ext);

// add double quotes around the variables
var fileExtention_quotes = ext;
fileExtention_quotes = "'"+fileExtention_quotes+"'";

 var allowedtypes = ["sql","SQL"];
    if(allowedtypes.indexOf(ext) !== -1){
//alert('Good this is a valid SQL File');
}else{
alert("Please Upload a Valid Database SQL File. Allowed Video Formats: .sql or .SQL ");
return false;
    }


          var form_data = new FormData();
          form_data.append('file_content', $('#file_content')[0].files[0]);
          form_data.append('file_fname', file_fname);
          form_data.append('database_sql3x', database_sql3x);
        
                    $('.upload_progress').css('width', '0');
                    $('#btn').attr('disabled', 'disabled');
					
                    $('.loader-simportx').fadeIn(400).html('<br><div class="well" style="color:black"><img src="img/ajax-loader.gif">&nbsp; Please Wait, Uploading SQL File to Temporal Directory..</div>');
                    $.ajax({
                        url: 'sql_import.php',
                        data: form_data,
                        processData: false,
                        contentType: false,
                        ache: false,
                        type: 'POST',
                        xhr: function () {
                      //var xhr = new window.XMLHttpRequest();
                            var xhr = $.ajaxSettings.xhr();
                            xhr.upload.addEventListener("progress", function (event) {
                                var upload_percent = 0;
                                var upload_position = event.loaded;
                                var upload_total  = event.total;

                                if (event.lengthComputable) {
                                    var upload_percent = upload_position / upload_total;
                                    upload_percent = parseInt(upload_percent * 100);
                                  //upload_percent = Math.ceil(upload_position / upload_total * 100);
                                    $('.upload_progress').css('width', upload_percent + '%');
                                    $('.upload_progress').text(upload_percent + '%');
                                }
                            }, false);
                            return xhr;
                        },
                        success: function (msg) {
                                $('#box').val('');
				$('.loader-simportx').hide();
				$('.result-simportx').html(msg);
setTimeout(function(){ $('#importx33c').html(''); }, 10000);
			
//strip all html elemnts using jquery
var html_stripped = jQuery(msg).text();
//alert(html_stripped);

//check occurrence of word (successfully) from backend output already html stripped.
var Frombackend = html_stripped;
var bcount = (Frombackend.match(/successfully/g) || []).length;
//alert(bcount);

if(bcount > 0){
$('#file_fname').val('');
$('#database_sql3x').val('');

//reload list databases
list_db();

}

                        }
                    });
} // end if validate




                });
            });

</script>

<style>
.upload_progress{
padding:10px;
background:green;
color:white;
cursor:pointer;
min-width:30px;
}

#imageupload_preview
{
max-height:200px;
max-width:200px;
}
</style>








<!-- SQL File Imports here -->


<div class="container">

  <div class="modal fade" id="myModal_sql_import" role="dialog">
    <div class="modal-dialog modal-appear-center1" >
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 

      
 <button type="button" class="close btn btn-warning" data-dismiss="modal">Close</button>

      <h4 class="modal-title">SQL Database File Imports to Openshift Mysql Cloud Database</h4>

        </div>
        <div class="modal-body">



<!-- start-->


<div class='row'>

<div class='col-sm-12'>

<div style='color:purple'><b>Import Your Database Sql File to Openshift Mysql Cloud  Database</b></div><br>

<div style='color:red'>To Import Sql Files to Openshift Mysql. Ensure that you have a write file access to a folder. This because Your Imported SQL need to be store in a folder
we created for you before you can then migrate it to Openshift  Mysql Cloud</div><br>



<div class="form-group">
<label style="">Select Database SQL File to Upload: </label>
<input style="background:#c1c1c1;" class="col-sm-12 form-control" type="file" id="file_content" name="file_content" />
</div><br>
<br>


<?php

include('data6rst.php');
$sqlz3 = "SHOW DATABASES";
$statementz3 = $db->prepare($sqlz3);
$statementz3->execute();
$database_namesxz3 = $statementz3->fetchAll(PDO::FETCH_NUM);
$database_countz3 = $statementz3->rowCount();
if($database_countz3 ==0){
echo "<div style='background:red;color:white;padding:6px;border:none'>You Do not Have any Database Yet in Your Openshift  Mysql Instance. Try Create One</div>";
}
?>


 <div class="form-group">
              <label>Select Openshift  Mysql Database You want to Migrate/Import To: </label>
             <select name="database_sql3x" id="database_sql3x" class="col-sm-12 form-control">
    <option value="">--Select Openshift  Mysql Database--</option>';

<?php
//Loop through our database names.
foreach($database_namesxz3 as $dbnamesxz3){

    $list_dbz3 = $dbnamesxz3[0];


?>
    <option value="<?php echo $list_dbz3; ?>" ><?php echo $list_dbz3; ?> </option>
   <?php
    }
    ?>
</select></div><br>








<br><br>
 <span class='loader-simportx'></span>
 <span class='result-simportx'></span>
<button  class='simport_btnx btn btn-primary btn-sm' title='Import Database SQL Files to Openshift  Mysql'>Import Now</button> 



</div></div>



<!-- end-->

        </div>
      

   <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>


      </div>


      </div>
    </div>
  </div>
</div>



<!-- sql file imports modal ends here -->








<script>


// Openshift  Mysql Database Backup start



$(document).ready(function(){

$('.openshift_backup_btn').click(function(){
//$(document).on( 'click', '.openshift_backup_btn', function(){ 


var database_sql3xa = $('#database_sql3xa').val();

if(database_sql3xa==""){
alert('Please Select Openshift  Mysql to Backup');
return false;
}



// confirm start
 if(confirm("Are you sure you want to Backup this Openshift  Mysql Database: "+database_sql3xa)){


$('.loader-openshift_backup').fadeIn(400).html('<div style="color:white;background:purple;padding:6px;"><img src="img/loader.gif">&nbsp; Openshift  Mysql Cloud Database Backup in Progress..</div>');
var datasend = { database_sql3xa:database_sql3xa};
		$.ajax({
			
			type:'POST',
			url:'db_database_backup.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
$('.loader-openshift_backup').hide();
$('.result-openshift_backup').html(msg);
setTimeout(function(){ $("#tibsx").html(''); }, 5000);


//strip all html elemnts using jquery
var html_stripped = jQuery(msg).text();
//alert(html_stripped);

//check occurrence of word (successfully) from backend output already html stripped.
var Frombackend = html_stripped;
var bcount = (Frombackend.match(/successfully/g) || []).length;
//alert(bcount);

if(bcount > 0){
alert('Openshift  Mysql Backup  Successfully');
openshift_callx();
}



}
			
});

}  // confirm ends

                });


            });


// Openshift  Mysql Database Backup ends










// Openshift  Mysql backup delete start



$(document).ready(function(){

//$('.openshift_delete_btn').click(function(){
$(document).on( 'click', '.openshift_delete_btn', function(){ 


var id = $(this).data('file_id');
var filename = $(this).data('filename');
if(id==""){
alert('DB File ID to Delete Cannot be empty');
return false;
}

//alert(filename);

// confirm start
 if(confirm("Are you sure you want to Delete this Database Backup" )){


$(".loader-openshiftdel_"+id).fadeIn(400).html('<div style="color:white;background:purple;padding:6px;"><img src="img/loader.gif">&nbsp; Deleting Openshift  Mysql Backup in Progress..</div>');
var datasend = { id:id, filename:filename};
		$.ajax({
			
			type:'POST',
			url:'db_backup_delete.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
$(".loader-openshiftdel_"+id).hide();
$(".result-openshiftdel_"+id).html(msg);
//setTimeout(function(){ $("#importx2_"+id).html(''); }, 5000);


//strip all html elemnts using jquery
var html_stripped = jQuery(msg).text();
//alert(html_stripped);

//check occurrence of word (successfully) from backend output already html stripped.
var Frombackend = html_stripped;
var bcount = (Frombackend.match(/successfully/g) || []).length;
//alert(bcount);

if(bcount > 0){
//alert('Backup Deleted Successfully');


$(".recbackupopenshiftdel_"+id).animate({ backgroundColor: "#fbc7c7" }, "fast").animate({ opacity: "hide" }, "slow");

}



}
			
});

}  // confirm ends

                });


            });


// Openshift  Mysql backup delete ends








// load Openshift  Mysql backup starts


$(document).ready(function(){


var ti_db = 'ti_db';

$(".loader-openshift2").fadeIn(400).html('<div style="color:black;background:#ccc;padding:10px;"><img src="img/loader.gif">&nbsp; Openshift  Mysql Database Backup Loading..</div>');
var datasend = {ti_db:ti_db};
		$.ajax({
			
			type:'POST',
			url:'db_database_backup_load.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
$(".loader-openshift2").hide();
$(".result-openshift2").html(msg);

}
			
});

                });


        


// load Openshift  Mysql backup ends









// load Openshift  Mysql backup function starts


function openshift_callx(){


var ti_db = 'openshift';

$(".loader-openshift2").fadeIn(400).html('<div style="color:black;background:#ccc;padding:10px;"><img src="img/loader.gif">&nbsp; Openshift  Mysql  Database Backup Loading..</div>');
var datasend = {ti_db:ti_db};
		$.ajax({
			
			type:'POST',
			url:'db_database_backup_load.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
$(".loader-openshift2").hide();
$(".result-openshift2").html(msg);

}
			
});

                };


        


// load Openshift  Mysql backup function ends



</script>









<!-- Openshift  Mysql Backup start -->


<div class="container">

  <div class="modal fade" id="myModal_mysql_backup" role="dialog">
    <div class="modal-dialog modal-appear-center1" >
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 

      
 <button type="button" class="close btn btn-warning" data-dismiss="modal">Close</button>

      <h4 class="modal-title">Openshift  Mysql Backup & Download System</h4>

        </div>
        <div class="modal-body">



<!-- start-->


<div class='row'>

<div class='col-sm-12'>

<div style='color:purple'><b>Backup & Download Your Openshift  Mysql Cloud  Database</b></div><br>
<div style='color:red'>To Backup and Download Openshift  Mysql Cloud Database . Ensure that you have a write file access to a folder. This because Your Backup Openshift  Mysql SQL File need to be store in a folder
we created for you before you can Download It</div><br>



<?php

//include('data6rst.php');
$sqlz3a = "SHOW DATABASES";
$statementz3a = $db->prepare($sqlz3a);
$statementz3a->execute();
$database_namesxz3a = $statementz3a->fetchAll(PDO::FETCH_NUM);
$database_countz3a = $statementz3a->rowCount();
if($database_countz3a ==0){
echo "<div style='background:red;color:white;padding:6px;border:none'>You Do not Have any Database Yet in Your Openshift  Mysql Instance. Try Create One</div>";
}
?>


 <div class="form-group">
              <label>Select Openshift  Mysql Database You want to Backup and Download: </label>
             <select name="database_sql3xa" id="database_sql3xa" class="col-sm-12 form-control">
    <option value="">--Select Openshift  Mysql Database--</option>';

<?php
//Loop through our database names.
foreach($database_namesxz3a as $dbnamesxz3a){

    $list_dbz3a = $dbnamesxz3a[0];


?>
    <option value="<?php echo $list_dbz3a; ?>" ><?php echo $list_dbz3a; ?> </option>
   <?php
    }
    ?>
</select></div><br>








<br><br>
 <span class='loader-openshift_backup'></span>
 <span class='result-openshift_backup'></span>
<button  class='openshift_backup_btn btn btn-primary btn-sm' title='Backup Mysql Database'>Backup Mysql Database</button> 

<br><br>

 <span class='loader-openshift2'></span>
 <span class='result-openshift2'></span>


</div></div>



<!-- end-->

        </div>
      

   <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>


      </div>


      </div>
    </div>
  </div>
</div>



<!-- Openshift  Mysql backup ends here -->





<script>



// create users Starts



$(document).ready(function(){

$('.openshift_cusers_btn').click(function(){
//$(document).on( 'click', '.openshift_cusers_btn', function(){ 

        var cname = $('#cname').val();
        var cemail = $('#cemail').val();


if(cname==""){
alert('Users fullName Cannot be empty');
return false;
}

if(cemail==""){
alert('Users Email Cannot be empty');
return false;
}



 var privileges = [];  
           $('.priv').each(function(){  
                if($(this).is(":checked"))  
                {  
                     privileges.push($(this).val());  
                }  
           });  
           privileges = privileges.toString();  
alert('Selected Privileges: ' +privileges);


if(privileges==""){
alert('Please Select atleast 1 Privilege');
return false;
}



$(".loader-cusers").fadeIn(400).html('<div style="color:black;background:#ccc;padding:6px;"><img src="img/loader.gif">&nbsp; Creating Users and Assign Privileges. coming soon....</div>');
var datasend = { cname:cname, cemail:cemail, privileges:privileges};


return false;

		$.ajax({
			
			type:'POST',
			url:'create_users.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
$(".loader-cusers").hide();
$(".result-cusers").html(msg);
//setTimeout(function(){ $("#cusers").html(''); }, 5000);


//strip all html elemnts using jquery
var html_stripped = jQuery(msg).text();
//alert(html_stripped);

//check occurrence of word (successfully) from backend output already html stripped.
var Frombackend = html_stripped;
var bcount = (Frombackend.match(/successfully/g) || []).length;
//alert(bcount);

if(bcount > 0){
//alert('Users Created Successfully');

}



}
			
});

                });


            });


// Create Users ends

</script>


<!-- Openshift  Mysql Create Users start -->


<div class="container">

  <div class="modal fade" id="myModal_users" role="dialog">
    <div class="modal-dialog modal-appear-center1" >
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 

      
 <button type="button" class="close btn btn-warning" data-dismiss="modal">Close</button>

      <h4 class="modal-title">Openshift  Mysql Database Users & Privileges</h4>

        </div>
        <div class="modal-body">



<!-- start-->
<div class='row'>


<div class='col-sm-1'>
</div>

<div class='col-sm-11'>
<h3 style='color:red'>Coming Soon... Creating Users and Assigning them Openshift  Mysql Cloud Database Privileges.  ---- Is Still in Progress</h3>

This Privileges will enable Admin to control what Database and Table its User/Team can Access.  For Instance, Admin can grant <b>CREATE, DELETE, UPDATE etc.</b> 
any Table privilege to User <b>Fred</b>. Admin can grant any permission on any table Databases etc to its users. Eg. Any User with <b>CREATE</b> 
can create table, create database etc.<br><br>

This System will also have a <b>notification and audit log</b> that notifies admin about all database activities of each user.<br><br>

<span style='color:red'>Upon each user creation, Application will send them Email with link and information on how to signup and much more</span>

<br><br>


 <div style='' class="form-group">
              <label>Enter Fullname</label>
              <input type='text' class="col-sm-12 form-control" id="cname" placeholder="Enter Fullname">
            </div>
<br>

 <div style='' class="form-group">
              <label>Enter Email</label>
              <input type='text' class="col-sm-12 form-control" id="cemail" placeholder="Enter Email Address">
            </div>

<br>

 <div style='' class="form-group">
              <label>Assign Privileges</label><br><br>





  
<input type="checkbox" class="priv" value="SELECT" />SELECT <br />  
<input type="checkbox" class="priv" value="INSERT" />INSERT <br /> 
<input type="checkbox" class="priv" value="UPDATE" />UPDATE <br /> 
<input type="checkbox" class="priv" value="DELETE" />DELETE <br /> 
<input type="checkbox" class="priv" value="CREATE" />CREATE <br />
<input type="checkbox" class="priv" value="DROP" />DROP <br />  
<input type="checkbox" class="priv" value="ALTER" />ALTER <br /> 
<input type="checkbox" class="priv" value="TRIGGER" />TRIGGER <br /> 
<input type="checkbox" class="priv" value="SHOW DATABASES " />SHOW DATABASES  <br /> 

                     
                      
         
            </div>

<br><br>
 <span class='loader-cusers'></span>
 <span class='result-cusers'></span>
<button  class='openshift_cusers_btn btn btn-primary btn-sm' title='Create Now'>Create</button> 


</div>
</div>

<!-- end-->

        </div>
      

   <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>


      </div>


      </div>
    </div>
  </div>
</div>



<!-- Openshift  Mysql users ends here -->











<!-- Openshift  Mysql amazon s3 start -->


<div class="container">

  <div class="modal fade" id="myModal_amazons3" role="dialog">
    <div class="modal-dialog modal-appear-center1" >
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 

      
 <button type="button" class="close btn btn-warning" data-dismiss="modal">Close</button>

      <h4 class="modal-title">Openshift  Mysql File Manager with Amazon S3</h4>

        </div>
        <div class="modal-body">



<!-- start-->
<div class='row'>


<div class='col-sm-1'>
</div>

<div class='col-sm-11'>
<h3 style='color:red'>Coming Soon----</h3>
<br>

Admin can create Amazon S3 Objects Buckets to Backup, Exports and Import SQL Files to and from Openshift  Mysql Cloud Database System.......


<br><br>





</div>
</div>

<!-- end-->

        </div>
      

   <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>


      </div>


      </div>
    </div>
  </div>
</div>



<!-- Openshift  Mysql amazon s3 ends here -->







<!--start right column all-->
    <div class="right-column-all">

<br><br><br><br>



<br>


<h3>Welcome  <b><?php echo $session_fullname; ?></b></h3>






<style>
.report_cssx{
background:#ddd;
padding:10px;
height:70px;
border:none;
color:black;
border-radius:20%;
font-size:16px;
text-align:center;


}


.report_cssx:hover{
background:orange;
color:black;

}

</style>

<div class='well' style=''>

<center><span style='color:red;'>2 Major Openshift  Mysql Components Coming Soon..... Click Each to View. Some of
 this Components are buit half way...  and many more finishing touches</span></center>
 <span class="">
<a title='Users Privileges'  data-toggle='modal' data-target='#myModal_users' style="color:white;font-size:14px;">
<button class="category_post1"><b>Users & Privileges</b></button></a>
</span>

 <span class="">
<a title='Openshift  Mysql SQL File Manager with Amazon S3'  data-toggle='modal' data-target='#myModal_amazons3' style="color:white;font-size:14px;">
<button class="category_post1"><b>Openshift  Mysql SQL File Manager with Amazon S3</b></button></a>
</span>


</div><br>







<!--start coding right-->    


<div class='loader-tablet  center_css well'><h2>Openshift  Mysql Database Play Ground</h2></div>
<div class='result-tablet'></div>

<!--end coding right-->    














<div>
  <!--end right column all-->    













   
</body>
</html>























