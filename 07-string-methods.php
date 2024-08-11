<?php include 'includes/header.php';

$nombreCliente = 'Alonso Sagrero';

// Nos permite conocer la extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);
echo '<br/>';

// Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo $texto;
echo '<br/>';

//Convertir a mayusculas
echo strtoupper($nombreCliente);
echo '<br/>';

//Convertir en minusculas
echo strtolower($nombreCliente);
echo '<br/>';


$mail1 = 'correo@correo.com';
$mail2 = 'Correo@correo.com';

//Podemos verificar si lo que tenemos en la BD es el mismo correo
var_dump(strtolower($mail1) === strtolower($mail2));
echo '<br/>';

//Remplazar una letra en un str
//Busca esa cadena de texto, Lo reemplaxa con esa nueva cadena de texto, indicamos la variable
echo str_replace('Alonso', 'A', $nombreCliente);
echo '<br/>';

//Mostrar si un String existe o no 
echo strpos($nombreCliente, 'Alonso');
echo '<br/>';

// Concatenar y unir diferentes variables 
$tipoCliente = 'Premium';
// Podemos concatenar con . y cada uno debe llevar el .
echo 'El cliente' . $nombreCliente . ' es ' . $tipoCliente;
echo '<br/>';
// Esta forma se parece mas a un template strin IMPORTANTE solo funciona con ""
echo "El Cliente {$nombreCliente} es {$tipoCliente}";

include 'includes/footer.php';