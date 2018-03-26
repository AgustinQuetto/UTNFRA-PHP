<?php

function calcularDetectar ($string, $max) {
    if($max > strlen($string))
        return 0;

    switch($string){
        case 'Recuperatorio': return 1;
            break;
        case 'Parcial': return 1;
            break; 
        case 'Programacion': return 1;
            break;
        default: return 0;
    }
}

print(calcularDetectar("Recuperatorio", 5));