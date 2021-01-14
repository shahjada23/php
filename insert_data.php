<?php
include_once('database_connect.php');

$sql="INSERT INTO `phptrip` (`sno`, `name`, `dest`) 
VALUES  (NULL, 'Roy', 'usa')";

$result = mysqli_query($conn, $sql);

if($result){
    echo "Data Inserted successfully!<br>";
}
else{
    echo "Data Not Inserted because of this error ---> ". 
    mysqli_error($conn);
}
?>
