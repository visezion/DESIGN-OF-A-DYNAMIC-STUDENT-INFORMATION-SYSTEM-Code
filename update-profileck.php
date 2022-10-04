<?Php
//error_reporting(0);
include "include/session.php";

include "includes/config.php";
//////////////////////////////

/*
while (list ($key,$val) = each ($_POST)) {
$$key = $val;
}
*/

?>
<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    	<meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Student Result Management System | Dashboard</title>
        <link rel='stylesheet' href='css/bootstrap.min.css' media='screen' >
        <link rel='stylesheet' href='css/font-awesome.min.css' media='screen' >
        <link rel='stylesheet' href='css/animate-css/animate.min.css' media='screen' >
        <link rel='stylesheet' href='css/lobipanel/lobipanel.min.css' media='screen' >
        <link rel='stylesheet' href='css/toastr/toastr.min.css' media='screen' >
        <link rel='stylesheet' href='css/icheck/skins/line/blue.css' >
        <link rel='stylesheet' href='css/icheck/skins/line/red.css' >
        <link rel='stylesheet' href='css/icheck/skins/line/green.css' >
        <link rel='stylesheet' href='css/main.css' media='screen' >
        <script src='js/modernizr/modernizr.min.js'></script>
    </head>

<body>

<body class='top-navbar-fixed'>
        <div class='main-wrapper'>
              <?php include('includes/topbar.php');?>
            <div class='content-wrapper'>
                <div class='content-container'>

                    <?php include('includes/leftbar.php');?>  

                    <div class='main-page'>
                         <div class='container-fluid'>
                            <div class='row page-title-div'>
                                <div class='col-md-6'>
                                    <h2 class='title'>Update Profile</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class='row breadcrumb-div'>
                                <div class='col-md-6'>
                                    <ul class='breadcrumb'>
                                        <li><a href='st_dashboard.php'><i class='fa fa-home'></i> Home</a></li>
                                        
                                
                                        <li class='active'>Update Profile</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                       
	
		
<div class='row'>
                                    <div class='col-md-12'>
                                        <div class='panel'>
                                            
                                            <div class='panel-body'>
											
											
											
											
											
											
											
											
											
									
<?Php
//require "check.php";

$todo=$_POST['todo'];
$name=$_POST['name'];
$email=$_POST['email'];
$sex=$_POST['sex'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$soo=$_POST['soo'];
$maritaltstatus=$_POST['maritaltstatus'];
$contactaddress=$_POST['contactaddress'];
// check the login details of the user and stop execution if not logged in

if(isset($todo) and $todo=="update-profile"){

// set the flags for validation and messages
$status = "OK";
$msg="";

// if name is less than 5 char then status is not ok
if (strlen($name) < 5) {
$msg=$msg."Your name  must be more than 5 char length<BR>";
$status= "NOTOK";}	

// you can add email validation here if required. 
// The code for email validation is available at www.plus2net.com

if($status<>"OK"){ // if validation failed
echo "<font face='Verdana' size='2' color=red>$msg</font><br><input type='button' value='Retry' onClick='history.go(-1)'>";
}else{ // if all validations are passed.
/////////////////////////////////////////////////////////
$sql=$dbh->prepare("update plus_signup set name=:name,email=:email,sex=:sex,phone=:phone,dob=:dob,soo=:soo,maritaltstatus=:maritaltstatus,contactaddress=:contactaddress where userid='$_SESSION[userid]'");
$sql->bindParam(':name',$name,PDO::PARAM_STR, 25);
$sql->bindParam(':email',$email,PDO::PARAM_STR, 15);
$sql->bindParam(':sex',$sex,PDO::PARAM_STR, 7);
$sql->bindParam(':phone',$phone,PDO::PARAM_STR);
$sql->bindParam(':dob',$dob,PDO::PARAM_STR);
$sql->bindParam(':soo',$soo,PDO::PARAM_STR);
$sql->bindParam(':maritaltstatus',$maritaltstatus,PDO::PARAM_STR);
$sql->bindParam(':contactaddress',$contactaddress,PDO::PARAM_STR);
if($sql->execute()){
echo "<font face='Verdana' size='2' color=green>You have successfully updated your profile<br></font>";
}// End of if profile is ok 
else{
print_r($sql->errorInfo()); // if any error is there it will be posted
$msg=" <font face='Verdana' size='2' color=red>There is some problem in updating your profile. Please contact site admin<br></font>";
}// end of if else if database updation failed
}// end of if else for satus<> ok
echo $msg;
}// end of todo to check form inputs
//require "bottom.php";
?>
 
</body>
</html>
