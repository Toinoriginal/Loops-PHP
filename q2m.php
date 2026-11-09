<?php
$s = 0;
$a = (int)readline("Digite o valor de A (menor): ");
$b = (int)readline("Digite o valor de B (maior): ");
function numero(int $a, int $b){
    global $s, $a, $b;
   for($n = $a; $n <= $b;$n++){
     if($n % 2 != 0){
        $s++;
     }

   }


}
numero($a, $b);
echo"Quantidade de ímpares:" . $s;


?>