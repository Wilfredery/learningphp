<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'tablet',
        'precio' => 200,
        'disponible' => true
    ],


    [
        'nombre' => 'tv 24 pulgadas',
        'precio' => 300,
        'disponible' => true
    ],

    [
        'nombre' => 'monitor',
        'precio' => 400,
        'disponible' => false
    ]
];

echo "<pre>";
var_dump($productos);
echo "</pre>";
echo "<br>";
echo "<pre>";
$jsonToString = json_encode($productos, JSON_UNESCAPED_UNICODE);
$jsonToArray = json_decode($jsonToString);
echo "Array to string: ";
var_dump($jsonToString);
echo "<br>";
echo "String to Array: ";
var_dump($jsonToArray);
echo "</pre>";

include 'includes/footer.php';