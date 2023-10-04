<?php

$array_1 = array(2,5,6,8,3);

$array_2 = array(10,22,5,2,7);

//comparar los arrays y guardar los números comunes en un nuevo array
$comunes = array_intersect($array_1,$array_2);
print_r($comunes);

// unir/fusionar/mezclar dos arrays
$fusion = array_merge($array_1,$array_2);

print_r($fusion);


?>