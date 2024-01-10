<?php
    include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Arrays en PHP</h1>
<?php

    $movies = [
                'Pirates of the Caribbean: Black Pearl',
                'Pirates of the Caribbean: Dead man\'s Chest',
                'Pirates of the Caribbean: AT world\'s end',
                'Edward Scissorhands',
                'Donnie Brasco'
             ];
    echo $movies[2];
?>
    <hr>
<?php
    $semana = [
                'Domingo', 'Lunes', 'Martes',
                'Miércoles', 'Jueves', 'Viernes',
                'Sábado'
              ];
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    //echo date('w');
    echo 'Hoy es: ', $semana[ date('w') ];
?>

    </main>
<?php
    include '../layouts/footer.php';
