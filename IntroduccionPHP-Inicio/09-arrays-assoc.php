<?php include 'includes/header.php';

//Los Arreglos asociativos es lo equivalente a los objetos en JS
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium'
    ]
];

echo '<pre>'; 
var_dump($cliente);
echo '<pre>';

//Acceder a un elemento es atravez de su propiedad
echo '<pre>'; 
var_dump($cliente['nombre']);
echo '<pre>';
echo $cliente['saldo'];
echo '<pre>';

//Para acceder a un arreglo dentro de otro arreglo 
echo $cliente['informacion']['tipo'];
echo '<pre>';

//Agregar mas propiedades al arreglo
$cliente['codigo'] = 12353;
echo '<pre>'; 
var_dump($cliente);
echo '<pre>';


include 'includes/footer.php';