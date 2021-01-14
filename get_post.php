<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $name = $_POST['name'];
    echo '<center>
          <strong>Success!</strong> 
          Your Name - ' . $name.'  has been submitted successfully!
          </center><br>';
  }

echo "<center> 
      <form action='#' method='post'>
      <input type='name' name='name' placeholder='Enter Name'>
      <input type='submit' name='submit'>
      </form>
      <center>";
?>
