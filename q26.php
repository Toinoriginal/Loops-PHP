<?php
$soma1 = 0;
$soma2 = 0;
for($i = 1; $i <= 50; $i++){
    if($i % 2 == 0){
        $soma1 += $i;
    }
    else{
        $soma2 += $i;
    }
}
echo"$soma1\n";
echo"$soma2\n";

?>