<?php

$array = array(3,4,7,13,28,47,55);

//confirmar si el numero es primo
function primo($numero){
    for ($i = 2; $i * $i <= $numero; $i++){
        if ($numero % $i ==0){
            return false;
        }
    }
    return true;
}



?>