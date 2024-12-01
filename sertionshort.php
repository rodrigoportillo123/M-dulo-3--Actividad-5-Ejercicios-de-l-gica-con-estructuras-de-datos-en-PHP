<?php


function insertionSort(&$lista) {
    $n = count($lista);
    
   
    for ($i = 1; $i < $n; $i++) {
        $nombreActual = $lista[$i];
        $j = $i - 1;
        
    
        while ($j >= 0 && $lista[$j] > $nombreActual) {
            $lista[$j + 1] = $lista[$j];
            $j--;
        }
        
        
        $lista[$j + 1] = $nombreActual;
    }
}


$lista = ["Carlos", "Ana", "Pedro", "Luis", "Sofia", "Maria", "Juan"];


echo "Lista antes de ordenar: \n";
print_r($lista);


insertionSort($lista);

echo "Lista después de ordenar: \n";
print_r($lista);

?>
