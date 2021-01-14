<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="phplearn";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
 {
    die("Connection failed : " . mysqli_connect_error());
 }
 else
 {
     echo "<h1><center>Success! Database Connected</center></h1><br>";
 }
?>