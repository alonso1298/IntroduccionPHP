<?php 
declare(strict_types=1);
include 'includes/header.php';

function usuarioAutenticado(bool $autenticado) : string { // Despues de los : decimos que tipo de dato va a retornar 
    if($autenticado) {
        return 'El Usuario esta autenticado';
    }else {
        return 'No autenticado';
    }
}

$usuario = usuarioAutenticado(false);

echo $usuario;
echo '<br>';

function esMayor($anios) : ?string{ //Al poner un sigo de ? quiere decir que puede retornar un string
    if($anios > 18){
        return 'Es mayor de edad';
    }else{
        return null;
    }
}

$persona = esMayor(55);
echo $persona;

include 'includes/footer.php';