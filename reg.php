<?php

	error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once 'includes/config.php';
	
	if(isset($_POST['btnsave']))
	{
		
		
		
		$userid=$_POST['userid'];
		$password=$_POST['password'];
		$password2=$_POST['password2'];
		$agree=$_POST['agree'];
		$todo=$_POST['todo'];
		$email=$_POST['email'];
		$name=$_POST['name'];
		$sex=$_POST['sex'];
		$phone=$_POST['phone'];
		$dob=$_POST['dob'];
		$soo=$_POST['soo'];
		$maritaltsatus=$_POST['maritaltstatus'];
		$contactaddress=$_POST['contactaddress'];
		
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
		
		
		if(empty($uerid)){
			$errMSG = "Please Enter Matric No.";
		}
		else if(empty($email)){
			$errMSG = "Please Enter Your Email.";
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
		}
		
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('INSERT INTO plus_signup(userid,password,email,name,sex,phone,dob,soo,maritaltstatus,contactaddress,userPic) VALUES(:userid, :password, :email, :name, :sex, :phone, :dob, :soo, :maritaltstatus, :contactaddress :upic)');
			
			$stmt->bindParam(':userid',$userid,PDO::PARAM_STR, 15);
			$stmt->bindParam(':password',$password,PDO::PARAM_STR, 32);
			$stmt->bindParam(':email',$email,PDO::PARAM_STR, 75);
			$stmt->bindParam(':name',$name,PDO::PARAM_STR);
			$stmt->bindParam(':sex',$sex,PDO::PARAM_STR);
			$stmt->bindParam(':phone',$phone,PDO::PARAM_STR);
			$stmt->bindParam(':dob',$dob,PDO::PARAM_STR);
			$stmt->bindParam(':soo',$soo,PDO::PARAM_STR);
			$stmt->bindParam(':maritaltstatus',$maritaltsatus,PDO::PARAM_STR);
			$stmt->bindParam(':contactaddress',$contactaddress,PDO::PARAM_STR);
			$stmt->bindParam(':upic',$userpic);
			
			if($stmt->execute())
			{
				$successMSG = "new record succesfully inserted ...";
				header("refresh:5;image.php"); // redirects image view page after 5 seconds.
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

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
        <div class="navbar-header">
            <a class="navbar-brand" href="http://www.codingcage.com" title='Programming Blog'>Coding Cage</a>
            <a class="navbar-brand" href="http://www.codingcage.com/search/label/CRUD">CRUD</a>
            <a class="navbar-brand" href="http://www.codingcage.com/search/label/PDO">PDO</a>
            <a class="navbar-brand" href="http://www.codingcage.com/search/label/jQuery">jQuery</a>
        </div>
 
    </div>
</div>

<div class="container">


	<div class="page-header">
    	<h1 class="h2">add new user. <a class="btn btn-default" href="index.php"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; view all </a></h1>
    </div>
    

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
	    
	<table class="table table-bordered table-responsive">
	
    <tr>
    	<td><label class="control-label">Username.</label></td>
        <td><input class="form-control" type="text" name="userid" placeholder="Matric No" value="<?php echo $userid; ?>" /></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">Profession(Job).</label></td>
        <td><input class="form-control" type="text" name="name" placeholder="Your Name" value="<?php echo $name; ?>" /></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">Profile Img.</label></td>
        <td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="btnsave" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; save
        </button>
        </td>
    </tr>
    
    </table>
    
</form>



<div class="alert alert-info">
    <strong>tutorial link !</strong> <a href="http://www.codingcage.com/2016/02/upload-insert-update-delete-image-using.html">Coding Cage</a>!
</div>

    

</div>



	


<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>