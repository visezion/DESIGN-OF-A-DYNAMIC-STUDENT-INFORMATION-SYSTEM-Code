<?Php

include "include/session.php";
 // We must have db connection to change the status of plus_login
include "config.php"; // database connection details stored here

//$q=mysql_query("update plus_login set status='OFF' where id='$_SESSION[id]'");

@$count=$dbo->prepare("update plus_login set status='OFF' where userid='$_SESSION[userid]'");
@$count->execute();

session_unset();
session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="">
        <div class="main-wrapper">

            <div class="">
                <div class="row">
 <h1 align="center">Student Information Management System</h1>
                    <div class="col-lg-8 visible-lg-block">

<section class="section">
                            <div class="row mt-40">
                                <div class="col-md-10 col-md-offset-1 pt-50">

                                    <div class="row mt-30 ">
                                        <div class="col-md-11">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">
                                                        <h4>Important Information...</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-20">

                                                    

                                                    Login with your Matric Number and password. Once you are logged in, pay close attention to any information appearing in a green box.
													<a href="signup.php" colour='green'><i><u>Click Here</u></i></a> to create an account if you are a fresh student. However, 
													if you are not a fresh student, and you do not have an account, visit the Admission Office first for profiling and then <a href="signup.php" colour='green'><i><u>Click Here.</u></i></a>

                                            

                                                 
                                                </div>

												<div class="panel-body p-20">

                                                    
<!--
                                                    Login with your Matric Number and password. Once you are logged in, pay close attention to any information appearing in a green box.
													<a href="signup.php" colour='green'><i><u>Click Here</u></i></a> to create an account if you are a fresh student. However, 
													if you are not a fresh student, and you do not have an account, visit t
											         he Admission Office first for profiling and then <a href="signup.php" colour='green'><i><u>Click Here.</u></i></a>

  --> <br>
  <br>                                         
 <div style="color: green"><p>For Complaints<br>
                                                        Call +2348109657635, +2349094507494 <br>
                                                        OR send an email to support@lautech.edu.ng</p></div>
                                                 
                                                </div>
                                            </div>
                                            <!-- /.panel -->
                                      
                                        </div>
                                        <!-- /.col-md-11 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>
                    </div>
                       
                    <div class="col-lg-4">
                        <section class="section">
                            <div class="row mt-40">
                                <div class="col-md-10 col-md-offset-0 pt-50">

                                    <div class="row mt-30 ">
                                        <div class="col-md-11">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">
                                                        <h4>Student Login</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-20">

                                                    <div class="section-title">
                                                        <p class="sub-title">Input Correct details!</p>
                                                    </div>

							  <div> Demo login details <div style="color: green"><p>Matric no = 121360  
							  <br>Password = 123456<br></div>
                                                    <form class="form-horizontal" method="post" action='loginck.php'>
                                                    	<div class="form-group">
                                                    		<label for="inputEmail3" class="col-sm-3 control-label">Matric NO   </label>
                                                    		<div class="col-sm-7">
                                                    			<input type="text" name="userid" class="form-control" id="inputEmail3" placeholder="Matric No">
                                                    		</div>
                                                    	</div>
                                                    	<div class="form-group">
                                                    		<label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                                                    		<div class="col-sm-7">
                                                    			<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                    		</div>
                                                    	</div>
														
                                                        <div class="form-group mt-20">
                                                    		<div class="col-sm-offset-) col-sm-10">
																
                                                    			<button type="submit" name="login" class="btn btn-success btn-labeled pull-right">Sign in<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    		</div>
                                                    	</div>
														 <div class="section-title">
															<p class="sub-title"><a href=forgot-password.php>Forget Password ?</a></p>
														</div>
                                                     <!--   <div style="color: red"><p>To secure your account,log out once you are done!</p>
                                                        </div>
                                                        <div style="color: green"><p>For Complaints<br>
                                                        Call +2348109657635, +2349094507494 <br>
                                                        OR send an email to support@lautech.edu.ng</p></div>
                                                   --> </form>

                                            

                                                 
                                                </div>
                                            </div>
                                            <!-- /.panel -->
                                           <p class="text-muted text-center"><small>Copyright © <a href="http://facebook.com/createnetworksng">Gureje Olakunle</a> 2020</small></p>
                                        </div>
                                        <!-- /.col-md-11 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>

                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
 
    </body>
</html>
