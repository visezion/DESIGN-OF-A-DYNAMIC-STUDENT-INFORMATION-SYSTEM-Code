<?Php
if(!isset($_SESSION['userid'])){
echo "<center><font face='Verdana' size='2' color=red>Sorry, Please <a href=index.php>login</a> and use this page </font></center>";
exit;
}else{
echo "";
}
?>
<div class='left-sidebar bg-black-300 box-shadow '>
                        <div class='sidebar-content'>
                            <div class='user-info closed'>
	<?php
	$stmt=$dbh->prepare("select * from plus_signup where userid='$_SESSION[userid]'");
	
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			
				<img src="user_images/<?php echo $row['userPic']; ?>" class="img-rounded" width="100px" height="100px" alt="Update Your Profile Picture" />
				  
			<?php
		}
	}
	else
	{
		
	}
		?>	

                               
<?php
$count=$dbh->prepare("select * from plus_signup where userid='$_SESSION[userid]'");
if(!($count->execute())){
echo "Database Problem ";
exit;
}else{
$row = $count->fetch(PDO::FETCH_OBJ);
}
echo"
								<h6 class='title'>$row->userid</h6>
								
                                <small class='info'>$row->name</small> 
	."?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
                            </div>
                            <!-- /.user-info -->

                            <div class="sidebar-nav">
                                <ul class="side-nav color-gray">
                                    <li class="nav-header">
                                        <span class="">Main Category</span>
                                    </li>
                                    <li>
                                        <a href="st_dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>
                                     
                                    </li>

                                    <li class="nav-header">
                                        <span class="">Appearance</span>
                                    </li>
                                    
 <!--<  <li class="has-children">
                                        <a href="#"><i class="fa fa-users"></i> <span>Students</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="add-students.php"><i class="fa fa-bars"></i> <span>Add Students</span></a></li>
                                            <li><a href="manage-students.php"><i class="fa fa fa-server"></i> <span>Manage Students</span></a></li>
                                           
                                        </ul>
                                    </li>
<!--<li class="has-children">
                                        <a href="#"><i class="fa fa-info-circle"></i> <span>Result</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="add-result.php"><i class="fa fa-bars"></i> <span>Add Result</span></a></li>
                                            <li><a href="manage-results.php"><i class="fa fa fa-server"></i> <span>Manage Result</span></a></li>
                                          
                                        </ul
										</li>--> 
										<li><a href="view-profile.php"><i class="fa fa-user"></i> <span> View Profile</span></a></li>
										<li><a href="register-courses.php"><i class="fa fa fa-server"></i> <span>Register Courses</span></a></li>
										<li><a href="find-result.php"><i class="fa fa-info-circle"></i> <span>Check Result</span></a></li>
										<li><a href="update-profile.php"><i class="fa fa-user"></i> <span> Update Profile</span></a></li>
                                        <li><a href="change-password.php"><i class="fa fa fa-server"></i> <span> Change Password</span></a></li>
                                           
                                    
                            </div>
                            <!-- /.sidebar-nav -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>