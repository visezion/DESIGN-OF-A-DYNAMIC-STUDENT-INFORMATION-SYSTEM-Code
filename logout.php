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
 // We must have db connection to change the status of plus_login
include "config.php"; // database connection details stored here

//$q=mysql_query("update plus_login set status='OFF' where id='$_SESSION[id]'");

@$count=$dbo->prepare("update plus_login set status='OFF' where userid='$_SESSION[userid]'");
@$count->execute();

session_unset();
session_destroy();

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Logout of plus signup script</title>

</head>

<body>
<?Php

echo "<center><font face='Verdana' size='2' >Successfully logged out. <a href=login.php>Login</a> again<br><br> </font></center>";
require "bottom.php";

?>
<center>
<br><br><a href='http://www.plus2net.com' rel="nofollow">PHP SQL HTML free tutorials and scripts</a></center> 

</body>

</html>
