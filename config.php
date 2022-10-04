<?Php
//error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);
$dbhost_name = "localhost";
$database = "srms"; // Change your database nae
$username = "root";          // Your database user id 
$password = "";          // Your password

//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}


?>