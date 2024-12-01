<?php

function bubbleSortDescendente(&$lista) {
    $n = count($lista);
 
    for ($i = 0; $i < $n - 1; $i++) {
       
        for ($j = 0; $j < $n - $i - 1; $j++) {
           
            if ($lista[$j] < $lista[$j + 1]) {
               
                $temp = $lista[$j];
                $lista[$j] = $lista[$j + 1];
                $lista[$j + 1] = $temp;
            }
        }
    }
}

$lista = [3, -1, 5, 4, -2, 1, 3, 7, 6, 1];
echo "Lista antes de ordenar: \n";
print_r($lista);
bubbleSortDescendente($lista);
echo "Lista después de ordenar: \n";
print_r($lista);

?>
