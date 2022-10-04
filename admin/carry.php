<?php
include("include/config.php")
//maybe put the th tag here, course, units lettergrade, etc.
$qualityPoints = 0;
$units = 0;
for($i=0; $i<5; $i++) {

    //these are just the names in input name = "", can rename yo anything you want
    $courseName = 'course'.$i; 
    $unitsName = 'units'.$i;
    $letterGradeName = 'lettergrade'.$i;

    //we are using post to retrieve these form input variables
    $letterGrade = $POST[$letterGradename];
    $units = $POST[$unitsName];
    $course = $POST[$courseName];
    //calculate the quality points for each one
    $qualityPoints = calculateQualityPoints($units, $letterGrade);
    //maybe hereyou can just output(echo) each row with the above information
    //echo above info

    //you can aggregate them here for output of the final grade, like a report card
    $qualityPoints += $qualityPoints;
    $units += $units;
}

//here you can use the total quality points and the total units to calculate gpa
$GPA = ($qualityPoints/$units)/25;
echo "GPA:". $GPA;
//or even make a function to calculate GPA
//Why not even create a report card class that encapsulates all of this, but may be over kill!
function calculateQualityPoints($units, $letterGrade) {
    if($letterGrade == 'A') {
        //you can conver the letter grade to number grade, or you can just do it directly 
        $qualityPoints = 100 * $units;
    } elseif ($letterGrade == 'B') {
        $qualityPoints = 75 * $units;                                                                         
    } elseif ($letterGrade == 'C')  {
        $qualityPoints = 50 * $units;                                                                        
    } elseif ($letterGrade == 'D')  {
        $qualityPoints = 25 * $units;                                                                           
    } else {
        $qualityPoints = 0;                                                                          
    }
    return $qualityPoints;
}

?>