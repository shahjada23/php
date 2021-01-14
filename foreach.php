<?php

$list=array('Pen', 'book', 'paper');

// Using For Loop

for ($i=0; $i<count($list); $i++)
   {
      echo "$list[$i] <br>";
   }

// Simple Way - Using Foreach Loop

foreach ($list as $value) 
{
    echo "$value <br>";
}
?>