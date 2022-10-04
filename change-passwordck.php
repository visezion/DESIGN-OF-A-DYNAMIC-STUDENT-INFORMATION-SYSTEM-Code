<?Php

include "include/session.php";

include "includes/config.php";
?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin change password</title>
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
<?php include('check.php');?>
    </head>
	
    <body class="top-navbar-fixed">
        <div class="main-wrapper">
            <?php include('includes/topbar.php');?>   
            <div class="content-wrapper">
                <div class="content-container">
<?php include('includes/leftbar.php');?>                   
 <!-- /.left-sidebar -->
 
                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Admin Change Password</h2>
                                </div>
                                
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
            						
            							<li class="active">Admin change password</li>
            						</ul>
                                </div>
                               
                            </div>
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

<?Php
// check the login details of the user and stop execution if not logged in
///////Collect the form data /////
$todo=$_POST['todo'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$old_password=$_POST['old_password'];
/////////////////////////

if(isset($todo) and $todo=="change-password"){
$status = "OK";
$msg="";

			
$count=$dbo->prepare("select password from plus_signup where userid=:userid");
$count->bindParam(":userid",$_SESSION['userid'],PDO::PARAM_STR, 15);
$count->execute();
$row = $count->fetch(PDO::FETCH_OBJ);




if($row->password<>md5($old_password)){
$msg=$msg."Your old password  is not matching as per our record.<BR>";
$status= "NOTOK";
}					

if ( strlen($password) < 3 or strlen($password) > 8 ){
$msg=$msg."Password must be more than 3 char legth and maximum 8 char lenght<BR>";
$status= "NOTOK";}					

if ( $password <> $password2 ){
$msg=$msg."Both passwords are not matching<BR>";
$status= "NOTOK";}					



if($status<>"OK"){ 
echo "<font face='Verdana' size='2' color=red>$msg</font><br><center><input type='button' value='Retry' onClick='history.go(-1)'></center>";
}else{ // if all validations are passed.
$password=md5($password); // Encrypt the password before storing
//if(mysql_query("update plus_signup set password='$password' where userid='$_SESSION[userid]'")){
$sql=$dbo->prepare("update plus_signup set password=:password where userid='$_SESSION[userid]'");
$sql->bindParam(':password',$password,PDO::PARAM_STR, 32);
if($sql->execute()){
	
	?>
</div>
<?php
echo "<center class='alert alert-success left-icon-alert'>Thanks <br> Your password changed successfully. Please keep changing your password for better security</font></center>";
}else{echo "<font face='Verdana' size='2' color=red><center>Sorry <br> Failed to change password Contact Site Admin</font></center>";
} // end of if else if updation of password is successful
} // end of if else if status <>OK
} // end of if else todo
require "bottom.php";

?>
</div>
</div>
</body>

</html>
