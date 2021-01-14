<?php
function largest($number){
    $largest=0;
    foreach($number as $value) {
    if($value>$largest)
    {
      $largest=$value;
    }
}
return $largest;
}
$numberlist=[34, 98, 45, 12, 98, 93];
$result=largest($numberlist);
echo "Largest Number is :: $result";
?>
