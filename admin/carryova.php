<?php
include('includes/config.php');

$sql = "SELECT * from tblcarryova";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>
<?php echo htmlentities($result->id);  echo htmlentities($result->CarryovaId);
 }}






?>