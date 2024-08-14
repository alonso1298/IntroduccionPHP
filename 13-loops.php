<?php include 'includes/header.php';

// While

$i = 0; // Inicializador

while($i < 10) {
    
    echo $i . '<br/>';

    $i++; //Incremento
}

echo '<br/>';

// Do While 
$i = 0;

do {

    echo $i . '<br/>';
    $i++;

}while($i < 10);

echo '<br/>'; 

// Foor Loop.
for($i = 0; $i < 10; $i++ ) {
    echo $i . '<br/>';
}

echo '<br/>';

/*
* 3imprimir Fizz
* 5 Imprimir Buzz
* 3 y 5 Imprimir FizzBuzz
*/

for($i = 1; $i < 1000; $i++ ) {
    if($i % 15 === 0){
        echo $i . ' - FizzBuzz <br/>';
    } else if($i % 3 === 0) {
        echo $i . ' - Fizz <br/>';
    } else if($i % 5 === 0) {
        echo $i . ' - Buzz <br/>';
    } else {
        echo $i . '<br/>';
    }
}

include 'includes/footer.php';