<?php
include('admin/includes/config.php');

    //$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
   // $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO student (MatricNo, Password) 
	 VALUES(NULL,'$matric','$pass')";

if (mysql_query($sql))
{
	header('location:st_dashboard');
}
else
{
	die('Unable to insert data:' .mysql_error());
}
?>
