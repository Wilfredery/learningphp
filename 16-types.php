declare(strict_types=1);
<?php include 'includes/header.php';

function authUser(bool $autenticado) : string {
    
    return ($autenticado) ? 'Welcome back' : 20;
}

$usuario = authUser(true);

// function authUser(bool $autenticado) : ?string {
    
//     return ($autenticado) ? 'Welcome back' : 20;
// }

// $usuario = authUser(false);

// function authUser(bool $autenticado) : string|int {
    
//     return ($autenticado) ? 'Welcome back' : 20;
// }

// $usuario = authUser(false);


echo $usuario;

include 'includes/footer.php';