<?php

 //declaracion de varriables   
$palabras = ["hola","Phpl","Html"];

$letra = "l";

function busqueda($arrayPalabras, $letra){ //funcion para recorrer todas las palabras en busqueda de $letra y que nos de vuelva 1 o 0 en funcionde si es True o False 

    foreach ($arrayPalabras as $palabra) {
        if (strpos($palabra,$letra)==false){
            return false;
        }
    }
    return true;


}
if (busqueda($palabras, $letra)==1){
    echo "True";

}else{
    echo "False";
}
?>