<?php
$n = 0;
for($i = 1; $i <= 12; $i++){
    $faltas = readline("Faltas");
    if ($faltas <= 15){
        echo"Dentro do limite de faltas\n";
    }
    else{
        echo"Fora do limite de faltas\n";
        $n += 1;
    }
}
echo"$n alunos estão fora do limite de faltas\n";

?>