<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Manejo de errores</h1>

    <?php
        $x = 5;
        try {
            $y = 5/0;
        } catch ( Error $e ){
            echo 'fecha: ', date('d/m/Y H:i:s'), '<br>';
            echo 'Error: ', $e->getMessage(), '<br>';
            echo 'Archivo: ', $e->getFile(), '<br>';
            echo 'Nro de línea: ', $e->getLine(), '<br>';
            //echo 'Hubo un error';
        }
    ?>

    </main>
<?php
include '../layouts/footer.php';
