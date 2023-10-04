<?php
//array de strings
$array = array("java", "php", "hello", "world");

//funciones
//funcion para hayar strings pares

function par($pares){

    return strlen($pares) %2 ==0;


}

$array = array("php", "java", "Hello", "variable");

//creación de un nuevo array que almacene los strings pares

$solucion = array_filter($array,'par');

print_r  ($solucion);
?>