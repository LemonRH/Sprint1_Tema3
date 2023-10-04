<?php
//NO TERMINADO
$notasAlumnos = [
    "Rajoy" => [4,2,3,1,6],
    "Pedro" => [8,6,7,5,9],
    "Pablo" => [5,9,2,8,7],
    "Santiago" => [1,2,3,1,2]
];
//calcular la media de las notas 
function media($notas){
    $sumaNotas= array_sum($notas);
    return $sumaNotas/5;

}
media($notas);
?>