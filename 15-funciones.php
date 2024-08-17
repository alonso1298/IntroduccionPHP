<?php
declare(strict_types=1);
include 'includes/header.php';

//Podemos tipar los valores int, float, array, etc.. 
function sumar(int $num1, int $num2){
    echo $num1 + $num2;
}

sumar(3, 3);
echo '<br>';

//Pasarle valores por default
function resta(int $num1 = 0, int $num2 = 0){
    echo $num1 - $num2;
}

resta(num2: 6, num1: 3); // Podemos agregar argumentos con nombre
echo '<br>';

include 'includes/footer.php';