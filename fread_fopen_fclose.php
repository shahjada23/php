<?php
$fl=fopen('myfile.txt', 'r');

//Fopen Mode

 /*
'r' Reading only; pointer at the beginning.
'r+' Reading and writing; pointer at the beginning.
'w'	 Writing only; pointer at the beginning and truncate the file to zero length. 
If the file does not exist, attempt to create it.
*/
if(!$fl){
    die("Error !! File Not Found.");
}

$content=fread($fl, filesize('myfile.txt'));
echo $content;
fclose($fl);
?>