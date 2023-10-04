<?php

$X = array (10, 20, 30, 40, 50, 60);

//mostrar tamaño del array
echo count($X)," Tamaño array\n";
//eliminar un elemento de un array
unset ($X[2]);

$X2 = array_values($X); //nuevo array que almacena los datos no borrados del primer array

//array print
for ($i=0; $i<count($X2); $i++){
    echo $X2[$i], "\n";
}

echo count($X2)," Nuevo tamaño del array\n";

?>