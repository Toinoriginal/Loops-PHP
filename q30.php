<?php
$saque = readline("Digite o valor do saque\n");
$nota10 = 10;
$nota2 = 2;
$no = 0;
$na = 0;

for($i = $saque; $i > 0 || $i > 1; $i -= $t){
  if($saque >= 10){
     $saque -= $nota10;
     $t = $nota10;
     $no++;
  }
  if($saque < 10 and $saque > 1){
     $saque -= $nota2;
     $t = $nota2;
     $na++;
  }

  if($i == 1){
    echo "O valor do saque não é válido\n";
  }
}
echo "$no nota(s) de 10 foram necessárias e $na nota(s) de 2 foram necessárias\n";
?>