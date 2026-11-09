<?php
$n = (int)readline("Digite\n");
function numero(int $n){
    for($i = $n; $i > 0; $i--){
        if($n % $i == 0){
            echo "Divisor: " . $i . "\n";
        }
    }
}
numero($n);

?>