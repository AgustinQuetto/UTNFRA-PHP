<?php

function potenciar ($numero) {
    for ($i=1; $i < 5; $i++) { 
        print(pow($numero, $i)."<br>");
    }
}

potenciar(4);