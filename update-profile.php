<?Php
//***************************************
// This is downloaded from www.plus2net.com //
/// You can distribute this code with the link to www.plus2net.com ///
//  Please don't  remove the link to www.plus2net.com ///
// This is for your learning only not for commercial use. ///////
//The author is not responsible for any type of loss or problem or damage on using this script.//
/// You can use it at your own risk. /////
//*****************************************
include "include/session.php";
include "includes/config.php";
//////////////////////////////


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
                       
							
<?Php
// check the login details of the user and stop execution if not logged in
//require "check.php";

// If member has logged in then below script will be execuated. 
// let us collect all data of the member 
$count=$dbh->prepare("select * from plus_signup where userid='$_SESSION[userid]'");
if(!($count->execute())){
echo "Database Problem ";
exit;
}else{
$row = $count->fetch(PDO::FETCH_OBJ);
}

//Let us set the period button based on the data of the sex field
// You can see male button is checked if it is set to male
// else it is  set to female  
if($row->sex == "male"){
$ckb="<input type='radio' value=male checked name='sex' checked>Male 
<input type='radio' value=female  name='sex'>Female";}
else {$ckb="<input type='radio' value=male checked name='sex' >Male 
<input type='radio' value=female  name='sex' checked>Female";}

// One form with a hidden field is prepared with default values taken from field. 
echo "
		
<div class='row'>
                                    <div class='col-md-12'>
                                        <div class='panel'>
                                            <div class='panel-heading'>
                                                <div class='panel-title'>
                                                    <h5>Fill the Student info</h5>
                                                </div>
                                            </div>
                                            <div class='panel-body'>
											
												<form class='form-horizontal' action='update-profileck.php' method=post>
												<input type=hidden name=todo value=update-profile>

												<div class='form-group'>
												<label for='default' class='col-sm-2 control-label'>Matric No</label>
												<div class='col-sm-4'>
												<input type=text name=userid readonly class='form-control' required='required' autocomplete='off' value='$row->userid'>
												</div>
												</div>
												
												<div class='form-group'>
												<label for='default' class='col-sm-2 control-label'>Full Name</label>
												<div class='col-sm-4'>
												<input type=text name=name readonly class='form-control' required='required' autocomplete='off' value='$row->name'>
												</div>
												</div>
											
												<div class='form-group'>
												<label for='default' class='col-sm-2 control-label'>Email</label>
												<div class='col-sm-4'>
												<input type=text name=email class='form-control' required='required' autocomplete='off' value='$row->email'>
												</div>
												</div>
	
												<div class='form-group'>
												<label for='default' class='col-sm-2 control-label'>Phone No</label>
												<div class='col-sm-4'>
												<input type=number name='phone' class='form-control' required='required' autocomplete='off' value='$row->phone'>
												</div>
												</div>

												<div class='form-group'>
												<label for='default' class='col-sm-2 control-label'>Date of Birth</label>
												<div class='col-sm-4'>
												<input type='date' name='dob' class='form-control' id='dob' maxlength='6' required='required' autocomplete='off' value='$row->dob'>
												</div>
												</div>

												<div class='form-group'>
												<label for='default' class='col-sm-2 control-label'>State of Origin</label>
												<div class='col-sm-4'>
												<input type='test' name='soo' class='form-control' id='soo' required='required' autocomplete='off' value='$row->soo'>
												</div>
												</div>



												<div class='form-group'>
												<label for='default' class='col-sm-2 control-label'>Marital Status</label>
												<div class='col-sm-4'>
												<input type='radio' value=Single checked name='maritaltstatus'>Single <input type='radio' value=Married  name='maritaltstatus'>Married
												</div>
												</div>

												<div class='form-group'>
												<label for='default' class='col-sm-2 control-label'>Contact Address</label>
												<div class='col-sm-4'>
												<input type='test' name='contactaddress' class='form-control' id='contactaddress' required='required' autocomplete='off' value='$row->contactaddress'>
												</div>
												</div>


												<div class='form-group'>
												<label for='default' class='col-sm-2 control-label'>Gender</label>
												<div class='col-sm-4'>
												<input type=radio value=male checked name='sex'>Male <input type='radio' value=female  name='sex'  value='$row->sex'>Female
												</div>
												</div>




												<div class='form-group'>
                                                        <div class='col-sm-offset-2 col-sm-4'>
                                                            <button type='submit' name='submit' class='btn btn-primary'>Update</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-12 -->
									
                                </div>	
										
										
										
										
										
										
										
										
									</a>
									<!-- /.dashboard-stat -->
								
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                    
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->
";

require "bottom.php";

?>
        <!-- ========== COMMON JS FILES ========== -->
        <script src='js/jquery/jquery-2.2.4.min.js'></script>
        <script src='js/jquery-ui/jquery-ui.min.js'></script>
        <script src='js/bootstrap/bootstrap.min.js'></script>
        <script src='js/pace/pace.min.js'></script>
        <script src='js/lobipanel/lobipanel.min.js'></script>
        <script src='js/iscroll/iscroll.js'></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src='js/prism/prism.js'></script>
        <script src='js/waypoint/waypoints.min.js'></script>
        <script src='js/counterUp/jquery.counterup.min.js'></script>
        <script src='js/amcharts/amcharts.js'></script>
        <script src='js/amcharts/serial.js'></script>
        <script src='js/amcharts/plugins/export/export.min.js'></script>
        <link rel='stylesheet' href='js/amcharts/plugins/export/export.css' type='text/css' media='all' />
        <script src='js/amcharts/themes/light.js'></script>
        <script src='js/toastr/toastr.min.js'></script>
        <script src='js/icheck/icheck.min.js'></script>

        <!-- ========== THEME JS ========== -->
        <script src='js/main.js'></script>
        <script src='js/production-chart.js'></script>
        <script src='js/traffic-chart.js'></script>
        <script src='js/task-list.js'></script>
        <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // Welcome notification
                toastr.options = {
                  'closeButton': true,
                  'debug': false,
                  'newestOnTop': false,
                  'progressBar': false,
                  'positionClass': 'toast-top-right',
                  'preventDuplicates': false,
                  'onclick': null,
                  'showDuration': '300',
                  'hideDuration': '1000',
                  'timeOut': '5000',
                  'extendedTimeOut': '1000',
                  'showEasing': 'swing',
                  'hideEasing': 'linear',
                  'showMethod': 'fadeIn',
                  'hideMethod': 'fadeOut'
                }
                toastr['success']( 'Welcome please Update Your Profile');

            });
        </script>
    </body>
</body>

</html>






