<?php
$impares;
$j = 1;
for($i = 0; $i < 10; $i++){
    $impares[$i] = $j;
    $j += 2;
}

print_r($impares);

$hola = [
            ["color" => "rojo", "marca" => "boli", "trazo" => "grueso", "precio" => 11.21],
            ["color" => "azul", "marca" => "boli", "trazo" => "grueso", "precio" => 11.21],
            ["color" => "amarillo", "marca" => "boli", "trazo" => "grueso", "precio" => 11.21]
        ];

print($hola[1]["color"]);


switch($j){
    case "color": $var[$i]["color"] = "azul";
    break;
}



?>