<?php include 'includes/header.php';

// for($i = 1; $i < 50; $i++) {
//     if($i % 15 === 0) {
//         echo "<br>";
//         echo "EL ". $i ." es Multiplo de 3 y 5";
//     } else if ($i % 3 === 0) {
//         echo "<br>";
//         echo "EL ". $i ." es Multiplo de 3.";
//     } else if ($i % 5 === 0) {
//         echo "<br>";
//         echo "EL ". $i ." es Multiplo de 5";
//     }
// }

$clientes = array('P', "J", "K");

foreach( $clientes as $cliente) {
    echo $cliente . "<br>";
}

// echo count($clientes); //extension del arreglo del cliente.
// echo sizeof($clientes); //Tama;o 

// for ($i = 0; $i < count($clientes); $i++) {
//     echo $clientes[$i] . "<br>";

// }

$cliente = [
    'nombre' => 'Wil',
    'saldo' => 200,
    'tipo' => 'premium'
];

echo "<br>";
//$valor derecho. $key izquierdos.
foreach( $cliente as $key => $valor) {
    echo $key . " - ". $valor . "<br>";
}
include 'includes/footer.php';