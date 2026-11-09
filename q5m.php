<?php
$s = 1;
$n = (int)readline("Digite\n");
function numero(int $n){
    global $s,$n;
    for($n; $n > 1; $n--){
        $s = $s * $n;
    }
}
numero($n);
echo"$s";

?>