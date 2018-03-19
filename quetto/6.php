<?php

$operador = "+";
$a = 9;
$b = 8;

echo "Resultado: ";

switch($operador){
    case "+": return print($a+$b);
        break;
    case "-": return print($a-$b);
        break;
    case "*": return print($a*$b);
        break;
    case "/": return print($a/$b);
        break;
}

?>