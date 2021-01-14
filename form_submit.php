<?php
include_once("database_connect.php");

  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $name = $_POST['name'];
    $dest = $_POST['dest'];
    $sql="INSERT INTO `phptrip` (`sno`, `name`, `dest`) 
    VALUES  (NULL, '$name', '$dest')";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo '<center>
        <strong>Success!</strong> 
        Your Name : ' . $name.' & Destination : '.$dest. ' has been Inserted successfully!
        </center><br>';
    }
    else{
        echo "<center>Sorry Try Again</center>";
    }
  }

echo "<center> 
      <form action='#' method='post'>
      <input type='name' name='name' placeholder='Enter Name'>
      <input type='name' name='dest' placeholder='Enter Destination'>
      <input type='submit' name='submit'>
      </form>
      <center>";
?>
