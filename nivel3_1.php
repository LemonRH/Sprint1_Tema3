<?php

//funcion que eleva al cubo
function cubo($n){
    return ($n*$n*$n);
}

$array = array(2,5,8,9,3);
$array_cubo = array_map('cubo',$array);//este nuevo array con el uso de array_map llama a la funcion cubo para modificar los valores de $array y guardarlos en un nuevo array
print_r($array_cubo);
?>