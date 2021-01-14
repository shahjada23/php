<?php
include_once("database_connect.php");

$sql="SELECT * FROM `phptrip`";

$result=mysqli_query($conn,$sql);

$num = mysqli_num_rows($result); // Find total no.of row

echo "<center>$num Record Found in Database</center><br>";

// if($num>0)
// {
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
// }

while($row = mysqli_fetch_assoc($result)){
    echo "<center>" .$row['sno'] .  ". Hello ". $row['name'] ." Welcome to ". $row['dest'];
    echo "<br></center>";
}
?>
