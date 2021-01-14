<?php
$servername ="localhost";
$username ="root";
$password ="";
//$dbname ="phplearn";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
 {
    die("Connection failed : " . mysqli_connect_error());
 }
 else
 {
     echo "<h1>Success! Database Connected</h1>";
 }

$sql="CREATE DATABASE d2";
$result=mysqli_query($conn,$sql);

if($result)
 {
    echo "<h1>Success! Database Created</h1>";
 }
 else
 {
    echo "<h1>Error! Database Not Created</h1>" . mysqli_error($conn);
 }
?>