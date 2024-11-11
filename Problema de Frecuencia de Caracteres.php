<?php

function FrecuenciaCaracteres($palabra){
    
    $letras = mb_str_split($palabra);
    $cont=0; 
    $array = [];
    
    foreach($letras as $letra){
    
      if(isset($array[$letra])){
          $array[$letra]++;
      }else{
          $array[$letra]=1; 
      }  
     }
    
    
    foreach($letras as $letra){
        print "La letra $letra : $array[$letra]\n";
    }
}

FrecuenciaCaracteres("Hola mundo");

?>

