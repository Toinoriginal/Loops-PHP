<?php
$soma = 0;
for($i = 1; $i <= 7; $i++){
    $consumo = readline("Digite o consumo do dia\n");
    $soma += $consumo;
}
echo"O consumo total foi de $soma litros\n";

?>