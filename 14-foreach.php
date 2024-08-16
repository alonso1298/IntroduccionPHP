<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Television 24"',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo',
        'precio' => 400,
        'disponible' => false
    ]
];


// Para agregarlo a un Li
foreach( $productos as $producto ) { ?>
    <li>
        <p>Producto: <?php echo $producto['nombre'] ?> </p>
        <p>Precio: <?php echo '$' . $producto['precio'] ?> </p>
        <!-- Operador Ternario -->
        <p> <?php echo ($producto['disponible']) ? 'Disponible' : 'Agotado'; ?> </p>
        <?php
        // if($producto['disponible']){
        //     echo '<p>Disponible</p>';
        // }else {
        //     echo '<p>Agotado</p>';
        // }
        ?>
    </li>
    <?php

    echo '<pre>';
    var_dump($producto);
    echo '</pre>';
}

include 'includes/footer.php';