<?php
$course = $_REQUEST['course0'];
$units = $_REQUEST['units0'];
$letterGrade = $_REQUEST['letterGrade0'];
$letterGrade = strtoupper($letterGrade);
if($letterGrade == 'A') {
    $numberGrade = 4;
} elseif ($letterGrade == 'B') {
    $numberGrade = 3;                                                                           
} elseif ($letterGrade == 'C')  {
    $numberGrade = 2;                                                                           
} elseif ($letterGrade == 'D')  {
    $numberGrade = 1;                                                                           
} else {
    $numberGrade = 0;                                                                           
}

$qualityPoints = $units * $numberGrade;

function calculateQualityPoints($course, $units, $letterGrade, $qualityPoints) {
echo "<tr><td>$course</td><td>$units</td><td>$letterGrade</td><td>$qualityPoints</td></tr>";

}

echo "<table width='50%' align='left'><tr><th>Course</th><th>Units</th><th>Letter Grade</th><th>Quality Points</th></tr>";
calculateQualityPoints($course, $units, $letterGrade, $qualityPoints);                          
echo "<tr><td><strong>Total</strong></td><td><strong>total</strong></td><td></td><td><strong>quality total</strong></td></tr><tr><td><strong>GPA</strong></td><td><strong>GPA #</strong></td></tr></table>";                                                                                    

?>

  