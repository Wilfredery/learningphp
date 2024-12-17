<?php include 'includes/header.php';
//Arreglos indexados
//Este estilo se usa mas en larabes
$carrito = ['tablet', 'tv', 'pc'];

echo "<pre>";
var_dump($carrito[1]);
echo "</pre>";
echo "<br>";
//acceder directamente al elemento del array
echo ($carrito[1]);

//Agrega un indice
$carrito[3] = 'Nuevo Producto';

//Agregar elemento al final
array_push($carrito, "Auriculares");

//adding at the beggining
array_unshift($carrito, 'pala');


echo "<pre>";
var_dump($carrito);
echo "</pre>";
echo "<br>";

//Este estilo se usa mas en wordpress
$client = array('c1', 'c3', 'c2');
echo "<pre>";
var_dump($client);
echo "</pre>";
include 'includes/footer.php';