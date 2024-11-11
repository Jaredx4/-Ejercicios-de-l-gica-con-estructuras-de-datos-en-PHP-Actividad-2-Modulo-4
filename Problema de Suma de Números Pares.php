<?php

function sumaPares($numeros){
    
    $lista = [];
    $suma =0;
    
      for($i=0;$i<=count($numeros)-1;$i++){
          $lista[]=$numeros[$i];
      }
      
 
    
    for($i=0;$i<=count($numeros)-1;$i++){
        if($lista[$i]%2==0){
            $suma += $lista[$i];
        }
    }
    return $suma;
}

$suma=[1,2,3,4,5,4,7,9,12,12,6,7,8,9,10];

$suma2 = sumaPares($suma);

print_r($suma2);



?>
