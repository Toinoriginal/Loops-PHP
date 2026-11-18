<?php

for($i = 1; $i <= 8; $i++){
    $valor = readline("Valor da compra: ");
    if($valor < 150){
        $frete = 25;
        echo"Frete: $frete\n";
    }
    else if($valor >= 150 and $valor <= 300){
        $frete = 15;
        echo"Frete: $frete\n";
    }
    else{
        $frete = 0;
        echo"Frete grátis\n";
    }
}

?>