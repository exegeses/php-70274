<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Iterar elementos de un array</h1>
<?php
    $movies = [
        'Pirates of the Caribbean: Black Pearl',
        'Pirates of the Caribbean: Dead man\'s Chest',
        'Pirates of the Caribbean: At world\'s end',
        'Edward Scissorhands',
        'Donnie Brasco'
    ];
?>
    <ul>
<?php
    for ( $n = 0; $n < count($movies); $n++ ){
?>
        <li><?= $movies[$n] ?></li>
<?php
    }
?>       
    </ul>

    </main>
<?php
include '../layouts/footer.php';
