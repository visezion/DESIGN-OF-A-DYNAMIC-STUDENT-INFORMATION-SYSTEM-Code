<?Php
include 'include/session.php';
include 'includes/config.php';
?>
<!doctype html public '-//w3c//dtd html 3.2//en'>

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
                      
                                    <h2 class='title'> Upload Profile Picture</h2>
  
										
										
										
									
									<div class='container-fluid'>
                           
                        <div class='row'>
                                    <div class='col-md-12'>
                                        <div class='panel'>
                                            <div class='panel-heading'>
                                                <div class='panel-title'>
                                                    <h5>Upload Profile Picture</h5>
                                                </div>
                                            </div>
                                            <div class='panel-body'>
											
<form action="" method="post" enctype="multipart/form-data">
<table border="2" cellpadding="15" cellspacing="2" width="430" align="center">

<td align="center" colspan="2">Image Upload & Save into MySQL db</td>


<td>Select File Here:</td>
<td><input type="file" name="uploadImage" id="uploadImage"></td>


<td colspan=2><p align=center>
<input type="submit" value="Click Here To Upload" name="submit">
</td>

</table>
</form>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-12 -->
                                </div>	
										
										
<?php
$count=$dbh->prepare("select * from plus_signup where userid='$_SESSION[userid]'");
if(!($count->execute())){
echo "Database Problem ";
exit;
}else{
$row = $count->fetch(PDO::FETCH_OBJ);
}
?>										
										
										
										
										
										
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
                toastr['success']( 'Welcome pleses Update Your Profile');

            });
        </script>
    </body>
</body>

</html>















<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Upload image in PHP & Store Image Name,Path into MySQL database</title>
<link href="style/login-style.css" rel="stylesheet" type="text/css">
</head>
<body>



<?php

//Adding isset button function on submit button.
if(isset($_POST["submit"])) {
 
 if (!empty($_FILES["uploadImage"]["name"])) {

include 'includes/config.php';

$ImageSavefolder = "images/";

move_uploaded_file($_FILES["uploadImage"]["tmp_name"] , "$ImageSavefolder".$_FILES["uploadImage"]["name"]);

mysql_query("INSERT into plus_signup (image_name) VALUES('".$_FILES['uploadImage']['name']."')");

if($dbh) { 

echo '<p align="center"> Image name successfully saved into MySQL db.</p>'; 

}

else {
	
echo '<p align="center"> Sorry, Please try again.</p>';
}
 }
 else {
 
 echo '<p align="center"> Select file to upload </p>';
 
 }

 }
 
?>


</body>
</html>