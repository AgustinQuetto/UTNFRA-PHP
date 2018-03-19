<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');

$estacion = getdate();

if($estacion['mon'] <= 3){
    print("Estamos en verano<br>");
}elseif($estacion['mon'] <= 6){
    print("Estamos en otoño<br>");
}elseif($estacion['mon'] <= 9){
    print("Estamos en invierno<br>");
}elseif($estacion['mon'] <= 12){
    print("Estamos en primavera<br>");
}

$date = date("d/m/Y h:i:s a", time());
echo $date;

?>