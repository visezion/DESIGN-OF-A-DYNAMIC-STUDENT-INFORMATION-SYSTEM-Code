<?php
include('admin/includes/config.php');

    //$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO student (MatricNo, Password) VALUES ('matricno', 'password')";
    // use exec() because no results are returned
   $dbh->exec($sql);
    

$dbh = null;
?>