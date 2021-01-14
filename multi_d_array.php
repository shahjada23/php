<?php 
//2D Array
$multiDim = array(array(2,5,7,8),
array(1,2,3,1),
array(4,5,0,1));

for ($i=0; $i < count($multiDim); $i++) { 
    for ($j=0; $j < count($multiDim[$i]); $j++) { 
        echo $multiDim[$i][$j] . " ";
    }
    echo "<br>";
}

// 3D Array
$multiDim = array(array(array(2,5,7,8),
array(1,2,3,1),
array(4,5,0,1)));

for ($i=0; $i < count($multiDim); $i++) { 
    for ($j=0; $j < count($multiDim[$i]); $j++) { 
        for ($k=0; $k < count($multiDim[$i][$j]); $k++) {
        echo $multiDim[$i][$j][$k]. " ";
        }
        echo "<br>";
    }
    echo "<br>";
}

?>
