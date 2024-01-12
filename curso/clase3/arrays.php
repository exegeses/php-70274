<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Arrays en PHP</h1>
<?php
    $movies = [
        'Pirates of the Caribbean: Black Pearl',
        'Pirates of the Caribbean: Dead man\'s Chest',
        'Pirates of the Caribbean: At world\'s end',
        'Edward Scissorhands',
        'Donnie Brasco'
    ];
?>

<pre>
<?php
    print_r($movies);
    //var_dump($movies);
?>
</pre>
<hr>
<?php
    $marcas = [
                'Zara',
                'Tommy',
                8 => 'Gola',
                'Ambercrombie',
                'Ripcurl',
                12 => 'Billabong',
                'Alva', 'Rusty'
                ];
    $pilotos =
            [
                1 => 'Max Verstappen',
                11 => 'Sergio Pérez',
                63 => 'George Russell',
                44 => 'Lewis Hammilton',
                16 => 'Charles Leclerc'
            ];
?>
<pre>
    <?php print_r($marcas) ?>
</pre>
<hr>
    <h2>arrays asociativos</h2>
<?php
    $capitales =
                [
                    'Argentina' => 'Buenos Aires',
                    'Brasil'=> 'Brasilia',
                    'Uruguay' =>'Montevideo',
                    'Peru' => 'Lima',
                    'Chile' => 'Santiago',
                    'Paraguay' => 'Asunción'
                ];
?>
<pre>
    <?php print_r($capitales) ?>
</pre>
    </main>
<?php
include '../layouts/footer.php';
