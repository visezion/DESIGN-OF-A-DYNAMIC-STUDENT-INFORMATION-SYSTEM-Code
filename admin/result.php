 	<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Result Management System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body>
        <div class="main-wrapper">
            <div class="content-wrapper">
                <div class="content-container">

         
                    <!-- /.left-sidebar -->

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-12">
                                    <h4 class="title" align="center">LADOKE AKINTOLA UNIVERSITY OF TECHNOLOGY<br>Department of Pure and Applied Mathematics<br>STUDENT STATUS</h4>
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
								<?php
								// code Student Data
								$rollid=$_POST['rollid'];
								$classid=$_POST['class'];
								$_SESSION['rollid']=$rollid;
								$_SESSION['classid']=$classid;
								$qery = "SELECT   tblstudents.StudentName,tblstudents.RollId,tblstudents.RegDate,tblstudents.StudentId,tblstudents.Status,tblclasses.ClassName,tblclasses.Section from tblstudents join tblclasses on tblclasses.id=tblstudents.ClassId where tblstudents.RollId=:rollid and tblstudents.ClassId=:classid ";
								$stmt = $dbh->prepare($qery);
								$stmt->bindParam(':rollid',$rollid,PDO::PARAM_STR);
								$stmt->bindParam(':classid',$classid,PDO::PARAM_STR);
								$stmt->execute();
								$resultss=$stmt->fetchAll(PDO::FETCH_OBJ);
								$cnt=1;
								if($stmt->rowCount() > 0)
								{
								foreach($resultss as $row)
								{   ?>
                                               
                                                    
                                <b>Matric Number :</b> <?php echo htmlentities($row->RollId);?><br>
								<b>Student Name :</b> <?php echo htmlentities($row->StudentName);?><br>
								<b>Student Level:</b> <?php echo htmlentities($row->ClassName);?> <br>
                                <b>Section :</b> <?php echo htmlentities($row->Section);?><p></p>
								<?php }
                                  //  SELECT COUNT(id) FROM tablename
									?>
									</div>
									<div class="panel-body p-20">

										<table class="table table-hover table-bordered">
											<thead>
													<tr>
														
														<th>Course Code </th> 
														<th>Course Title</th> 
														  <th>Units</th> 
														<th>Score</th>
														<th>Grade</th>
													</tr>
										   </thead>



												
												<tbody>
											<?php                                              
											// Code for result

											 $query ="select t.StudentName,t.RollId,t.ClassId,t.marks,
											 SubjectId,tblsubjects.SubjectName,SubjectCode, SubjectUnit 
											 from (select sts.StudentName,sts.RollId,sts.ClassId,tr.marks,SubjectId from tblstudents as sts join  tblresult as tr on tr.StudentId=sts.StudentId) as t join tblsubjects on tblsubjects.id=t.SubjectId where (t.RollId=:rollid and t.ClassId=:classid)";
                                    
                                    		$query= $dbh -> prepare($query);
											$query->bindParam(':rollid',$rollid,PDO::PARAM_STR);
											$query->bindParam(':classid',$classid,PDO::PARAM_STR);
											$query-> execute();  
											$results = $query -> fetchAll(PDO::FETCH_OBJ);
											$cnt=1;
											if($countrow=$query->rowCount()>0)
											{ 

											foreach($results as $result){
                                              
												?>
                                              
											<tr>
												
												<td><?php echo htmlentities($result->SubjectCode);?></td>
												<td><?php echo htmlentities($result->SubjectName);?></td>
												<td><?php echo htmlentities($totalunit=$result->SubjectUnit);?></td>
												<td><?php echo htmlentities($totalmarks=$result->marks);?></td>
												<td><?php     $grade=$totalmarks=$result->marks; 
														{ 
															if ($grade > 69) 
																echo " A <br />"; 
															elseif ($grade > 59) 
																echo " B  <br />"; 
															elseif ($grade > 49) 
																echo " C  <br />"; 
															elseif ($grade > 44) 
																echo " D  <br />"; 
															elseif ($grade > 39) 
																echo " E  <br />"; 
															elseif ($grade > 0) 
																echo " F <br />";
                                                            elseif ($grade == 0) 
																echo " AR <br />";
                                                            elseif ($grade > 100) 
																echo " ERROR <br />";
                                                        
														

														} 

													?>                              
											
												</td>                                                
											</tr>
																				 
																								 
											<?php 
											$totlcount+=$totalunit;
											$cnt++;}
											?>
											<tr>
												<th scope="row" colspan="1">Total Unit</th>
												<td><b><?php //echo htmlentities($totlcount); ?></b> <b><?php //echo htmlentities($outof=($cnt-1)*100); ?></b></td>
												<td><b><?php echo htmlentities($totlcount); ?></b></td>
											    
                                            </tr>
                                             <i>Courese taken in Semester : </i><?php echo htmlentities($cnt-1); ?><br><br>									  
											<?php } else { ?>     
											<div class="alert alert-warning left-icon-alert" role="alert">
												<strong>Notice!</strong> Your result not declare yet
												<?php
													}
												?>
											</div>
												<?php 
													}
														else
													{
												?>

												<div class="alert alert-danger left-icon-alert" role="alert">
													<trong>Oh snap!</strong>
													<?php
														echo htmlentities("Invalid Matric No ");
													 }
													?>
                                                   </div>
                                                
											</tbody>
										</table>
									
										 
                                            
                                    <br><i>Carry forward : <br></i>

                                      <?php  
                                
                                        // code Student Data
						
                                          if($countrow=$query->rowCount()>0)
                                            { 
											foreach($results as $result)
                                                {
											$grade=$totalmarks=$result->marks; 
											     { 
											if ($grade < 40) 
												echo " $result->SubjectCode ";
												$carryforward = " $result->SubjectCode "; 
											} 

										?>                              

										<?php
										  }}
										 ?>  
											<br >  ============================<br><br>                                      
                                                <!----////////CARRY FORWAD///////////-->
             <!----///////////////////////////////CARRY FORWAD///////////////////////////////////////////--> 
                                        
                                       
										<!--	<center> 
												<th scope="row" colspan="2">Download Result</th>           
												<td><b><a href="download-result.php">Download </a> </b></td>
											</center>
                                        -->
                                            <div class="form-group">
                                                           
                                                <div class="col-sm-10">
                                                   <a href="../st_dashboard">Back to Portal</a>
                                                </div>
                                                <div class="col-sm-24">
                                                   <a href="./">Back to Admin</a>
                                                </div>
                                            </div><br>
											<script>
												function forprint(){
												if (!window.print){
												 
												return
												}
												window.print()
											}
											</script>
											<div align="center">
													<a href="javascript:forprint()">
														<style="border:0; align:middle;width:5%"> Click here to Print the Page</a>
														
											</div>
									</div>
           
                                                
									</div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->

                                  <?php
include('includes/config.php');
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 $sql = "INSERT INTO tblcarryova (CarryovaId, RollId, Status)
    VALUES ('John', 'Doe', '1')";
    // use exec() because no results are returned
    $dbh->if($sql);
    echo "New record created successfully";

$dbh = null;
     echo "unable to input data";
                                  
                                                            
                                                            
                             ?>                               
                                                            
                                                            
                                </div>
                                <!-- /.row -->
  
                            </div>
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

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function($) {

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->

    </body>
</html>


                                                            
    