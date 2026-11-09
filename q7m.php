<?php

function numero($n){
$s =[0,1];
for ($i=2; $i<=$n;$i++){
    $s[$i] = $s[$i-2] + $s[$i-1];
}
return $s;
}

$r = numero(readline("digite o número "));
echo implode (", ", $r);

?>