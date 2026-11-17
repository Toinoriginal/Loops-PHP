<?php
$soma = 0;
$n = 0;
$maior = null;
for($i = 1; $i <= 7; $i++){
    $n = $i;
    $temp = readline("Digite a temperatura ");
    $soma = $soma + $temp;
    if($maior === null || $temp > $maior){
        $maior = $temp;

    }
}
$soma = $soma / $n;
echo"A média da temperatura dessa semana é $soma\n e a maior temperatura dessa semana foi de $maior\n";
//@tag:nextEditSuggestions
?>