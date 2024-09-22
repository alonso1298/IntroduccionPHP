<?php include 'includes/header.php';

//Le indicamos que la variable sera un arreglo con []
$carrito = ['Tablet', 'Television', 'Computadora'];
//Util para ver los contenidos de un array
echo '<pre>'; // Utilizamos esta etiqueta para mejorar el formato del arreglo
var_dump($carrito);
echo '<pre>';
echo '<br/>';

//Para acceder a un elemento en especifico es por medio de su indice
var_dump($carrito[1]);
echo '<br/>';

//Agregar elemento al array 
$carrito[3] = 'Nuevo producto';

//Agregar elemento al final del arreglo 
array_push($carrito, 'Audifonos');

//Agregar elemento al inicio del arrrglo
array_unshift($carrito, 'Smart Watch');

//------------------------------------------

//la otra forma de indicar un arreglo es con la funcion array
$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');

echo '<pre>'; 
var_dump($clientes);
echo '<pre>';
echo '<br/>';


include 'includes/footer.php';