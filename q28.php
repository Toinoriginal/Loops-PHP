<?php
$m = 0;
$p = 0;
$g = 0;

for($i = 1; $i <= 10; $i++){
    $peso = readline("Peso");
    if($peso < 100){
        echo"Lote pequeno\n";
        $p ++;
    }
    else if($peso >= 100 and $peso <= 200){
        echo"Lote médio\n";
        $m ++;

    }
    else{
        echo"Lote grande\n";
        $g ++;
    }
}
echo"$p lotes pequenos, $m lotes médios, $g lotes grandes\n";

?>