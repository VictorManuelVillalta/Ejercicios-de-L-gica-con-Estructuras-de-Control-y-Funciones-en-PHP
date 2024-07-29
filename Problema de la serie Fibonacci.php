<?php

// Función para generar los primeros n términos de la serie Fibonacci
function generarFibonacci($n) {
    $fibonacci = [];
    
    
    if ($n >= 1) {
        $fibonacci[] = 0;
    }
    if ($n >= 2) {
        $fibonacci[] = 1;
    }
    
    
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    
    return $fibonacci;
}


$n = 10;
$fibonacciSequence = generarFibonacci($n);
echo "Los primeros $n términos de la serie Fibonacci son: " . implode(", ", $fibonacciSequence);
?>