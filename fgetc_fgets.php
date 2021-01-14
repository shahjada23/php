<?php 

$fl=fopen('myfile.txt', 'r');

echo fgets($fl); // Read File Line by Line 

while($a=fgets($fl)){
    echo $a;
}

echo "The End";

echo fgetc($fl); // Read File character by character

fclose($fl);

?>