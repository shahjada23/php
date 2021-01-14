<?php
function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}


function avgMarks($marksArr){
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}

$rohanDas = [34, 98, 45, 12, 98, 93];
$sumMarks = processMarks($rohanDas);
$avgMarks = avgMarks($rohanDas);
echo "Total marks scored by Rohan out of 600 is $sumMarks <br>";
echo "Average mark by Rohan out of 600 is $avgMarks <br><br>";

$royDas = [80, 98, 45, 89, 98, 93];
$sumMarks = processMarks($royDas);
$avgMarks = avgMarks($royDas);
echo "Total marks scored by Roy  out of 600 is $sumMarks <br>";
echo "Average mark scored by Roy  out of 600 is $avgMarks <br>";
?>
