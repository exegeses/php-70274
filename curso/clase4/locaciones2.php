<?php
include '../layouts/header.php';
$locaciones2 =
    [
        'Cambodia'=>'angkor',
        'Turquía'=>'azul',
        'Rusia'=>'basil',
        'Dubai'=>'burj',
        'Italia'=>'colosseo',
        'Chile'=>'easter',
        'Francia'=>'eiffel',
        'Egipto'=>'gizah',
        'Vietnam'=>'ha-long',
        'USA'=>'liberty',
        'Peru'=>'machu',
        'Australia'=>'opera',
        'Tailandia'=>'palace',
        'Jordania'=>'petra',
        'España'=>'sagrada',
        'Grecia'=>'santorini',
        'India'=>'taj',
        'China'=>'wall'
    ];

?>
    <link rel="stylesheet" href="css/locaciones.css">
    <main class="container py-3">
        <h1>Locaciones</h1>

        <section id="locaciones">

<?php
        foreach ( $locaciones2 as $llave => $valor ){
?>
            <article>
                <img src="fotos/<?= $valor ?>.jpg">
                <h2><?= $llave ?></h2>
            </article>
<?php
        }
?>

        </section>

    </main>
<?php
include '../layouts/footer.php';