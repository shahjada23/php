<?php
//Global varaile
$a = 80;
function local_variable()
{   
    global $a;
    // Global keyword use krla hai global value use krbo pari funtn t
    $a=45;
    // Etya global value change korila entire problem t change hbo
    $b = 40;
    // Local value okl gunction vitort access krbo pari
    echo "local = $b \n";
}
local_variable();
echo "<br>Variable num outside local_variable() is $a \n";
?>