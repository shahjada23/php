<?php
//Write File

$fl=fopen('myfile1.txt', 'w'); //W auto create new file
fwrite($fl,"Hello World");
fclose($fl);

// Append File

$fl=fopen('myfile1.txt', 'a'); //W append data in file 
fwrite($fl,"Hello World");
fclose($fl);
?>