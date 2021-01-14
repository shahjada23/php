<?php
include_once("database_connect.php");

$sql="DELETE FROM `phptrip` WHERE `phptrip`.`sno` = 10";
$result=mysqli_query($conn,$sql);

if($result){
    echo "<center><h2>We have delete the record successfully";
    $aff = mysqli_affected_rows($conn); // Display Number of effected Row
    echo "<br><br>Number of affected rows: $aff <br></center></h2>";
}
else{
    echo "We could not delete the record successfully";
}
?>