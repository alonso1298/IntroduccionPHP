<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

// Condicional if, else
if($autenticado || $admin) {
    echo 'Usuario autenticado correctamente';
} else {
    echo 'Usuario no autenticado, inicia sesión';
}
echo '<br/>';

// if anidados
$cliente = [
    'nombre' => 'Alonso',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];

if( !empty($cliente)) {
    echo 'El arrglo de no cliente esta vacio';
    echo '<br/>';
    
    if($cliente['saldo'] > 0) {
        echo 'El cliente tiene saldo disponible';
    } else {
        echo 'No hay saldo';
    }
}

echo '<br/>';

// else if
if($cliente['saldo'] > 0) {
    echo 'El cliente tiene saldo';
}else if($cliente['informacion']['tipo'] == 'Premium') {
    echo 'El cliente es premium';
}else {
    echo 'No hay cliente definido o no tiene saldo o no es premium';
}

echo '<br/>';

//Switch.

$tecnologia = 'HTML';

switch ($tecnologia) {
    case 'PHP':
        echo 'php un excelente lenguaje';
        break;
    case 'JavaScript':
        echo 'Gernial, el lenguaje de la web';
        break;
    case 'HTML':
        echo 'Emmm...';
        break;
    default: 
    echo 'Algun lenguaje que no se cual es';
    break;
}

include 'includes/footer.php';