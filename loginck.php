<?Php

include "include/session.php";
include "config.php"; // database connection details stored here
//////////////////////////////

$userid=$_POST['userid'];
$password=$_POST['password'];
?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Loging Messages</title>
        <link rel="stylesheet" href="css/bootstrap.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
        <script type="text/javascript">
		function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>
	 <style>
	.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
<?php //include('check.php');?>
    </head>
	
    <body class="top-navbar-fixed">
        <div class="main-wrapper">
            <?php //include('includes/topbar.php');?>   
            <div class="content-wrapper">
                <div class="content-container">
<?php //include('i.ncludes/leftbar.php');?>                   
 <!-- /.left-sidebar -->
 
                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Login</h2>
                                </div>
                                
                            </div>
                            <!-- /.row -->
                           
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">

                             

                              

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Admin Change Password</h5>
                                                </div>
                                            </div>

<body>

<div class="alert alert-danger left-icon-alert" role="alert">
 <strong></strong>
<body>
<?Php
//$password=md5($password); // Encrypt the password before comparing
//// Checking userid and password //////
$msg='';
$status='OK';
if(!isset($userid) or strlen($userid) <3){
$msg=$msg."User id should be =3 or more than 3 char length<BR>";
$status= "NOTOK";}					
if ( strlen($password) < 3 ){
$msg=$msg."Password must be more than 3 char legth<BR>";
$status= "NOTOK";}					

if($status<>"OK"){ 
echo "<font face='Verdana' size='2' color=red>$msg</font><br><input type='button' value='Retry' onClick='history.go(-1)'>";
exit;
}

//////////////////////

$count=$dbo->prepare("select password,mem_id,userid from plus_signup where userid=:userid");
$count->bindParam(":userid",$userid,PDO::PARAM_STR);
if($count->execute()){
$no=$count->rowCount();
if($no <> 1 ) {
$msg=" Userid does not exist please try again ... ";
}else { 
$row = $count->fetch(PDO::FETCH_OBJ);
if($row->password==md5($password)){
echo " Inside ";
// Start session n redirect to last page
$_SESSION['id']=session_id();
$_SESSION['userid']=$row->userid;
$_SESSION['mem_id']=$row->mem_id;
//echo " Inside session  ". $_SESSION['userid'];
$msg=" welcome $_SESSION[userid] loging successfully , please wait ... ";
echo $msg;
echo "<script language='JavaScript' type='text/JavaScript'>
<!--
window.location='st_dashboard.php';
//-->
</script>
";

} 
else
{
$msg = " Login failed, tray again ... <br><INPUT TYPE='button' VALUE='Back' onClick='history.go(-1);'>";
} // end of if else for matching password
} // end of if elase for matching number of records <>1 
}else{
$msg = " Login failed, tray again ... <br><INPUT TYPE='button' VALUE='Back' onClick='history.go(-1);'>";
} // 
echo $msg;
?>

</body>

</html>
