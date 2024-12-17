<?php include 'includes/header.php';

$autenticado = true;
$admin = false;
if($autenticado || $admin) {
    echo "autenticado correcto";
} else {
    echo "Fallido.";
}

//if anidados
$cliente = [
    'nombre' => 'Pablo',
    'saldo' => 200,
    'info' => [
        'tipo' => 'premium'
    ]
];
echo "<br>";

if ( empty($cliente) ) {
    echo 'arreglo empty';
} else {
    echo 'Array, no ta vacio';

    if($cliente['saldo'] = 0) {
        echo "<br>";
        echo 'Tan quedao.';
    } else{
        echo "<br>";
        echo 'No tan quedao.';
    }
}


if($cliente['saldo'] > 0) {
    echo "<br>";
    echo 'Waos, cuanto cualto';

} else if ($cliente['info']['tipo'] === 'Premium') {
    echo "<br>";
    echo 'El cliente es premium.';

} else {
    echo "<br>";
    echo "No hay cliente definido, no tiene saldo o no es premium.";
}
$tecno = 'PHP';
switch($tecno) {
    case 'PHP':
        echo "<br>";
        echo 'WAOS';
    break;

    default :
        echo "<br>";
        echo 'Ni idea';
    break;
}
include 'includes/footer.php';