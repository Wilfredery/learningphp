<?php include 'includes/header.php';

$nombreCliente = '   Pablo Piddy  ';
echo "<br>";

echo strlen($nombreCliente);
echo "<br>";

var_dump($nombreCliente);
echo "<br>";

$text = trim($nombreCliente);
echo strlen($text);
echo "<br>";

//convertirlo a mayus
echo strtoupper($nombreCliente);
echo "<br>";

$email = 'correo@correo.com';
$email1 = 'Correo@correo.com';
var_dump(strtolower($email) === strtolower($email1));
echo "<br>";

//Reemplazar una algo por otro. Primero se menciona lo que se quiere reemplazar, luego colocar lo que quieres y ya mencionar donde.
echo str_replace('Pablo', 'J', $nombreCliente);
echo "<br>";

//Revisar si un string existe o no
echo strpos($nombreCliente, 'Piddy');
echo "<br>";

//Concatenar
$tipoClient = 'duro';
echo $nombreCliente . ' es ' . $tipoClient;
echo "<br>";

//Segunda forma. Solo funciona con comas dobles.
echo "El cliente {$nombreCliente} es {$tipoClient}";
include 'includes/footer.php';