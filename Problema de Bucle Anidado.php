<?php
function BucleAnidado($nivel){
    
    
    for($i=1; $i<=$nivel; $i++){
        for($j=0;$j<$i; $j++){
            print "*";
        }print "\n";
    }
}

BucleAnidado(10);
?>
