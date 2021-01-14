<?php
include_once("database_connect.php");

$sql="SELECT * FROM `phptrip` WHERE `dest`='USA'";

$result=mysqli_query($conn,$sql);

$num = mysqli_num_rows($result); // Find total no.of row

echo "<center>$num Record Found in Database</center><br>";

$no=1;

while($row = mysqli_fetch_assoc($result)){
    echo "<center>" .$no .  ". Hello ". $row['name'] ." Welcome to ". $row['dest'];
    echo "<br></center>";
    $no=$no+1;
}
?>
