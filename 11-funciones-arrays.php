<?php include 'includes/header.php';

//in-array looking for element into the array
$carrito = ['tablet', 'pc', 'tv'];

var_dump( in_array('tablet', $carrito) );

//sort items in the array
$num = array(1,3,2);
sort($num);//least to greatest
rsort($num); //greatest to least
echo "<pre>";
var_dump($num);
echo "</prev>";

//sort assoc arrays
$cliente = array(
    'saldo' => 200,
    'tipo' => 'premium',
    'nombre' => 'Juan'
);

asort($cliente); //sort by the element.
ksort($cliente); //sort by the info [].
krsort($cliente);//sort by the info [] backwards.
echo "<pre>";
var_dump($cliente);
echo "</prev>";
include 'includes/footer.php';