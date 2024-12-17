declare(strict_types=1);
<?php include 'includes/header.php';

function sum(int $num1 = 0,array $num2) {
    echo $num1 + $num2;
}

sum(2, []);

include 'includes/footer.php';