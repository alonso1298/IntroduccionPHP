<?php include 'includes/header.php';

$carrito = ['Tablet', 'Computadora', 'Television'];

// in_array - Buscar elementos en un arreglo 
var_dump( in_array('Tablet', $carrito) );
var_dump( in_array('Audifonos', $carrito) );

//Ordenar elementos de un arreglo 
$numeros = array(1, 3, 4, 5, 1, 2);
sort($numeros); //De menor a mayor
rsort($numeros); //De mayor a menor

echo '<pre>';
var_dump($numeros);
echo '<pre/>';

//Ordenar arreglo asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Alonso'
);

asort($cliente); // Ordena por valores (Muestra primero numeros y luego en orden alfabetico)
arsort($cliente); // Ordena por valores Z primero
ksort($cliente); // Ordena por llaves en orden alfabetico
krsort($cliente); // Ordena el orden alfabetico pero al revez (de Z a lo A)

echo '<pre>';
var_dump($cliente);
echo '<pre/>';

include 'includes/footer.php';