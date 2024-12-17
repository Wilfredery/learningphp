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

foreach($productos as $producto) { ?>
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?> </p>
        <p>Precio: <?php echo "$".$producto['precio']; ?></p>
        <p> <?php echo ($producto['disponible']) ? "Aun Disponible"  : "No Disponible" ?></p>
        <?php 
            if($producto['disponible']) {
                echo "<p>Aun Disponible </p>";
            
            } else{
                echo "<p>No Disponible </p>";
            } 
        
        ?>
    </li>

    <?php
        echo "<pre>";
        var_dump($producto);
        echo "</pre>";
}



include 'includes/footer.php';