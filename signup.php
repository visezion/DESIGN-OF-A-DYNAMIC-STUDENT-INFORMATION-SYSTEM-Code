<?php

	error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once 'includes/config.php';
	
	if(isset($_POST['btnsave']))
	{
		$userid = $_POST['userid'];// user name
		$password=$_POST['password'];
		$password2=$_POST['password2'];
		$name = $_POST['name'];// user email
		$email = $_POST['email'];// user name
		$sex = $_POST['sex'];// user name
		$phone = $_POST['phone'];// user email
		$dob = $_POST['dob'];// user name
		$maritaltstatus = $_POST['maritaltstatus'];// user name
		$contactaddress	 = $_POST['contactaddress'];// user name
		$soo = $_POST['soo'];// user email
		
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
		
		
		if(empty($userid)){
			$errMSG = "Please Enter Username.";
		}
		else if(empty($name)){
			$errMSG = "Please Enter Your Job Work.";
		}
		
		
		
		
		else if(empty($imgFile)){
			$errMSG = "Please Select Image File.";
		}
		else
		{
			$upload_dir = 'user_images/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
			
			$stmt=$dbh->prepare("select email from plus_signup where email=:email");
			$stmt->bindParam(":email",$email);
			$stmt->execute();
			$no=$stmt->rowCount();
			if($no >0 ){
			$errMSG = "This email address is there with us. If you forgot your password you can activate it by using forgot password link. Or Please try another one<BR>";
			
			}
			$stmt=$dbh->prepare("select userid from plus_signup where userid=:userid");
			$stmt->bindParam(":userid",$userid);
			$stmt->execute();
			$no=$stmt->rowCount();
			if($no >0 ){
			$errMSG = "Matric No already exists. <a href=index.php>Click Here</a> to login <br>";
			}
			
			
			//$password <> $password2;{
			//$errMSG ="Both passwords are not matching<BR>";}
							

			
			
			
		}
		
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$password_original = $password;
			$password=md5($password); // Encrypt the password before storing
			$stmt = $dbh->prepare('INSERT INTO plus_signup(userid,password,name,email,sex,phone,dob,soo,userPic,maritaltstatus,contactaddress) VALUES(:userid, :password, :name,:email, :sex,:phone,:dob,:soo, :upic, :maritaltstatus,:contactaddress)');
			$stmt->bindParam(':userid',$userid);
			$stmt->bindParam(':password',$password);
			$stmt->bindParam(':name',$name);
			$stmt->bindParam(':email',$email);
			$stmt->bindParam(':sex',$sex);
			$stmt->bindParam(':phone',$phone);
			$stmt->bindParam(':dob',$dob);
			$stmt->bindParam(':maritaltstatus',$maritaltstatus);
			$stmt->bindParam(':contactaddress',$contactaddress);
			$stmt->bindParam(':soo',$soo);
			
			$stmt->bindParam(':upic',$userpic);
			
			
		
			
			if($stmt->execute())
			{
				$successMSG = "Your Account Has Been succesfully <a href=index.php>Click Here</a> to login ...";
				//header("refresh:5;index.php"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "error while inserting....";
			}
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload, Insert, Update, Delete an Image using PHP MySQL - Coding Cage</title>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

</head>
<body>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS Admin| Student Admission< </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/select2/select2.min.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
    <nav class="navbar top-navbar bg-white box-shadow">
            	<div class="container-fluid">
                    <div class="row">
                        <div class="navbar-header no-padding">
                			<a class="navbar-brand" href="dashboard.php">
                			    SIMS | STUDENT
                			</a>
                            <span class="small-nav-handle hidden-sm hidden-xs"><i class="fa fa-outdent"></i></span>
                			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                				<span class="sr-only">Toggle navigation</span>
                				<i class="fa fa-ellipsis-v"></i>
                			</button>
                            <button type="button" class="navbar-toggle mobile-nav-toggle" >
                				<i class="fa fa-bars"></i>
                			</button>
                		</div>
                        <!-- /.navbar-header -->

                		<div class="collapse navbar-collapse" id="navbar-collapse-1">
                			<ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <li class="hidden-sm hidden-xs"><a href="#" class="user-info-handle"><i class="fa fa-user"></i></a></li>
                                <li class="hidden-sm hidden-xs"><a href="#" class="full-screen-handle"><i class="fa fa-arrows-alt"></i></a></li>
                       
                				<li class="hidden-xs hidden-xs"><!-- <a href="#">My Tasks</a> --></li>
                               
                			</ul>
                            <!-- /.nav navbar-nav -->

                			<ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                             
                				
                				    <li><a href="index.php" class="color-danger text-center"><i class="fa fa-sign-out"></i> Login</a></li>
                					
                		
                            
                			</ul>
                            <!-- /.nav navbar-nav navbar-right -->
                		</div>
                		<!-- /.navbar-collapse -->
                    </div>
                    <!-- /.row -->
            	</div>
            	<!-- /.container-fluid -->
            </nav>

            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                                       <!-- ========== LEFT SIDEBAR ========== -->
                   
<div class="left-sidebar bg-black-300 box-shadow ">
                        <div class="sidebar-content">
                           <br>
                            <!-- /.user-info -->

                            <div class="sidebar-nav">
                                <ul class="side-nav color-gray">
                                   

                                    
   
										<li><a href="index.php"><i class="fa fa-user"></i> <span> Login</span></a></li>
                                        <li><a href="forgot-password.php"><i class="fa fa fa-server"></i> <span> Forget Password</span></a></li>
                                           
                                    </li>
									
									
                                    <li class="nav-header">
                                        <span class="">Note!!!</span>	
                                    </li>
									<li><a ></i> <span> Once you Enter Your Matric Number and your Name it cannot be changed!
                                            </span></a></li>
									
									<li><a ></i> <span> You are to log in with your Matric Number and password. Once you are logged in, pay close attention to any information appearing in a green box.
													
                                            </span></a></li>
									
									
                            </div>
                            <!-- /.sidebar-nav -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>
                    <!-- /.left-sidebar -->

                    <!-- /.left-sidebar -->

                    <div class="main-page">

                     <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Student Registration Forum</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            
                            <!-- /.row -->
                        </div>
                        <div class="container-fluid">
                           
                        <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Fill the Student info</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

	<?php
	if(isset($errMSG)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
	}
	?>   

<form method="post" enctype="multipart/form-data" class="form-horizontal">
	    
	
<div class="form-group">
    	<label for="default" class="col-sm-2 control-label">Profile Picture</label>
	<div class="col-sm-4">
        <input class="input-group" type="file" name="user_image" accept="image/*" />
 </div>
</div>   
	
<div class="form-group">
<label for="default" class="col-sm-2 control-label">Matric No</label>
<div class="col-sm-4">
<input type="number" name="userid" class="form-control" id="rollid" maxlength="6" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Password</label>
<div class="col-sm-4">
<input type="password" name="password" class="form-control" id="password" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Re-Password</label>
<div class="col-sm-4">
<input type="password" name="password2" class="form-control" id="password2" required="required" autocomplete="off">
</div>
</div>


<div class="form-group">
<label for="default" class="col-sm-2 control-label">Email</label>
<div class="col-sm-4">
<input type="email" name="email" class="form-control" id="email" required="required" autocomplete="off">
</div>
</div>

											
<div class="form-group">
<label for="default" class="col-sm-2 control-label">Full Name</label>
<div class="col-sm-4">
<input type="text" name="name" class="form-control" id="fullanme" required="required" autocomplete="off">
</div>
</div>






<div class="form-group">
<label for="default" class="col-sm-2 control-label">Gender</label>
<div class="col-sm-4">
<input type='radio' value=male checked name='sex'>Male <input type='radio' value=female  name='sex'>Female
</div>
</div>


<div class="form-group">
<label for="default" class="col-sm-2 control-label">Phone No</label>
<div class="col-sm-4">
<input type="number" name="phone" class="form-control" id="phone" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Date of Birth</label>
<div class="col-sm-4">
<input type="date" name="dob" class="form-control" id="dob" maxlength="6" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">State of Origin</label>
<div class="col-sm-4">
<input type="test" name="soo" class="form-control" id="soo" required="required" autocomplete="off">
</div>
</div>



<div class="form-group">
<label for="default" class="col-sm-2 control-label">Marital Status</label>
<div class="col-sm-4">
<input type='radio' value=Single checked name='maritaltstatus'>Single <input type='radio' value=Married  name='maritaltstatus'>Married
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Contact Address</label>
<div class="col-sm-4">
<input type="test" name="contactaddress" class="form-control" id="contactaddress" required="required" autocomplete="off">
</div>
</div>



					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-4">
							<button type="submit" name="btnsave" class="btn btn-primary">Submit</button>
						</div>
					</div>




   
    
    
</form>



    

</div>



	


<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>