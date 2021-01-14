<?php
session_start();

if(isset($_SESSION['username']))
{
 echo "Welcome - " . $_SESSION['username'];
 echo "<br>Fav Color - " .$_SESSION['favcolor'];
}
else
{
  echo "Please Log in";
}
?>