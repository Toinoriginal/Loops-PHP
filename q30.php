<?php
$saque = readline("Digite o valor do saque\n");
$nota10 = 10;
$nota2 = 2;
$no = 0;
$na = 0;
for($i = $saque; $i > 0;){
  if($saque >= 10){
    $d = $saque - $nota10;

  $no++;
  }
  else{
    $d = $saque - $nota2;
    $na++;
  }
}
echo "$no notas de 10 foram necessárias e $na notas de 2 foram necessárias para o saque de $saque\n";
?>