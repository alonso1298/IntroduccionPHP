<?php include 'includes/header.php';

// Una variable se define con el signo $ seguido de del nombre de la variable
$nombre = 'Juan';

echo $nombre;
var_dump($nombre);
echo '<br>';

//En PHP podemos tener varibales que inicien o finalicen con un guion bajo 
$_nombre = 'Alonso';
//Se puede reasignar las variables
$_nombre = 'Sagrero';

//Para que una variable no se pueda reasignar es con Define es un indicativo de que es una comstante
define('constante', 'Este es el valor de la constante');
//Estas variables se imprimen diferente, se hace sin el signo $
echo constante;
echo '<br>';

//Tambien se pueden crear constantes similar a JS pero no es tan utilizada
const constante2 = 'Hola2';
echo constante2;

//Se pueden crear variables de 2 palabras
$nombreCliente = 'Pedro';
//En PHP se utiliza mas esta forma
$nombre_cliente = 'Pedro';


include 'includes/footer.php';