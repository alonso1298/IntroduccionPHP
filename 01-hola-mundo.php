
<h1><?php echo 'Hola Mundo'; ?></h1>

<?php include 'includes/header.php';

//Se puede hacer tambien de la siguiente manera poniendo directamente el h1
echo '<h1> Hola mundo</h1>';

/*
//Se puede tambien poner entre parentesis pero ya no se usa tanto 
echo('Hola mundo!');
//print tambien actua igual
print 'hola mundo!!';
//Este es forzosamente con parentesis 
print_r('~Hola Mundo~');
*/

//var_dump nos da mayor informacion sobre un texto que estemos imprimiendo o sobre una variable
var_dump("hola mundo");

include 'includes/footer.php';