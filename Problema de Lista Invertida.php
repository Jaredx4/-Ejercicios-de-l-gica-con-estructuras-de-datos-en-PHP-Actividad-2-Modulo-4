<?php
function ListaInvertida($numeros){
    
    $lista=[];
    
    for($i=count($numeros)-1;$i>=0;$i--){
        
        $lista[] = $numeros[$i];
        
       
    }
     return $lista;
}

$numeeros = [1,2,3,4,5,6,7]; 

$listaInvert = $numeeros;

print_r(ListaInvertida($listaInvert));
?>
