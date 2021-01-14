<?php
include_once("database_connect.php");

$sql="UPDATE `phptrip` SET `dest` = 'US' WHERE `dest` = 'USA'";

$result=mysqli_query($conn,$sql);

if($result){
    echo "We updated the record successfully";
    $aff = mysqli_affected_rows($conn); // Display Number of effected Row
    echo "<br>Number of affected rows: $aff <br>";
}
else{
    echo "We could not update the record successfully";
}
?>