<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión 24"',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo',
        'precio' => 400,
        'disponible' => false
    ]
];

echo '<pre>';
var_dump($productos);
echo '<br>';

//Convertir un arreglo a un Json con json_encode
$json =json_encode($productos, JSON_UNESCAPED_UNICODE); //Para que muestre acentos y simbolos le tenemos que poner que tipo de conversion 

// Convertir un string a un arreglo 
$json_array = json_decode($json);

var_dump($json);
echo '<br>';
var_dump($json_array);

echo '<pre>';


include 'includes/footer.php';