<?php include 'includes/header.php';
//Son como objetos 
//En ves de doble punto, utilizas =>
$cliente = [
    'nombre'=> 'Wil',
    'saldo' => 100,
    'info' => [
        'tipo' => 'Premium',
        'etapa' => 'completado'
    ]

];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo "<br>";

echo ($cliente["nombre"]);

echo "<br>";
echo "<pre>";
var_dump($cliente['info']['tipo']);
echo "</pre>";

echo "<br>";
echo ($cliente['info']['etapa']);

echo "<br>";
$cliente['codigo'] = 124521; 
echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';