<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero3 = '30';

//Mayor que 
var_dump($numero1 > $numero2);
echo '<br/>';

//Menor que
var_dump($numero1 < $numero2);
echo '<br/>';

// Menor o igual
var_dump($numero1 <= $numero2);
echo '<br/>';

//Igualdad (solo valor)
var_dump($numero2 == $numero3);
echo '<br/>';

//Estrictamente Igual (revisa por valor y tipo de dato)
var_dump($numero2 === $numero3);
echo '<br/>';

// Si el numero de la izquierda es menor al de la derecha nos dara -1 
var_dump($numero1 <=> $numero2);
echo '<br/>';

// Si el numero de la izquierda es igual al de la derecha nos dara 0
var_dump($numero2 <=> $numero3);
echo '<br/>';

// Si el numero de la izquierda es menor al de la derecha nos dara 1
var_dump($numero2 <=> $numero1);
echo '<br/>';


include 'includes/footer.php';