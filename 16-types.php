<?php include 'includes/header.php';

function usuarioAutenticado() {
    return 'El usuario esta autenticado';
}

$usuario = usuarioAutenticado();

echo $usuario;

include 'includes/footer.php';