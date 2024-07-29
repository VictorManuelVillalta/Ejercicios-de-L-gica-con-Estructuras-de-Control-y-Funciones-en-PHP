<?php

// Función para determinar si una cadena dada es un palíndromo
function esPalindromo($cadena) {
    
    $cadena = strtolower(str_replace(' ', '', $cadena));
    
    
    return $cadena === strrev($cadena);
}

$cadena = "Anita lava la tina";
if (esPalindromo($cadena)) {
    echo "'$cadena' es un palíndromo.";
} else {
    echo "'$cadena' no es un palíndromo.";
}
?>