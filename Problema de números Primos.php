<?php

// Función para determinar si un número dado es primo
function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    
    for ($i = 2; $i * $i <= $numero; $i++) {
        if ($numero % $i === 0) {
            return false;
        }
    }
    
    return true;
}

$numero = 17;
if (esPrimo($numero)) {
    echo "$numero es primo.";
} else {
    echo "$numero no es primo.";
}
?>