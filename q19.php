<?php
$a = 1;
$b = 0;
$c = 1;
$n = readline("digite\n");
echo "$b\n";
echo"$a\n";
for($i = 1; $i < $n; $i++){
    echo "$a\n";
    $c += $a;
    echo"$c\n";
    $a += $c;
    
}

?>