<?php


function mergeSort($lista) {
   
    if (count($lista) <= 1) {
        return $lista;
    }

   
    $mitad = floor(count($lista) / 2);
    $izquierda = array_slice($lista, 0, $mitad);
    $derecha = array_slice($lista, $mitad);

    
    $izquierda = mergeSort($izquierda);
    $derecha = mergeSort($derecha);

    
    return merge($izquierda, $derecha);
}


function merge($izquierda, $derecha) {
    $resultado = [];
    $i = $j = 0;

   
    while ($i < count($izquierda) && $j < count($derecha)) {
        if ($izquierda[$i] < $derecha[$j]) {
            $resultado[] = $izquierda[$i];
            $i++;
        } else {
            $resultado[] = $derecha[$j];
            $j++;
        }
    }

    
    while ($i < count($izquierda)) {
        $resultado[] = $izquierda[$i];
        $i++;
    }

    while ($j < count($derecha)) {
        $resultado[] = $derecha[$j];
        $j++;
    }

    return $resultado;
}

// Lista de palabras
$lista = ["manzana", "naranja", "banana", "kiwi", "cereza", "uva", "limón"];


echo "Lista antes de ordenar: \n";
print_r($lista);


$listaOrdenada = mergeSort($lista);


echo "Lista después de ordenar: \n";
print_r($listaOrdenada);

?>
