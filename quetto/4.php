<?php

$numero = 0;

for($i = 1; $i < 1000; $i++){
    if($numero + $i < 1000) {
        $numero += $i;
    }else{
        return print("Se llegó a $numero y se sumaron $i enteros");
        break;
    }
}

?>