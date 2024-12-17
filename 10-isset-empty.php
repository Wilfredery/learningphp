<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('W', 'K', 'm');
$cliente = [
    'nombre' => 'Piddy',
    'saldo' => 10,

];

//Empty this check if the array is empty.
var_dump( empty($clientes) );
var_dump( empty($clientes3) );

//Isset -This checkout if an array is defined.
echo "<br>";
var_dump( isset($clientes4) );

//Isset let u check if assoc array exist
echo "<br>";
var_dump( isset($cliente['nombre']) );
var_dump( isset($cliente['codigo']) );
include 'includes/footer.php';