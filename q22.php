<?php
$soma = 0;
for($i = 1; $i <= 5; $i++){
    $consumo = readline("Digite a quantidade vendida hoje\n");
    $soma += $consumo;
}
echo"O total vendido nesses 5 dias foi de $soma brinquedos\n";

?>