<?php 
$soma = 0;
$n = 0;
echo"Nota dos alunos\n";
for($i = 1; $i <= 5; $i++){
    $n = $i;
    $nota = readline("Digite a nota do aluno $i \n");
    $soma += $nota;
}
$mediafinal = $soma / $n;
echo"A média dos 5 juntas é : $mediafinal\n";

?>