<?php
include "include/session.php";

include "config.php";


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Login</title>
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
 <h2 align="center">Forget Password</h2>
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
													if you are not a fresh student, and you do not have an account, visit t
											         he Admission Office first for profiling and then <a href="signup.php" colour='green'><i><u>Click Here.</u></i></a>
                                            

                                                 
                                                </div>
												<div class="panel-body p-20">

                                                    
<!--
													Login with your Matric Number and password. Once you are logged in, pay close attention to any information appearing in a green box.
													<a href="signup.php" colour='green'><i><u>Click Here</u></i></a> to create an account if you are a fresh student. However, 
													if you are not a fresh student, and you do not have an account, visit t
											         he Admission Office first for profiling and then <a href="signup.php" colour='green'><i><u>Click Here.</u></i></a>
  -->                                          

                                                 
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
                                                        <h4>Forget Password</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-20">

                                                    <div class="section-title">
                                                        <p class="sub-title">Please Enter your Email...</p>
                                                    </div>

                                                    <form class="form-horizontal" method="post" action='forgot-passwordck.php'>
                                                    	<div class="form-group">
                                                    		<label for="inputEmail3" class="col-sm-3 control-label">Email   </label>
                                                    		<div class="col-sm-8	">
                                                    			<input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Enter Email">
                                                    		</div>
                                                    	</div>
                                                    	
														
                                                        <div class="form-group mt-20">
                                                    		<div class="col-sm-offset-1 col-sm-10">
																
                                                    			<button type="submit" name="login" class="btn btn-success btn-labeled pull-right">Send<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    		</div>
                                                    	</div>
														 <div class="section-title">
															<p class="sub-title"><a href=signup.php>New Member Signup</a></p>
														</div>
                                                    </form>

                                            

                                                 
                                                </div>
                                            </div>
                                            <!-- /.panel -->
                                           <p class="text-muted text-center"><small>Copyright © <a href="http://facebook.com/createnetworksng">Create Vicezion Technologies</a> 2018</small></p>
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

<?Php
