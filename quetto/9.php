<?php
$vector;
for($i = 0; $i < 6; $i++){
    $vector[$i] = rand(0,10);
}

$sumando = 0;
for($i = 0; $i < count($vector); $i++){
    $sumando+= $vector[$i];
}

if ($sumando/count($vector) < 6) {
    print("El promedio es menor");
} elseif($sumando/count($vector) == 6 ) {
    print("El promedio es igual");
} elseif ($sumando/count($vector) > 6) {
    print("El promedio es mayor");
}

?>